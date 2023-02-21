<?php 
$message    =   "";
if (isset($_REQUEST['message']))
{
    if($_REQUEST['message']  ==  "user_already_exixts")
    {
        $message  =   "User Already Exists";
    }
    if($_REQUEST['message']  ==  "account_already_exixts")
    {
        $message  =   "Account Already Exists";
    }
    if($_REQUEST['message']  ==  "beneficiary_already_exixts")
    {
        $message  =   "Account Number Already Exists";
    }
    if($_REQUEST['message']  ==  "designation_already_exixts")
    {
        $message  =   "Designation Already Exists";
    }
    if($_REQUEST['message']  ==  "user_added")
    {
        $message  =   "User Added";
    }
    if($_REQUEST['message']  ==  "client_added")
    {
        $message  =   "Client Added";
    }
    if($_REQUEST['message']  ==  "incomplete_data")
    {
        $message  =   "Please fill full form";
    }
    if($_REQUEST['message']  ==  "emailerror")
    {
        $message  =   "Please Enter Corrent Email";
    }
    if($_REQUEST['message']  ==  "password_not_matched")
    {
        $message  =   "Password Donot Match";
    }
    if($_REQUEST['message']  ==  "project_already_exists")
    {
        $message  =   "Project Already Exists";
    }
    if($_REQUEST['message']  ==  "success")
    {
        $message  =   "Successfully Added";
    }
    if($_REQUEST['message']  ==  "failed")
    {
        $message  =   "Failed";
    }
}
?>