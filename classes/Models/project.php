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
        try{
            $query  =   "INSERT INTO projects (`project_name`, `project_client`, `project_city`, `project_start_date`, `project_end_date`) VALUES (?,?,?,?,?)";
            $stmt   =   $this->pdo->prepare($query);
            $stmt->execute([$data['project_name'], $data['project_client'], $data['project_city'], $data['project_start_date'], $data['project_end_date']]);
        } catch (PDOException $e){
            echo "UNABLE TO ADD PROJECT ". $e->getMessage();
        }
    }
    public function getProjectByName($name)
    {
        try{
            $query  =   "SELECT * FROM projects WHERE project_name  =   ?";
            $stmt   =   $this->pdo->prepare($query);
            $stmt->execute([$name]);
            return ($stmt->fetch());
        } catch (PDOException $e){
            echo "UNABLE TO ADD PROJECT ". $e->getMessage();
        }
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
    public function getCity($city_id)
    {
        try{
            $query  =   "SELECT * FROM cities WHERE city_id   =   ?";
            $stmt   =   $this->pdo->prepare($query);
            $stmt->execute([$city_id]);
            return ($stmt->fetch());
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
    public function getAllProjects()
    {
        try{
            $query  =   "SELECT * FROM projects";
            $stmt   =   $this->pdo->prepare($query);
            $stmt->execute();
            return($stmt->fetchAll());
        } catch(PDOException $e){
            echo "ERROR : ".$e->getMessage();
        }
    }
}