<?php

require_once __DIR__ ."/../models/project.php";
require_once __DIR__ ."/../models/client.php";

class ProjectController{
    private $model;
    private $clientModel;

    public function __construct()
    {
        $this->model    =   new Project();
    }

    public function insertProject($data){
        if (!$this->empty($data['client'])   &&  !$this->empty($data['city']) &&  !$this->empty($data['start_date'])   &&  !$this->empty($data['end_date'])){
            $result  =   $this->model->getCity(intval($data['city']));
            $city_name  =   $result['city_name'];
            $this->clientModel    =   new Client();
            $result     =   $this->clientModel->getClient(intval($data['client']));
            $client_name=   $result['client_name'];
            $project_year   =   date('m,y', strtotime($data['start_date']));
            $project_year   =   str_replace(',','', $project_year);
            $project_year   =   str_replace(' ','', $project_year);
            $project_name   =   $client_name." ".$city_name." ".$project_year;
            

            $dataToInsert   =   [
                'project_name'          =>  $project_name,
                'project_client'        =>  intval($data['client']),
                'project_city'          =>  intval($data['city']),
                'project_start_date'    =>  $data['start_date'],
                'project_end_date'      =>  $data['end_date'],
            ];
            var_dump($dataToInsert);
            if (!$this->model->getProjectByName($project_name))
            {
                $this->model->setProject($dataToInsert);
                header('Location: ../../add_project.php?message=success');

            } else
            {
                header('Location: ../../add_project.php?message=project_already_exists');
            }
        }
    }

    private function empty($value){
        if ($value  ==  "")
        {
            header('Location: ../../add_project.php?message=incomplete_data');
            return true;
        } else{
            return false;
        }
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
    $controller  =   new ProjectController();
    $response   =   $controller->getProvinceCities($_REQUEST['province_id']);
    $cities = array();
    echo json_encode($response);
}

if (isset($_POST['select_client'])) {
    $data   =   [
        'client'        =>   $_POST['select_client'],
        'city'          =>   $_POST['select_city'],
        'start_date'    =>   $_POST['project_start_date'],
        'end_date'      =>   $_POST['project_end_date'],
    ];
    // var_dump($data);
    $controller =   new ProjectController();
    $controller->insertProject($data);
}