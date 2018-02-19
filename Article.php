<?php

require_once "lib/config.php";
require_once "lib/Controller.php";

class Article{
    
    public static function add($section, $title, $content, $date){
        $pdo = Config::getPDO();
        $stmt = $pdo->prepare("INSERT INTO articles(section, title, content, date) VALUES(:section, :title, :content, :date)");
        $stmt->execute(array(":section" => $section, ":title" => $title, ":content" => $content, ":date" => $date));
    }
    public static function edit($section, $title, $content, $id){
        $pdo = Config::getPDO();
        $stmt = $pdo->prepare("UPDATE articles SET section = :section, content = :content, title = :title WHERE Id = :id");
        $stmt->execute(array(":section" => $section, ":title" => $title, ":content" => $content, ":id" => $id));
    }
    public static function delete($id){
        $pdo = Config::getPDO();
        $stmt = $pdo->prepare("DELETE FROM articles WHERE Id = :id");
        $stmt->execute(array("id" => $id));
        Controller::moveTo("editPanel.php");
    }
}
