<?php
    require_once("lib/Config.php");//thanks for Motto from StackOverflow
    require_once("lib/Controller.php");

    $pdo = Config::getPDO();
    $rows;

    $url;
    if(isset($_POST['id'])){
        $url = $_POST['id'];
    }else{
        $url = Controller::get();
    }
    if($url === "index.php" || $url === ''){
        $stmt = $pdo->prepare("SELECT title, content, date FROM articles ORDER BY ID DESC LIMIT 1");
        $stmt -> execute();
        $rows = $stmt->fetchAll();
    }else{
        $stmt = $pdo->prepare("SELECT title, content, date FROM articles WHERE ID = :url");
        $stmt -> execute(array(":url" => $url));
        $rows = $stmt->fetchAll();
    }

    echo '<h1 class = "articleTitle"><b>'.$rows[0]['title'].'</b></h1>';
    echo '<h2 class = "articleDate"><i>'.$rows[0]['date'].'</i></h2>';
    echo '</br></br>';
    echo '<article class = "articleContent">'.$rows[0]['content'].'</article>';
