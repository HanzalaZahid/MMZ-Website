<?php 
    require_once "database.php";
class Project
{
    private $pdo;

    public function __construct()
    {
        $this->pdo  =   Database::getInstance();
    }

    public function setProject($data)
    {

    }
    public function getProvinceCities($province)
    {
        try{
            $query  =   "SELECT * FROM cities WHERE city_province   =   ?";
            $stmt   =   $this->pdo->prepare($query);
            $stmt->execute([$province]);
            return ($stmt->fetchAll());
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
    public function getProvinces()
    {
        try{
            $query  =   "SELECT * FROM provinces";
            $stmt   =   $this->pdo->prepare($query);
            $stmt->execute();
            return ($stmt->fetchAll());
        } catch (PDOException $e){
            return false;
        }
        
    }
}