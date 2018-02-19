<?php
require_once "lib/ifLogged.php";
require_once "lib/Controller.php";
require_once "Article.php";

if(isset($_SESSION['logged']) || !isset($_POST['title']) || !isset($_POST['content'])){
    Controller::moveTo('index.php');
}else{
   
    Article::add($_POST['section'], $_POST['title'], $_POST['content'], date('Y-m-d'));
    Controller::moveTo("adminsPanel.php");
}
