<?php
    session_start();
    require_once('Article.php');

    Article::delete($_SESSION['id']);
?>