<!DOCTYPE html>
<html lang = "pl">
    <head>
        <title>Blog</title>
        <meta charset="utf-8" />
        <link href = "adminLogin.css" rel = "stylesheet" />
    </head>
<body>
  <form class = "loginPanel" action = "validateLogin.php" method = "post">
      <br>
      <br>
      <section class="label">Login: </section>
    <input type = "text" name  = "login" class="passwords"/>
      <section class="label">Hasło: </section>
      <input type = "password" name  = "password" class="passwords"/>
    <input type = "submit" class = "loginButton" value = "Zaloguj się"/>
  </form>
</body>
    
</html>