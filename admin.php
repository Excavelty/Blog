<?php
    session_start();

    if(isset($_SESSION['logged'])){
        header('Location: adminsPanel.php');
        exit();
    }

    include('adminView.php');
?>