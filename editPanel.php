<?php
    require_once "lib/ifLogged.php";
?>
<!DOCTYPE html>
<html lang = "pl">
    <head>
        <title>Blog</title>
        <meta charset="utf-8" />
        <link href = "editStyle.css" rel = "stylesheet" />
    </head>
<body>
    <header>Wybierz artykuł do edycji</header>
    <section class = "articles">
    <?php require_once "prepareForEdit.php"; ?>
    </section>
</body>
    
</html>