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
}