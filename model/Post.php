<?php

class Post{
    
    public function getPostsCategory($category_id){
        $conn = $this->dbConnection();
        $query_post = 'SELECT * from post where category_id=?';
        $stmt_post = $conn->prepare($query_post);
        $stmt_post->execute([$category_id]);
        return $stmt_post;
        
    }

    public function getPosts(){
        $conn = $this->dbConnection();
        $query = 'SELECT * from post';
        $stmt = $conn->prepare($query);
        $stmt->execute();
        return $stmt;
    
    }

    public function getPost($post_id)
    {
        $conn = $this->dbConnection();
        $query = 'SELECT * from post where id=?';
        $stmt = $conn->prepare($query);
        $stmt->execute([$post_id]);
        $post = $stmt->fetch(PDO::FETCH_OBJ);
        return $post;
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
            
        } catch (\Throwable $th) {
            
            echo $th->getMessage();
            
        }
        return $conn;
    }
}