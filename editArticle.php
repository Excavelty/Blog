<?php
    session_start();
    require_once("lib/config.php");
    require_once("Article.php");

    Article::edit($_POST['section'], $_POST['title'], $_POST['content'], $_SESSION['id']);

?>