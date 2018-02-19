<?php
class Config{
    public static $dsn = "mysql:host=localhost;dbname=blog";
    public static $login = 'root';
    public static $password = '';
    
    public static function getPDO($dsn = "mysql:host=localhost;dbname=blog", $login = 'root', $password = ''){
        $pdo = new PDO($dsn, $login, $password);
        return $pdo;
    }
}
