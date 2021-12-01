<?php

namespace Zio\Model;

class Category{

    public function getCategories(){
        $conn = $this->dbConnection();
        $query_category = 'SELECT * from category';
        $stmt_categories = $conn->prepare($query_category);
        $stmt_categories->execute();
        return $stmt_categories;
    }
    
    public function getCategory($category_id){
        $conn = $this->dbConnection();
        $query_category = 'SELECT * from category where id=?';
        $stmt_category = $conn->prepare($query_category);
        $stmt_category->execute([$category_id]);
        return $stmt_category;
    }
    
    private function dbConnection()
    {
        $host = '127.0.0.1';
        $user = 'phpmyadmin';
        $password = 'root';
        $db = 'blog';
        try {
            $conn = new \PDO("mysql:host=$host;dbname=$db",$user,$password);
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            
        } catch (\Throwable $th) {
            
            echo $th->getMessage();
            
        }
        return $conn;
    }
}