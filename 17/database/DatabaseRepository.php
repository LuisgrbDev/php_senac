<?php

class DatabaseRepository{
    private static $server = 'localhost';
    private static $username = 'root';
    private static $password = 'Root@123';
    private static $database = 'banco_contas';


    public static function connect(){
        return new mysqli(self::$server, self::$username,self::$password,self::$database);
    }

}






?>