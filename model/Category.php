<?php

namespace Zio\Model;
use Zio\App\Database;

class Category{

    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getCategories(){
        $query = 'SELECT * from category';
        $categories = $this->db->query($query);
        return $categories;
    }
    
    public function getCategory($category_id){
        //$conn = $this->dbConnection();
        $query = 'SELECT * from category where id=?';
        $category = $this->db->prepare($query, [$category_id]);
        //$stmt_category = $conn->prepare($query_category);
        //$stmt_category->execute([$category_id]);
        //var_dump($category);
        //die();
        return $category;
    }

    public function removeCategory($category_id){
        $query = 'DELETE  from category where id=?';
        $result = $this->db->prepare($query, [$category_id], 'delete');
        return $result;
    }

    public function updateCategory($category_id, $category_name){
        $query = 'UPDATE  category SET name=? where id=?';
        $result = $this->db->prepare($query, [$category_name, $category_id], 'delete');
        return $result;
    }
    
}