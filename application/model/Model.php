<?php

namespace application\model;

use PDO;
use PDOException;

class Model
{
    protected $connection;

    public  function __construct()
    {
        if (!isset($this->connection)) {
            global $dbHost, $dbName, $dbUserName, $dbPassword;
            $option = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];

            try {

                $this->connection  = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbName, $dbUserName, $dbPassword, $option);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }


    protected function query($query, $vales = null) // خروجی رو برمیگردونه 
    {
        try {
            if ($vales == null) {
                return $this->connection->query($query);
            } else {
                $stmt = $this->connection->prepare($query);
                $stmt->execute($vales);
                return $stmt;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    protected function execute($query, $vales = null) // خروجی برنمیگردونه 
    {
        try {
            if ($vales == null) {
                $this->connection->exec($query);
            } else {
                $stmt = $this->connection->prepare($query);
                $stmt->execute($vales);
            }
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    protected function closeConnection()
    {
        $this->connection = null;
    }

    public function __destruct()
    {
        $this->closeConnection();
    }
}
