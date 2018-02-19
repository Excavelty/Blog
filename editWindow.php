<?php
session_start();
require_once "lib/config.php";

$data = explode(",", $_POST['submit']);
$_SESSION['id'] = $data[1];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Blog</title>
        <meta charset = "utf-8">
        <link href = "addPanelStyle.css" rel = "stylesheet"/>
    </head>
    <body>
        <form method = "post" action = "editArticle.php">    
           <section class="label">Sekcja: </section>
            <input type="text" name = "section" class = "section" value = "<?php echo $data[2]; ?>"/>
            <section class="label">Tytuł: </section>
            <input type="text" name = "title" class = "title" value = "<?php echo $data[0]; ?>" />
            <section class ="buttonsSection">
            <input type ="button" value = "B" class = "buttons buttonsNoParam" id = "bold"/>
            <input type ="button" value = "I" class = "buttons buttonsNoParam" id = "italic"/>
            <input type ="button" value = "__" class = "buttons buttonsNoParam" id = "underline"/>
                <select class = "buttonsParam" id = "fontSize">
                        <option class="buttons" value="1">1</option>
                        <option class="buttons" value="2">2</option>
                        <option class="buttons" value="3">3</option>
                        <option class="buttons" value="4">4</option>
                        <option class="buttons" value="5">5</option>
                        <option class="buttons" value="6">6</option>
                        <option class="buttons" value="7">7</option>
                </select>
                <select class="buttonsParam" id="fontName">
                       <option class="buttons" value="Arial">Arial</option>
                       <option class="buttons" value="Times New Roman">Times New Roman</option>
                       <option class="buttons" value="Courier">Courier</option>
                       <option class="buttons" value="Open Sans">Open Sans</option>
                       <option class="buttons" value="Calibrari">Calibrari</option>
                </select>
                <select class="buttonsParam" id="foreColor">
                    <option class="buttons" value="white">White</option>
                    <option class="buttons" value="red">Red</option>
                    <option class="buttons" value="green">Green</option>
                    <option class="buttons" value="blue">Blue</option>
                    <option class="buttons" value="yellow">Yellow</option>
                </select>
                <input type="button" class="buttons" id="insertImage" value = "Wstaw"/>
        </section>
        <iframe class="newArticle" name="article" id="article">
    
        </iframe>
        <textarea name = "content" id = "content">        <?php 
                $pdo = Config::getPDO();
                $stmt = $pdo->prepare("SELECT content FROM articles WHERE ID = :id");
                $stmt->execute(array(":id" => $data[1]));
                $rows = $stmt->fetchAll();
                echo $rows[0]['content'];
            ?></textarea>
        <input type = "submit" id = 'send' value = "Edytuj"/>
   </form>
        <form method = "post" action = "deleteArticle.php">
        <input type = "submit" value = "Usuń">
        </form>
    <script type = "text/javascript" src = "panelScript.js"> </script>
    </body>