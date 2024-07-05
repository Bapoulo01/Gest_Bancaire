<?php 

class Session 
{

    public static function open():void{
        if (session_status()==PHP_SESSION_NONE) {
            session_start(); // $_SESSION
        }
    
    }

    public static function keyExist(string $key):bool{
        return isset($_SESSION[$key]);
    
    }

    public static function set(string $key,mixed $value):void{
        $_SESSION[$key]=$value;

    
    }

    public static function get(string $key):mixed{
        if(!self::keyExist($key)) return false;
        return $_SESSION[$key];
    
    }

    public static function close():void{
        unset($_SESSION["userConnect"]);
        session_destroy();
    
    }


}