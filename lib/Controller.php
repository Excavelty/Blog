<?php

class Controller{
    
    public static function moveTo($site){
        header('Location: '.$site.'');
        exit();
    }
    public static function displayView($viewFile){
        include($viewFile);
    }
    public static function get(){
        $local = explode('/', self::getUrlAfterSlash());
        return end($local);
    }
    ///////PRIVATE//////////
    private function getUrlAfterSlash(){
        return "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    }
    ///////PRIVATE/////////
}