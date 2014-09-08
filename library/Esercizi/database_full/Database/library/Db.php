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
 * Library area
 */
namespace Database\library;

/**
 * Class to manage a MySQL database
 *
 * @version     1.0.0
 */
class Db
{
    /**
     * The connection params
     * @var array
     */
    protected $_connection_params;

    /**
     * The database
     * @var \PDO
     */
    protected $_db;

    /**
     * Run a query in a statement and gives a fetchAll(\PDO::FETCH_ASSOC) result
     *
     * This function is intended mainly to manage the exceptions and give uniform results
     * @param \PDOStatement $statement  The already prepared statement
     * @return array                    The fetchAll(\PDO::FETCH_ASSOC) result
     * @throw \PDOException             Gives the error messasge
     */
    public function execute(\PDOStatement $statement)
    {
        if ($statement->execute())
            return $statement->fetchAll(\PDO::FETCH_ASSOC);
        else
        {
            //$statement->debugDumpParams();
            //exit;
            $error = $statement->errorInfo();
            throw new \PDOException($error[0] . ' - ' . $error[1] . ' - ' . $error[2]);
        }
    }

    /**
     * Prepare the query and return a statement
     * @param string $sql       The SQL query
     * @return \PDOStatement    The PDO statement
     * @throw \Exception
     */
    public function prepare($sql)
    {
        // Make the connection
        // Note that this way not only connect only when needed, but also avoid
        // param connection in straces.
        if (!$this->_db) {
            try {
                $this->_db = new \PDO($this->_connection_params['dsn'], $this->_connection_params['user'], $this->_connection_params['pass']);
            } catch (\Exception $e) {
                throw new \Exception('Unable to connect to dsn ' . $this->_connection_params['dsn'] . ' with user ' . $this->_connection_params['user'], 503, $e);
            }
        }

        if ($statement = $this->_db->prepare($sql))
            return $statement;
        else
        {
            $error = $this->_db->errorInfo();
            throw new \Exception($error[0] . ' - ' . $error[1] . ' - ' . $error[2]);
        }
    }

    /**
     * Acquire the database configuration and create the object
     *
     * @param string $host  Database host
     * @param string $user  Database user
     * @param string $pass  Database pass
     * @param string $name  Database name
     * @param integer $port Database port
     * @return void
     * @throw \PDOException
     */
    public function __construct($host, $user, $pass, $name, $port = 3306)
    {
        /*
            The database connection is delayed.
            This ensures that the connection is performed only when needed.
            Also, it avoids that the constructor could rise exceptions or
            participate to some strace on database failure.
            Even if error_reporting is disabled, in fact, having the constructor
            signature (with clear credentials) is unbearable.
        */
        $this->_connection_params = array(
            'dsn'   => 'mysql:dbname=' . $name . ';host=' . $host . ';port=' . $port,
            'user'  => $user,
            'pass'  => $pass,
        );
    }
}
