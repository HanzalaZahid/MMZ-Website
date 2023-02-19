<?php 
$message    =   "";
if (isset($_REQUEST['message']))
{
    if($_REQUEST['message']  ==  "user_already_exixts")
    {
        $message  =   "User Already Exists";
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
}
?>