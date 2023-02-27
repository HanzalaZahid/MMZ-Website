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

    public function setAccount($data)
    {
        try{
            $query  = "INSERT INTO `accounts`(`account_title`, `account_bank`, `account_number`) VALUES (?, ?, ?)";
            $stmt   =   $this->pdo->prepare($query);
            $stmt->execute([$data['account_name'], $data['account_bank'], $data['account_number']]);
        } catch (PDOException $e){
            echo "ERROR : ".$e->getMessage();
        }
    }
    public function setWithdrawalTransaction($data)
    {
        $this->pdo->beginTransaction();
        $query  =   "INSERT INTO transactions ()";
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
    public function setTransactionWithdrawal($data)
    {
        try{
            $query  =   "SELECT MAX(transaction_cluster) from transactions";
            $stmt   =   $this->pdo->prepare($query);
            $stmt->execute();
            $cluster_number =   $stmt->fetch();
            if ($cluster_number ==  0){
                $cluster_number =   1;
            }

            $this->pdo->beginTransaction();
            foreach($data['transaction_amount'] as $transaction_amount){
                $query  =   "INSERT INTO `transactions`(`transaction_date`, `transaction_amount`, `transaction_account_used`, `transaction_type`, `transaction_cluster`) VALUES (?,?,?,?<?)";
                $stmt   =   $this->pdo->prepare($query);
                $stmt   =   $stmt->execute([$data['transaction_date'], $transaction_amount, $data['transaction_account_used'],"withdrawal", $cluster_number]);
            }
            
            $transaction_id =   $this->pdo->lastInsertId();
            foreach($data['cash_amount'] as $cashamount)
            $query  =   "INSERT INTO `transaction_details`(`transaction_detail_beneficiary`, `transaction_detail_amount`, `transaction_detail_project`, `transaction_detail_catagory`, `transaction_detail_purpose`, `transaction_id`) VALUES (?,?,?,?,?,?)";
            $stmt   =   $this->pdo->prepare($query);
            $stmt   =   $stmt->execute([$data['transaction_beneficiary'], $cashamount, $data['transaction_project'],$data['transaction_catagory'],$data['transaction_purpose'], $transaction_id]);
            
            $this->pdo->commit();
        } catch(PDOException $e){
            echo "ERROR: ".$e->getMessage();
        }
    }
    public function setTransactionOnline($data)
    {
        try{
            $this->pdo->beginTransaction();
            
            $query  =   "INSERT INTO `transactions`(`transaction_date`, `transaction_amount`, `transaction_account_used`, `transaction_type`) VALUES (?,?,?,?)";
            $stmt   =   $this->pdo->prepare($query);
            $stmt   =   $stmt->execute([$data['transaction_date'], $data['transaction_amount'], $data['transaction_account_used'],$data['transaction_type']]);
            
            $transaction_id =   $this->pdo->lastInsertId();
            $query  =   "INSERT INTO `transaction_details`(`transaction_detail_beneficiary`, `transaction_detail_amount`, `transaction_detail_project`, `transaction_detail_catagory`, `transaction_detail_purpose`, `transaction_id`) VALUES (?,?,?,?,?,?)";
            $stmt   =   $this->pdo->prepare($query);
            $stmt   =   $stmt->execute([$data['transaction_beneficiary'], $data['transaction_amount'], $data['transaction_project'],$data['transaction_catagory'],$data['transaction_purpose'], $transaction_id]);
            
            $this->pdo->commit();
        } catch(PDOException $e){
            echo "ERROR: ".$e->getMessage();
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
    public function setTransactionCatagory($data){
        try{
            $query  =   "INSERT INTO `transaction_categories`(`transaction_category_name`, `transaction_category_icon`) VALUES (?,?)";
        $stmt   =   $this->pdo->prepare($query);
        $stmt->execute([$data['category_name'], $data['category_icon']]);
        
        } catch (PDOException $e){
            echo "ERROR : ".$e->getMessage();
        }
    }
    public function getTransactionCatagory($name){
        try{
            $query  =   "SELECT * FROM transaction_categories where transaction_category_name   =   ?";
            $stmt   =   $this->pdo->prepare($query);
            $stmt->execute([$name]);
            return ($stmt->fetchAll());
        } catch (PDOException $e){
            echo "ERROR : ".$e->getMessage();
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
    public function getAllAccounts()
    {
        try{
            $query  =   "SELECT * FROM accounts join banks ON accounts.account_bank	=	banks.bank_id";
            $stmt  =   $this->pdo->prepare($query);
            $stmt->execute();
            return($stmt->fetchAll());
        } catch (PDOException $e){
            echo "UNABLE TO GET BANK ACCOUNTS ".  $e->getMessage();
        }
    }
    public function getAccount($number)
    {
        try{
            $query  =   "SELECT * FROM accounts WHERE account_number = ?";
            $stmt  =   $this->pdo->prepare($query);
            $stmt->execute([$number]);
            return($stmt->fetch());
        } catch (PDOException $e){
            echo "UNABLE TO GET BANK ACCOUNT ".  $e->getMessage();
        }
    }
    public function getAllBeneficiaries(){
        try
        {
            $query  =   "SELECT * FROM `beneficiaries` LEFT JOIN `employees` ON `beneficiary_id` = `employee_id` LEFT JOIN `banks` ON `beneficiary_bank` = `bank_id` LEFT JOIN `designations` ON `employee_designation` = `designation_id`;";
            $stmt   =   $this->pdo->prepare($query);
            $stmt->execute();
            return($stmt->fetchAll());
        } catch (PDOException $e){
            echo "Can't Fetch Beneficiaires : ".$e->getMessage();
        }
    }
}