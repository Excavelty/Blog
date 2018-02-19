<?php
    require_once("lib/Config.php");

    $pdo = Config::getPDO();;
    
    $stmt = $pdo->prepare("SELECT id, title FROM articles ORDER BY id DESC LIMIT 40");
    $stmt->execute();

    $rows = $stmt->fetchAll();

    foreach($rows as $row){
        echo 
        '<form action = "index.php" method = "post">
        <input type = "text" value = "'.$row['id'].'" name = "id" style = "display: none;"/>
        <input type = "submit" class = "links" value = "'.$row['title'].'"></form>';
        echo '</br>';//how to get view of home page even when reading other article? Work with nav bar
    }