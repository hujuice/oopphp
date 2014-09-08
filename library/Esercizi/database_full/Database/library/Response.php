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
 * Namespace for library files
 */
namespace Database\library;

/**
 * HTTP Response
 *
 * @version 1.0.0
 */
class Response
{
    /**
     * L'istanza (unica) del controller
     * @var \Database\library\Response
     */
    private static $_instance = null;

    /**
     * Admitted status codes
     * @see http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html
     * @var array
     */
    protected static $_statuses = array(
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
     * Status code
     * @var integer
     */
    protected $_status = 500;

    /**
     * Associative array of headers
     * @var array
     */
    protected $_headers = array();

    /**
     * The response body
     * @var string
     */
    protected $_body = '';

    /**
     * Singleton
     * @return void
     */
    private function __construct()
    {
        // Do nothing
    }

    /**
     * Get unique instance
     * @return library\Response     The response instance, in the singleton way
     */
    public static function getInstance()
    {
        if(null === self::$_instance) {
            $class = __CLASS__;
            self::$_instance = new $class();
        }

        return self::$_instance;
    }

    /**
     * Reset the response to default
     * @return void
     */
    public function reset()
    {
        $class = __CLASS__;
        self::$_instance = new $class();
    }

    /**
     * Return the complete status code list
     * @return array    The status code list, for external purposes
     */
    public static function getStatusCodes()
    {
        return self::$_statuses;
    }

    /**
     * Set the status code and return the status code as integer
     * @param integer $status   The HTTP status code
     * @return integer          The same status code, normalized
     * @throw \Exception
     */
    public function status($status = null)
    {
        if ($status) {
            if (isset(self::$_statuses[$status])) {
                $this->_status = (integer) $status;
            } else {
                $this->_status = 500;
            }
        }

        return $this->_status;
    }

    /**
     * Get the status code as string
     * @return string The status code message
     */
    public function getStatus()
    {
        return self::$_statuses[$this->_status];
    }

    /**
     * Add/remove an header
     * @param string $name  Header name
     * @param string $value Header value
     * @return void
     */
    public function header($name, $value = null)
    {
        if ($value) {
            $this->_headers[$name] = $value;
        } else {
            if (isset($this->_headers[$name])) {
                unset($this->_headers[$name]);
            }
        }
    }

    /**
     * Return the headers array
     * @return array    The associative array of headers
     */
    public function getHeaders()
    {
        return $this->_headers;
    }

    /**
     * Set/overwrite a cookie
     *
     * Please, note that this is NOT the existing cookie management,
     * but the management of the cookies that WILL be set.
     * However, existing cookies can be overwritten.
     * @param string $name      The cookie name
     * @param mixed $value      The cookie value
     * @param integer $expire   The expire time, as number of seconds from now
     * @param string $path      The cookie path
     * @param string $domain    The cookie domain
     * @param boolean $secure   HTTPS only
     * @param boolean $httponly Not available for JavaScript
     * @return array            The complete cookie list
     */
    public function setCookie($name, $value = 1, $expire = 0, $path = '/', $domain = null, $secure = false, $httponly = true)
    {
        // Management

        // If value is false, PHP will try to delete the cookie
        if (!$value) {
            $value = 0;
        }

        // If expire is less than zero, delete the cookie
        if ($expire < 0) {
            $this->deleteCookie($name);
        } else {

            // The path must be a parent of the actual path
            $actual_path = pathinfo($_SERVER['REQUEST_URI'], PATHINFO_DIRNAME);
            if (strpos($actual_path, $path) !== 0) {
                throw new \Exception('Cannot give a cookie a path ouside the actual path.');
            }

            // The domain must be the actual or lower
            $actual_domain = $_SERVER['SERVER_NAME'];
            if (!$domain) {
                $domain = $actual_domain;
            } elseif (strrpos($actual_domain, $domain) !== (strlen($actual_domain) - strlen($domain))) {
                throw new \Exception('Cannot give a cookie a path ouside the actual path.');
            }

            // Store
            $this->_cookies[$name] = array(
                'value'     => $value,
                'expire'    => $expire,
                'path'      => $path,
                'domain'    => $domain,
                'secure'    => $secure,
                'httponly'  => $httponly,
            );
        }
    }

    /**
     * Delete a cookie, by name
     *
     * Please, note that this is NOT the existing cookie management,
     * but the management of the cookies that WILL be set.
     * However, this will delete existing an cookie too.
     * @param string $name     The cookie name
     * @return void
     */
    public function deleteCookie($name)
    {
        $this->_cookies[$name] = array(
            'value'     => false,
            'expire'    => -86400,
            'path'      => '/',
            'domain'    => $_SERVER['SERVER_NAME'],
            'secure'    => false,
            'httponly'  => true,
        );
    }

    /**
     * Get the stored cookies
     *
     * Please, note that this is NOT the existing cookie management,
     * but the management of the cookies that WILL be set.
     * Existing cookies are available via the $_COOKIE superglobal.
     * @return array        The cookies that will be written
     */
    public function getCookies()
    {
        if (isset($this->_cookies)) {
            return $this->_cookies;
        } else {
            return array();
        }
    }

    /**
     * Set/get the response body
     * @param string $body  The response body
     * @return string       The response body
     */
    public function body($body = null)
    {
        if ($body !== null) {
            $this->_body = (string) $body;
        }

        // Some status code require NO body
        // http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html
        // http://www.w3.org/Protocols/rfc2616/rfc2616-sec4.html#sec4.4
        return (string) $this->_body;
    }

    /**
     * Deploy the response
     *
     * Note that headers will be sent and that
     * no further headers will be possibile.
     * @return void
     */
    public function deploy()
    {
        // Status code
        header($this->getStatus());

        // Other headers
        foreach($this->_headers as $name => $value) {
            header($name . ': ' . $value);
        }

        // Cookies
        foreach($this->getCookies() as $name => $param) {
            setcookie($name, $param['value'], time() + $param['expire'], $param['path'], $param['domain'], $param['secure'], $param['httponly']);
        }

        // Body
        if ($this->_body) {
            echo $this->_body;
        }
    }
}
