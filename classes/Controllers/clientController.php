<?php

require_once __DIR__ ."/../models/client.php";

class ClientController{
    private $model;

    public function __construct(){
        $this->model    =   new Client();
    }

    public function getAllClients(){
        return $this->model->getAllClients();
    }
    public function insertClient($data){
        if (!$this->empty($data['client_name']) && !$this->empty($data['client_type']) && !$this->empty($data['client_address'])){
            $this->model->setClient($data);
            header('Location: ../../add_client.php?message=client_added');
        }
    }

    private function empty($value)
    {
        if ($value  ===  "")
        {
            header('Location: ../../add_client.php?message=incomplete_data');
            return true;
        } else{
            return false;
        }
    }
}

if (isset($_POST['client_submit'])){
    $data   =   [
        'client_name'    =>   $_POST['client_name'],
        'client_type'    =>   $_POST['client_type_radio'],
        'client_address'    =>   $_POST['client_address'],
        'client_contact'    =>   $_POST['client_mobile'],
    ];
    var_dump($data);
    $controller =   new ClientController();

    $controller->insertClient($data);
}