<?php

require_once 'lib/config.php';

class Login{
    
    private static $instance;
    private $login;
    private $password;
    private $pdo;
    
    public function getInstance($login, $password){
        if(self::$instance === null){
            self::$instance = new Login($login, $password);
        }
        
        return self::$instance;
    }
    
    public function validate($table){
        
        $this->pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        $stmt = $this->pdo->prepare('SELECT * FROM blog.admins WHERE login = :login');
        
        $stmt->bindValue(":login", $this->login, PDO::PARAM_STR);
        $stmt->execute();
        
        $row = $stmt->fetchAll();
        
        $result;
        if(count($row) > 0){
            $result = true;
        }else{
            return false;
        }
        
        $hash = $row[0]['password'];
        
        if(password_verify($this->password, $hash)){
            $result = true;    
        }else{
            $result = false;
        }
        
        return $result;
    }
    /////////PRIVATE/////////////////////////////////
    private function __construct($login, $password){

        $this->pdo = Config::getPDO();
        $this->login = $login;
        $this->password = $password;
    }
    ////////PRIVATE//////////////////////////////////
}
