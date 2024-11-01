<?php

    error_reporting(E_ALL);

    require_once('../classes/utilities.php');
    require_once('../classes/user.php');
    session_start();

    #we want to disallow dorect visit to this file.

    if($_POST && isset($_POST['btnsubmit'])){
        
        #we want to retrieve the form data

        $fname = sanitizer($_POST['fname']);
        $lname = sanitizer($_POST['lname']);
        $email = sanitizer($_POST['email']);
        $pwd = $_POST['pwd'];
        $confirmpwd = $_POST['confirmpwd'];

        $rsp = $user1->create_account($fname, $lname, $email, $pwd, $confirmpwd);
        
        if($rsp){
            header("location:../dashboard.php");
        }else{
            header("location:../register.php");
        }


    }else{
        
        #we want to send them back to the form (register.php)
        $_SESSION['errormessage']="Please complete the form";
        header('location:../register.php');

    }



?>