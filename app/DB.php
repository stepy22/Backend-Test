<?php

namespace app;
use PDO;

class DB extends PDO{
    public $conn;
    private static $instance;
    public  function __construct ()
    {
        try{
            $this->conn = parent::__construct(
                'mysql:host='.$GLOBALS['conData']['host'].';
                      dbname='.$GLOBALS['conData']['dbname'],
                $GLOBALS['conData']['username'],
                $GLOBALS['conData']['password']);
        }catch(PDOException $e){
            echo 'Conection failed';
        }
    }
    public static function getInstance()
    {
        if(!self::$instance){
            self::$instance = new DB();
        }
        return self::$instance;
    }
}
