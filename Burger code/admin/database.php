<?php
    

class Database
{
    private static $dbhost = "localhost";
    private static $dbname = "burger_code";
    private static $username = "root";
    private static $password = "";
    private static $connection = null;
 
    public static function connect()
    {
        try
        {
            self::$connection = new PDO("mysql:host=".self::$dbhost.";dbname=".self::$dbname,self::$username,self::$password);
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
        return self::$connection;
    }
    
    public static function disconnect()
    {
        self::$connection = null;
    }
}

Database::connect();

?>