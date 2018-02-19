<?php
session_start();
include("lib/Controller.php");

if(isset($_POST['login']) && isset($_POST['password'])){
    include('lib/Login.php');
    $login = Login::getInstance($_POST['login'], $_POST['password']);
    $result = $login->validate("admins");
    
    if($result === true){
        $_SESSION['logged'] = true;
        Controller::moveTo("adminsPanel.php"); 
    }else{
       Controller::moveTo("admin.php");
    }
    
}else{
    header('Location: index.php');
    exit;
}
