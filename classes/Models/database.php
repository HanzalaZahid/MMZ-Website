<?php
    class Database
    {
        private static $instance    =   null;
        private $pdo;

        private function __construct()
        {
            $host       =   "localhost";
            $db_name    =   "mmzinteriors";
            $user       =   "root";
            $pwd        =   "";

            try
            {
                $this->pdo  =   new PDO("mysql:host=$host;dbname=$db_name", $user, $pwd);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                // echo    "Connected";
            } catch(PDOException $e) {
                echo "Couldn't connect to Database: " . $e->getMessage();
                exit;
            }

        }

        public static function getInstance() {
            if (self::$instance  === null)
            {
                self::$instance=new Database();
            }

            return self::$instance->pdo;
        }
    }

