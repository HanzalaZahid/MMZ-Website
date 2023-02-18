<?php 
    require_once "database.php";
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
            $stmt   =   $this->pdo->prepare($query)->execute([$province])->fetchAll();
            return ($stmt);
        } catch (PDOException $e){
            return false;
        }
        
    }
    public function getCities()
    {
        try{
            $query  =   "SELECT * FROM cities ORDER BY city_name";
            $stmt   =   $this->pdo->prepare($query);
            $stmt->execute();
            return ($stmt->fetchAll());
        } catch (PDOException $e){
            return false;
        }
        
    }
}