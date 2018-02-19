<?php
require_once "lib/ifLogged.php";
require_once "lib/config.php";

$pdo = Config::getPDO();

$stmt = $pdo->prepare("SELECT * FROM articles ORDER BY ID DESC");
$stmt->execute();

$rows = $stmt->fetchAll();

echo '<form method = "post" action = "editWindow.php">';
foreach($rows as $row){
    echo '<input type = "submit" name = "submit" value = "'.$row["title"].','.$row["Id"].','.$row["section"].','.$row["date"].'"/>';
    echo '<br>';
}
echo '</form>';//do zrobienia edytor
