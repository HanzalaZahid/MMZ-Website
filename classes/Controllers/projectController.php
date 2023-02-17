<?php

require_once "../models/project.php";

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
}