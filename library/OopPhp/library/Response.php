<?php
/**
 * OopPhp: corso di PHP avanzato
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
 * Library area
 */
namespace OopPhp\library;

/**
 * Hold and verify the response
 * @version     1.0.0
 */
class Response
{
    /**
     * Admitted status codes
     * @see http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html
     * @var array
     */
    protected $_statuses = array(
        100 => 'HTTP/1.1 100 Continue',
        101 => 'HTTP/1.1 101 Switching Protocols',
        200 => 'HTTP/1.1 200 OK',
        201 => 'HTTP/1.1 201 Created',
        202 => 'HTTP/1.1 202 Accepted',
        203 => 'HTTP/1.1 203 Non-Authoritative Information',
        204 => 'HTTP/1.1 204 No Content',
        205 => 'HTTP/1.1 205 Reset Content',
        206 => 'HTTP/1.1 206 Partial Content',
        300 => 'HTTP/1.1 300 Multiple Choices',
        301 => 'HTTP/1.1 301 Moved Permanently',
        302 => 'HTTP/1.1 302 Found',
        303 => 'HTTP/1.1 303 See Other',
        304 => 'HTTP/1.1 304 Not Modified',
        305 => 'HTTP/1.1 305 Use Proxy',
        306 => 'HTTP/1.1 306 (Unused)',
        307 => 'HTTP/1.1 307 Temporary Redirect',
        400 => 'HTTP/1.1 400 Bad Request',
        401 => 'HTTP/1.1 401 Unauthorized',
        402 => 'HTTP/1.1 402 Payment Required',
        403 => 'HTTP/1.1 403 Forbidden',
        404 => 'HTTP/1.1 404 Not Found',
        405 => 'HTTP/1.1 405 Method Not Allowed',
        406 => 'HTTP/1.1 406 Not Acceptable',
        407 => 'HTTP/1.1 407 Proxy Authentication Required',
        408 => 'HTTP/1.1 408 Request Timeout',
        409 => 'HTTP/1.1 409 Conflict',
        410 => 'HTTP/1.1 410 Gone',
        411 => 'HTTP/1.1 411 Length Required',
        412 => 'HTTP/1.1 412 Precondition Failed',
        413 => 'HTTP/1.1 413 Request Entity Too Large',
        414 => 'HTTP/1.1 414 Request-URI Too Long',
        415 => 'HTTP/1.1 415 Unsupported Media Type',
        416 => 'HTTP/1.1 416 Requested Range Not Satisfiable',
        417 => 'HTTP/1.1 417 Expectation Failed',
        500 => 'HTTP/1.1 500 Internal Server Error',
        501 => 'HTTP/1.1 501 Not Implemented',
        502 => 'HTTP/1.1 502 Bad Gateway',
        503 => 'HTTP/1.1 503 Service Unavailable',
        504 => 'HTTP/1.1 504 Gateway Timeout',
        505 => 'HTTP/1.1 505 HTTP Version Not Supported',
    );

    /**
     * The final status code
     * @var integer
     */
    protected $_status = 200;

    /**
     * Page informations
     * @var array
     */
    protected $_page;

    /**
     * Set the status code and return the status code as integer
     * @param integer $status   The HTTP status code
     * @return integer          The same status code, normalized
     * @throw \Exception
     */
    public function status($status = null)
    {
        if (!is_null($status)) {
            if ($status) {
                if (array_key_exists($status, $this->_statuses)) {
                    $this->_status = (integer) $status;
                } else {
                    $this->_status = 500;
                }
            }
        }

        return $this->_status;
    }

    /**
     * Get the status code as string
     * @return string The status code message
     */
    public function getStatusAsString($status = null)
    {
        if (!$status) {
            $status = $this->_status;
        }
        return $this->_statuses[$this->_status];
    }

    /**
     * Get or set the response page
     * @param array $page
     * @return array
     */
    public function page($page = null)
    {
        if (is_array($page)) {
            if (empty($page['title'])) {
                throw new \Exception('The requested page lacks its title.');
            }

            $this->_page = $page;
        } elseif (!is_null($page)) {
            throw new \Exception('The page has not been provided as array');
        }

        return $this->_page;
    }
}
