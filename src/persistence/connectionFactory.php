<?php 
    namespace App\persistence;
    class connectionFactory{
        
        static $dbuser = "root";
        static $dbname = "atividade";//nome do banco
        static $dbhost = "localhost";
        static $dbport = "3306";
        static $pdo;
       
        public static function getConnection(){
            $strConn = "mysql:host=".self::$dbhost.";dbname=".self::$dbname;
            try{
            self::$pdo = new \PDO($strConn, self::$dbuser);
            self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
           }catch(\PDOException $e){
            echo print_r($e, true);
           }
        
         
            return self::$pdo;
        
        }
    }