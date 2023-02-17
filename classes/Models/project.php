<?php 

class Project
{
    private $pdo;

    public function __construct()
    {
        $this->pdo  =   Database::getInstance();
    }


    public function getProvinceCities($province)
    {
        try{
            $query  =   "SELECT * FROM cities WHERE city_province   =   ?";
            $stmt   =   $this->pdo->prepare($query)->prepare([$province])->fetchAll();
            return ($stmt);
        } catch (PDOException $e){
            return false;
        }
        
    }
}