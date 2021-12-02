<?php

namespace Zio\App;
use \PDO;
use \Exception;

class Database{

    private $host;
    private $user;
    private $password;
    private $db;
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

}