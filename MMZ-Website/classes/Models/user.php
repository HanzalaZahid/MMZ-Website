<?php

    require_once "database.php";

    class user{

        private $pdo;

        public function __construct(){
            $this->pdo  =   Database::getInstance();
        }


        public function setUser($data)
        {
            try{
                $query  =   "INSERT INTO users (user_firstname, user_lastname, user_email, user_password) VALUES (?,?,?,?)";
                $stmt   =   $this->pdo->prepare($query);
                $stmt->execute([$data['firstname'], $data['lastname'], $data['email'], password_hash($data['password'], PASSWORD_DEFAULT) ]);

            } catch(PDOException $e){
                echo "UNABLE TO SIGN UP: "  .   $e->getMessage();
                exit();
            }
        }
        public function getUser($email)
        {
            $query  =   "SELECT * FROM users where user_email   =   ?";
            $stmt   =   $this->pdo->prepare($query);
            $stmt->execute([$email]);
            return ($stmt->fetchAll());
        }
    }
?>