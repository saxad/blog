<?php

namespace Zio\App;
use \PDO;
use \Exception;

class Database{

    private $host = '127.0.0.1';
    private $user = 'phpmyadmin';
    private $password = 'root';
    private $db = 'blog';
    private $pdo;


    public function __construct($host, $user, $password, $db)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->db = $db;       
    }

    private function getPDO(){
        if ($this->pdo === null) {
            try {
                $pdo = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            } catch (Exception $e) {
                
                echo $e->getMessage();
                
            }
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    public function query($statment){
        $req = $this->getPDO()->query($statment);
        $result = $req->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    public function prepare($statment, $arg){
        $req = $this->getPDO()->prepare($statment);
        $req->execute($arg);
        $result = $req->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    private function dbConnection()
    {
        $host = '127.0.0.1';
        $user = 'phpmyadmin';
        $password = 'root';
        $db = 'blog';
        try {
            $conn = new PDO("mysql:host=$host;dbname=$db",$user,$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (Exception $e) {
            
            echo $e->getMessage();
            
        }
        return $conn;
    }
}