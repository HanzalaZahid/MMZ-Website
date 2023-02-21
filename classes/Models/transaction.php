<?php
require_once "database.php";
class Transaction{
    private $pdo;

    public function __construct()
    {
        $this->pdo  =   Database::getInstance();
    }

    public function getBankNames(){
        try{
            $query  =   "SELECT * FROM banks";
            $stmt   =   $this->pdo->prepare($query);
            $stmt->execute();
            return ($stmt->fetchAll());
        } catch (PDOException $e){
            echo "Unable to get bank list : " . $e->getMessage();
        }
    }

    public function setDesgnation($name)
    {
        try{
            $query  =   "INSERT INTO designations (`designation_name`) VALUES (?)";
            $stmt  =   $this->pdo->prepare($query);
            $stmt->execute([$name]);      
        } catch (PDOException $e){
            echo "UNABLE TO SET DESTINATION ".  $e->getMessage();
        }
    }
    public function getDesgnation($name)
    {
        try{
            $query  =   "SELECT * FROM designations WHERE designation_name  =   ?";
            $stmt  =   $this->pdo->prepare($query);
            $stmt->execute([$name]);
            return($stmt->fetch());
        } catch (PDOException $e){
            echo "UNABLE TO GET DESTINATION ".  $e->getMessage();
        }
    }
    public function getBeneficiaryByAccount($account)
    {
        try{
            $query  =   "SELECT * FROM beneficiaries WHERE beneficiary_account_number  =   ?";
            $stmt  =   $this->pdo->prepare($query);
            $stmt->execute([$account]);
            return($stmt->fetch());
        } catch (PDOException $e){
            echo "UNABLE TO GET BENEFICIARY ".  $e->getMessage();
        }
    }
    public function getAllDesgnations()
    {
        try{
            $query  =   "SELECT * FROM designations ORDER BY designation_name";
            $stmt  =   $this->pdo->prepare($query);
            $stmt->execute();
            return($stmt->fetchAll());
        } catch (PDOException $e){
            echo "UNABLE TO GET DESTINATION ".  $e->getMessage();
        }
    }

    public function setBeneficiary($data){
        try{
            $this->pdo->beginTransaction();
            $query  =   "INSERT INTO beneficiaries(`beneficiary_name`, `beneficiary_bank`, `beneficiary_account_number`, `beneficiary_about`) VALUES (?, ?, ?, ?)";
            $stmt   =   $this->pdo->prepare($query);
            $stmt->execute([$data['beneficiary_name'], $data['beneficiary_bank'], $data['beneficiary_account_number'], $data['beneficiary_about']]);

            if (isset($data['beneficiary_is_employee']) && $data['beneficiary_is_employee'] ==  1)
            {
                $employeeID =   $this->pdo->lastInsertId();
                $query  =   "INSERT INTO `employees`(`employee_id`, `employee_designation`, `employee_contact`) VALUES (?, ?, ?)";
                $stmt   =   $this->pdo->prepare($query);
                $stmt->execute([$employeeID, $data['beneficiary_designation'], $data['beneficiary_mobile']]);
            }

            $this->pdo->commit();
        } catch (PDOException $e){
            $this->pdo->rollBack();
            echo "Error: " . $e->getMessage();
        }
    }

    public function setWithdrawalTransaction($data)
    {
        $this->pdo->beginTransaction();
        $query  =   "INSERT INTO"
    }
}