<?php
require_once __DIR__ ."/../models/transaction.php";

class TransactionController{
    private $model;

    public function __construct()
    {
        $this->model    =   new Transaction();
    }

    public function getBankList()
    {
        return($this->model->getBankNames());

    }

    public function insertTransactionCategory($data)
    {
        if (!$this->empty($data['category_name']) && !$this->empty($data['category_icon'])){
            if (!$this->model->getTransactionCatagory($data['category_name']))
            {
                $this->model->setTransactionCatagory($data);
                header('Location: ../../add_transaction_category.php?message=success');
            } else {
                
                header('Location: ../../add_transaction_category.php?message=designation_already_exixts');
            }
        } else{
            header('Location: ../../add_transaction_category.php?message=incomplete_data');
        }
    }
    public function insertDesignation($name)
    {
        if (!$this->model->getDesgnation($name))
        {
            $this->model->setDesgnation($name);
            header('Location: ../../add_designation.php?message=success');
        } else {
            
            header('Location: ../../add_designation.php?message=designation_already_exixts');
        }
    }
    public function insertTransactionWithdrawal($data){
        $this->model->setTransactionWithdrawal($data);
        header('Location: ../../add_transaction.php?message=success');

    }
    public function insertTransactionOnline($data){
        $this->model->setTransactionOnline($data);
        header('Location: ../../add_transaction.php?message=success');

    }
    public function getAllBeneficiaries()
    {
        return ($this->model->getAllBeneficiaries());
    }
    public function getAllDesignations()
    {
        return ($this->model->getAllDesgnations());
    }
    public function getAllEmployees()
    {
        return ($this->model->getAllEmployees());
    }

    public function insertBeneficairy($data){
        
        if (!$this->empty($data['beneficiary_name']) && !$this->empty($data['beneficiary_bank']) && !$this->empty($data['beneficiary_account_number'])){
            $beneficiary    =   $this->model->getBeneficiaryByAccount($data['beneficiary_account_number']);
            
            if ($beneficiary['beneficiary_account_number'] == $data['beneficiary_account_number'] && $data['beneficiary_account_number']    !=  "N/A"){
                echo "IM HERE";
                // header('Location: ../../add_beneficiary.php?message=beneficiary_already_exixts');
                exit();
            }else{
                if (isset($data['beneficiary_is_employee']) && $data['beneficiary_is_employee'] ==  1){
                    if (!$this->empty($data['beneficiary_designation'])){
                        $this->model->setBeneficiary($data);
                        header('Location: ../../add_beneficiary.php?message=success');
                        exit;
                    } else{
                        header('Location: ../../add_beneficiary.php?message=incomplete_data');
                        exit;
                    }
                } else{
                    $this->model->setBeneficiary($data);
                    header('Location: ../../add_beneficiary.php?message=success');
                    exit;
                }
            }

        }else{
            header('Location: ../../add_beneficiary.php?message=incomplete_data');
            exit;
        }
    }
    public function addAccount($data){
        if (!$this->empty($data['account_name']) && !$this->empty($data['account_number']) && !$this->empty($data['account_bank'])){
            if (!$this->model->getAccount($data['account_number']))
            {
                $this->model->setAccount($data);
                header('Location: ../../add_account.php?message=success');

            }
            else{
                header('Location: ../../add_account.php?message=account_already_exixts');
            }
        }
    }
    public function getAllAccounts()
    {
        return $this->model->getAllAccounts();
    }
    private function empty($value){
        if ($value  ==  "")
        {

            header('Location: ../../add_beneficiary.php?message=incomplete_data');
            return true;
        } else{
            
            return false;
        }
    }
}

if (isset($_POST['add_designation_submit']))
{
    $controller =   new TransactionController();
    $controller->insertDesignation($_POST['designation_name']);
}

if (isset($_POST['add_beneficiary_submit'])){
    if (isset($_POST['beneficiary_checkbox'])){
        $beneficiary_checkbox   =   1;
    } else{
        $beneficiary_checkbox   =   0;
    }
    if($_POST['account_number'] == '')
    {
        $_POST['account_number']    =   'N/A';
    }
    if($_POST['beneficiary_about'] == '')
    {
        $_POST['beneficiary_about']    =   'N/A';
    }
    $data   =   [
        'beneficiary_name'              => $_POST['beneficiary_name'],
        'beneficiary_bank'              => $_POST['pakistan_bank_list'],
        'beneficiary_account_number'    => $_POST['account_number'],
        'beneficiary_about'             => $_POST['beneficiary_about'],
        'beneficiary_is_employee'       => $beneficiary_checkbox,
        'beneficiary_designation'       => $_POST['employee_designation_select'],
        'beneficiary_mobile'            => $_POST['employee_mobile'],
    ];

    $controller =   new TransactionController();

    $controller->insertBeneficairy($data);
}


if (isset($_POST['withdrawal_submit'])){
    $data   =   $_POST;
    // var_export($data);
    $controller =   new TransactionController();
    $controller->insertTransactionWithdrawal($data);

}
if (isset($_POST['bank_transfer_submit'])){
    $data   =   [
        'transaction_date'  =>   $_POST['transaction_date'],
        'transaction_amount'  =>   $_POST['transaction_amount'],
        'transaction_account_used'  =>   $_POST['transaction_account_used'],
        'transaction_type'  =>   "ONLINE",
        'transaction_beneficiary'  =>   $_POST['transaction_beneficiary'],
        'transaction_project'  =>   $_POST['transaction_project'],
        'transaction_catagory'  =>   $_POST['transaction_catagory'],
        'transaction_purpose'  =>   $_POST['transaction_purpose']
    ];
    print_r($_POST);
    $controller =   new TransactionController();
    $controller->insertTransactionOnline($data);

}

if (isset($_POST['bank_account_submit'])){
    $data   =   [
        'account_name'  => $_POST['bank_account_title'],
        'account_number' => $_POST['bank_account_number'],
        'account_bank' => $_POST['pakistan_bank_list']
    ];

    var_dump($data);
    $controller =   new TransactionController();
    $controller->addAccount($data);
}


if (isset($_POST['transaction_category_submit'])){
    $data=  [
        'category_name' => $_POST['transaction_category_name'],
        'category_icon' => $_POST['transaction_category_icon']
    ];
    $controller =   new TransactionController();
    $controller->insertTransactionCategory($data);
}