<?php
session_start();
require_once "lib/Config.php";

if(isset($_SESSION['logged'])){
    unset $_SESSION['logged'];
    header('Location: admin.php');
}
?>