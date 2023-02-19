<?php
require_once "database.php";
class Client{
    private $pdo;

    public function __construct()
    {
        $this->pdo  =   Database::getInstance();
    }

    public function setClient($data)
    {
        try{
            $query  =   'INSERT INTO clients (`client_name`, `client_type`, `client_address`, `client_contact`) VALUES (?,?,?,?)';
            $stmt   =   $this->pdo->prepare($query);
            $stmt->execute([$data['client_name'], $data['client_type'], $data['client_address'], $data['client_contact']]);
            echo "INSERTED CLIENT";
        } catch (PDOException $e){
            echo "UNABLE TO INSERT CLIENT: ".$e->getMessage();
        }
    }
    public function getClient($client_id)
    {
        try{
            $query  =   'SELECT * FROM clients where client_id  =   ?';
            $stmt   =   $this->pdo->prepare($query);
            $stmt->execute([$client_id]);
            return($stmt->fetchAll());
        } catch (PDOException $e){
            echo "UNABLE TO GET CLIENT: ".$e->getMessage();
        }
    }
    public function getAllClients()
    {
        try{
            $query  =   'SELECT * FROM clients';
            $stmt   =   $this->pdo->prepare($query);
            $stmt->execute();
            return($stmt->fetchAll());
        } catch (PDOException $e){
            echo "UNABLE TO GET CLIENT: ".$e->getMessage();
        }
    }
}