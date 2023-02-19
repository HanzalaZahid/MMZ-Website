<?php

require_once "../models/user.php";
// require_once __DIR__ ."/../models/project.php";
class UserController
{
    private $model;
    private $inputErrors    =   [];

    public function __construct(){
        $this->model    =   new User();
    }

    public function signup($data){
        if (!$this->userExists($data['email']) &&  !$this->empty($data['firstname']) && !$this->empty($data['lastname']) &&  !$this->empty($data['password']) && !$this->empty($data['email'])   &&  $this->passwordMatch($data['password'], $data['confirm_password'])    &&  $this->emailCheck($data['email'])){
            echo "INPUT IS OK";
            $this->model->setUser($data);
            header('Location:../../signup.php?message=user_added');
        } else {
            print_r($this->inputErrors);
        }
        
    }

    public function signin($data){
        if (!$this->empty($data['email'])   &&  !$this->empty($data['email'])   &&  $this->emailCheck($data['email'])){
            $result   =   $this->model->getUser($data['email']);
            // var_dump($result);
            if ($result)
            {
                if ($data['email']  ==  $result[0]['user_email'] &&  password_verify($data['password'], $result[0]['user_password'])){
                    session_start();
                    $_SESSION['username']   =   $result[0]['user_firstname'] . " " . $result[0]['user_lastname'];
                    $_SESSION['loggedin']   =   true;

                    if ($data['rememberme'] ==  1){
                        setcookie('username', $_SESSION['username'], time()+(86400 * 30), "/");
                        setcookie('loggedin', true, time()+(86400 * 30), "/");
                    }

                    header('Location:../../index.php');
                } else {
                header('Location:../../login.php?error=wrong_credential');
                }
            } else {
                header('Location:../../login.php?error=user_not_found');
            }
        }
    }

    private function userExists($email){
        $result =   $this->model->getUser($email);
        if ($result)
        {
            header('Location:../../signup.php?message=user_already_exixts');

            return true;
        }
        return false;
    }

    private function empty($data){
        if ($data   === ""){
            header('Location:../../signup.php?message=incomplete_data');

        }
        return false;
    }

    private function passwordMatch($a, $b){
        if ($a  === $b){
            return true;
        }
        header('Location:../../signup.php?message=password_not_matched');
        return false;
    }

    private function emailCheck($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header('Location:../../signup.php?message=emailerror');
            array_push($this->inputErrors, "Email is not in correct formate");
            return false;
        }
        return true;
    }

}

if (isset($_POST['loginsubmit'])){
    $init   =   new UserController();
    if (isset($_POST['rememberme']))
    {
        $choice = 1;
    }
    else
    {
        $choice = 0;
    }
    $data   =   [

        'email'     =>  $_POST['user_email'],
        'password'  =>  $_POST['user_password'],
        'rememberme'  =>  $choice,
    ];
    
    $init->signin($data);
}
if (isset($_POST['signupsubmit'])){
    $init   =   new UserController();

    $data   =   [
        'firstname' =>  $_POST['firstname'],
        'lastname'  =>  $_POST['lastname'],
        'email'     =>  $_POST['email'],
        'password'  =>  $_POST['password'],
        'confirm_password'  =>  $_POST['confirm_password'],
    ];
    
    $init->Signup($data);
}