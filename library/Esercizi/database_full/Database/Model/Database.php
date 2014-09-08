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
 * Model area
 */
namespace Database\Model;

/**
 * Database model
 *
 * Singleton is implemented.
 * So, the model MUST be retrieved with the Database::getInstance() method.
 * The configuration is self retrieved.
 *
 * @uses        \Database\library\Config
 * @uses        \Database\library\Db
 * @version     1.0.0
 */
class Database
{
    /**
     * Single instance
     * @var \Database\Model\Database
     */
    private static $_instance = null;

    /**
     * The database connection
     * @var \Database\library\Db
     */
    protected $_db;

    /**
     * Password encryption
     * @param string $password  The password to be encrypted
     * @return string           Encrypted password
     */
    protected function _encrypt($password)
    {
        $algo = \Database\library\Config::getInstance()->encryption['algo'];
        $opts = \Database\library\Config::getInstance()->encryption['opts'];

        return password_hash($password, $algo, $opts);
    }

    /**
     * Password verify
     * @param string $password  The cleartext password
     * @param string $hash      The encrypted password
     * @return boolean          Valid/invalid password
     */
    protected function _verify($password, $hash)
    {
        return password_verify($password, $hash);
    }

    /**
     * Acquire the database configuration
     * @return void
     * @throw \Exception
     */
    private function __construct()
    {
        $conf = \Database\library\Config::getInstance()->database;

        if (!isset($conf['host']) || !isset($conf['user']) || !isset($conf['pass']) || !isset($conf['name'])) {
            throw new \Exception('Invalid database configuration: you must provide at least host, user, pass and name.');
        }

        if (!isset($conf['port'])) {
            $conf['port'] = 3306;
        }

        $this->_db = new \Database\library\Db($conf['host'], $conf['user'], $conf['pass'], $conf['name'], $conf['port']);
    }

    /**
     * Generate an instance, if not exist, and return it
     * @return \Database\Model\Database     The model instance, in the singleton way
     */
    public static function getInstance()
    {
        if(null === self::$_instance) {
            $class = __CLASS__;
            self::$_instance = new $class;
        }

        return self::$_instance;
    }

    /**
     * Verify user credentials
     * @param string $name      The user name
     * @param string $password  The user password
     * @return integer          User ID on success, 0 on failure
     */
    public function verifyCredentials($name, $password)
    {
        $sql = 'SELECT ID, password FROM users WHERE name = :name';
        $statement = $this->_db->prepare($sql);
        $statement->bindValue('name', (string) $name, \PDO::PARAM_STR);
        $result = $this->_db->execute($statement);

        if ($this->_verify($password, $result[0]['password'])) {
            return $result[0]['ID'];
        } else {
            return 0;
        }
    }

    /**
     * Get user information, give the ID
     * @param integer $id       The user ID
     * @return array            User data
     */
    public function user($id)
    {
        $sql = 'SELECT name, email, registration
                FROM users
                WHERE ID = :id';

        $statement = $this->_db->prepare($sql);
        $statement->bindValue('id', (integer) $id, \PDO::PARAM_INT);

        if ($result = $this->_db->execute($statement)) {
            return $result[0];
        } else {
            throw new \Exception('Sorry, no user with ID ' . $id, 404);
        }
    }

    /**
     * Get the user list, with limit and offset
     * @param integer $limit    Query limit
     * @param integer $offset   Query offset
     * @return array            List of users
     */
    public function userlist($limit = 10, $offset = 0)
    {
        $sql = 'SELECT ID as id, name, email, registration
                FROM users
                LIMIT :limit, :offset';

        $statement = $this->_db->prepare($sql);
        $statement->bindValue('limit', (integer) $limit, \PDO::PARAM_INT);
        $statement->bindValue('offset', (integer) $offset, \PDO::PARAM_INT);

        return $this->_db->execute($statement);
    }

    /**
     * Restituisce gli ultimi tre inserimenti
     * @return array gli ultimi utenti
     */
    public function last()
    {
        $sql = 'SELECT name, email FROM users ORDER BY ID DESC LIMIT 3';
        $statement = $this->_db->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Create a new user
     * @param string $name      The user name
     * @param string $password  The cleartext password
     * @param string $email     The optional user email
     * @return void
     */
    public function create($name, $password, $email = null)
    {
        $sql = 'INSERT
                INTO users
                SET
                    name =      :name,
                    password =  :password,
                    email =     :email';

        $statement = $this->_db->prepare($sql);
        $statement->bindValue('name', (string) $name, \PDO::PARAM_STR);
        $statement->bindValue('password', (string) $this->_encrypt($password), \PDO::PARAM_STR);
        if ($email) {
            $statement->bindValue('email', (string) $email, \PDO::PARAM_STR);
        } else {
            $statement->bindValue('email', null, \PDO::PARAM_NULL);
        }

        $this->_db->execute($statement);
    }

    /**
     * Update user data
     * @param integer $id       The user id
     * @param array $data       The new data
     * @return void
     */
    public function update($id, $data)
    {
        $expressions = array();

        // Which data?
        if (isset($data['user'])) {
            $expressions[] = 'user = :user';
        }
        if (isset($data['password'])) {
            $expressions[] = 'password = :password';
        }
        if (isset($data['email'])) {
            $expressions[] = 'email = :email';
        }

        if ($expressions) {
            $sql = 'UPDATE users SET ' . implode(', ', $expressions) . ' WHERE ID = :id';

            $statement = $this->_db->prepare($sql);
            $statement->bindValue('id', (integer) $id, \PDO::PARAM_INT);

            // Which bindings?
            if (isset($data['user'])) {
                $statement->bindValue('user', (string) $data['user'], \PDO::PARAM_STR);
            }
            if (isset($data['password'])) {
                $statement->bindValue('password', (string) $this->_encrypt($data['password']), \PDO::PARAM_STR);
            }
            if (isset($data['email'])) {
                if ($email) {
                    $statement->bindValue('email', (string) $email, \PDO::PARAM_STR);
                } else {
                    $statement->bindValue('email', null, \PDO::PARAM_NULL);
                }
            }

            $this->_db->execute($statement);

            if (!$statement->rowCount()) {
                throw new \Exception('Sorry, no user with ID ' . $id, 404);
            }

        } else {
            throw new \Exception('There are no data to be updated!', 409);
        }
    }

    /**
     * Delete a user, given the ID
     * @param integer $id       The user id
     * @return void
     */
    public function delete($id)
    {
        $sql = 'DELETE FROM users WHERE ID = :id';
        $statement->bindValue('id', (integer) $id, \PDO::PARAM_INT);
        $this->_db->execute($statement);

        if (!$statement->rowCount()) {
            throw new \Exception('Sorry, no user with ID ' . $id, 404);
        }
    }
}
