<?php

class Database{//based on http://wiki.hashphp.org/PDO_Tutorial_for_MySQL_Developers#Connecting_to_MySQLs
    
    private static $db;
    private static $pdo;
    
    public function sQuery($sql, $params){//http://php.net/manual/en/pdostatement.execute.php
        $stmt = self::$pdo->prepare($sql);
        $stmt -> execute($params);
        
        if()
    }
    
    public static function getInstance($host = "localhost", $login = "root", $password = "", $db_name = "blog"){
        
        if(self::$db === null){
            self::$db = new Database($host, $login, $password, $db_name);
        }
        
        return self::$db;
    }
    
    /////////////////////////////PRIVATE//////////////////////////
    private function __construct($host, $login, $password, $db_name){

        $dsn = "mysql:host=".$host.";dbname".$db_name;
        self::$pdo = new PDO($dsn, $login, $password);
    }
    /////////////////////////////PRIVATE//////////////////////////
}