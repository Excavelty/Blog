<?php
session_start();
require_once "Controller.php";

if(!isset($_SESSION['logged'])){
    Contoller::moveTo('admin.php');
}
