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
 * Questa classe gestisce il database
 */
class Model
{
    /**
     * Il database, come oggetto PDO
     * @var PDO
     */
    protected $_db;

    /**
     * Create the db instance
     * @throw Exception
     */
    public function __construct()
    {
        $config = parse_ini_file('config.ini');
        $dsn = 'mysql:dbname=' . $config['name'] . ';host=' . $config['host'];

        $this->_db = new PDO($dsn, $config['user'], $config['pass']);
    }

    /**
     * Inserisce un nuovo utente
     * @param string $name  Username
     * @param string $password  Encrypted password
     * @param string $email     Optional email
     */
    public function insert($name, $password, $email = '')
    {
        if ($email && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Invalid email address', 400);
        }
        
        $this->_db->beginTransaction();

            $sql = 'SELECT count(*) AS num_users FROM users';
            $statement = $this->_db->prepare($sql);
            $statement->execute();
            $result = $statement->fetch(PDO::FETCH_NUM);
            $num_user = $result[0] + 1;

            if ($num_user) {
                $sql = 'SELECT MAX(ID) AS last_id FROM users';
                $statement = $this->_db->prepare($sql);
                $statement->execute();
                $result = $statement->fetch(PDO::FETCH_NUM);
                $ID = $result[0] + 1;
            } else {
                $ID = 1;
            }
            
            if (version_compare(PHP_VERSION, '5.5.0') >= 0) {
                $password = password_hash($password, PASSWORD_DEFAULT);
            } else {
                $password = crypt($password);
            }

            $sql = 'INSERT INTO users
                    (ID, name, password, email)
                    VALUES(:ID, :name, :password, :email)';

            $statement = $this->_db->prepare($sql);
            $statement->bindValue(':ID', $ID, PDO::PARAM_INT);
            $statement->bindValue(':name', $name, PDO::PARAM_STR);
            $statement->bindValue(':password', $password, PDO::PARAM_STR);
            $statement->bindValue(':email', $email, PDO::PARAM_STR);

            if (!$statement->execute()) {
                //throw new Exception('fallimento!');
                print_r($statement->errorInfo());
            }

        $this->_db->commit();
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
}
