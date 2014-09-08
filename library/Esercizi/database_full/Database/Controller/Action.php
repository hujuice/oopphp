<?php
/**
 * Istat, Corso PHP 20-24 gennaio 2014
 *
 * LICENSE
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @license     http://opensource.org/licenses/GPL-3.0 GNU General Public License, version 3 (GPL-3.0)
 * @author      Sergio Vaccaro <sergio.vaccaro@istat.it>
 * @copyright   2014 Istat, Italy
 * @version     1.0.0
 */

/**
 * Controller namespace
 */
namespace Database\Controller;

/**
 * Action controller
 *
 * @uses        \Database\library\Config
 * @uses        \Database\library\Response
 * @uses        \Database\Model\Database
 * @uses        \Database\View\ViewFactory
 * @version     1.0.0
 */
class Action
{
    /**
     * Response object
     * @var \Database\library\Response
     */
    protected $_response;

    /**
     * The DB model
     * @var \Database\Model\Database
     */
    protected $_database;

    /**
     * Set the Content-Type and the body of the response, given the view
     * @param string $message   The message
     * @param string $data      Data
     * @return void
     */
    protected function _deploy($message, $data)
    {
        // The view
        $view = \Database\View\ViewFactory::create(\Database\library\Config::getInstance()->main['view']);

        // Set the Content-Type header
        $this->_response->header('Content-Type', $view->contentType());

        // Set the data
        $view->message($message);
        $view->data($data);
        $this->_response->body($view());
    }

    /**
     * Create a response
     * @return void
     */
    public function __construct()
    {
        $this->_response = \Database\library\Response::getInstance();
        $this->_database = \Database\Model\Database::getInstance();
    }

    /**
     * Error action
     * @param string $message   The error message
     * @param integer $status   An HTTP status code
     * @return void
     */
    public function error($message, $status = 500)
    {
        // Reset the response
        $this->_response->reset();
        $status = $this->_response->status($status); // Will normalize the status code

        // Security: hide error messages for 500 errors
        if (500 == $status) {
            $message = 'Oops, an internal error has occurred';
        }

        $this->_deploy($message, null);
    }

    /**
     * Return user informations, given the ID
     * @param integer $id       The user ID
     * @return void
     */
    public function user($id)
    {
        $user = $this->_database->user($id);
        $this->_response->status(200);
        $this->_deploy(null, $user);
    }

    /**
     * Return the user list
     * @param integer $limit    Limit
     * @param integer $offset   Offset
     * @return void
     */
    public function userlist($limit = 10, $offset = 0)
    {
        $this->_response->status(200);
        $this->_deploy(null, $this->_database->userlist($limit, $offset));
    }

    /**
     * Create a new user
     * @param array $data   POST data
     * @return void
     */
    public function create($data)
    {
        if (empty($data['name'])) {
            throw new \Exception('You MUST provide a username.', 409);
        }
        if (empty($data['password'])) {
            throw new \Exception('You MUST provide a password.', 409);
        }
        if (empty($data['email'])) {
            $data['email'] = null;
        } else {
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                throw new \Exception('Invalid email address', 400);
            }
        }

        $this->_response->status(200);
        $this->_database->create($data['name'], $data['password'], $data['email']);
        $last = $this->_database->last();
        $this->_deploy('The user has been created. Here is the resulting ID.', implode("\n", $last));
    }

    /**
     * Update the user data
     * @param integer $id   The user ID
     * @param array $data   POST data
     * @return void
     */
    public function update($id, $data)
    {
        $this->_database->update($id, $data);
        $this->_response->status(200);
        $this->_deploy('The user data have been updated.', null);
    }

    /**
     * Delete the user
     * @param integer $id   The user ID
     * @return void
     */
    public function delete($id)
    {
        $this->_database->delete($id);
        $this->_response->status(200);
        $this->_deploy('The user has been deleted.', null);
    }

    /**
     * Request auth credentials
     * @param string $message   The message, depending on missing or wrong credentials
     * @return void
     */
    public function authRequest($message)
    {
        $this->_response->status(401);
        $this->_response->header('WWW-Authenticate', 'Basic realm="' . \library\Config::getInstance()->main['realm'] . '"');
        $this->_deploy($message, null);
    }
}
