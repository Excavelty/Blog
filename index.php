<!DOCTYPE html>
<html lang = "pl">
    <head>
        <title>Blog</title>
        <meta charset="utf-8" />
        <link href = "styleIndex.css" rel = "stylesheet" />
    </head>
<body>
    <header class = "blogHeader"> <i><b>GOMIBLOG</b></i> </header>
    
    <article class = "articleIntro">
        <?php include("getArticle.php"); ?>
        <section class = "content"> </section>
    </article>
    
    <nav class = "blogNav">
        <?php include("getArticlesToNav.php"); ?>
    </nav>
    
</body>
    
</html>