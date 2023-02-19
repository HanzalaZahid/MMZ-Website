<?php

require_once __DIR__ ."/../models/project.php";

class projectController{
    private $model;

    public function __construct()
    {
        $this->model    =   new Project();
    }

    public function getProvinceCities($province)
    {
        $result =   $this->model->getProvinceCities($province);
        return $result;
    }
    public function getCities()
    {
        $result =   $this->model->getCities();
        return $result;
    }
    public function getProvinces()
    {
        $result =   $this->model->getProvinces();
        return $result;
    }
}






if (isset($_REQUEST['province_id'])){
    $controller  =   new projectController();
    $response   =   $controller->getProvinceCities($_REQUEST['province_id']);
    $cities = array();
    echo json_encode($response);
}

if (isset($_POST['select_client'])) {
    ECHO "DONE";
}