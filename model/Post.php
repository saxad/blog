<?php

namespace Zio\Model;
use Zio\App\Database;

class Post{

    private $db;
    
    public function __construct(Database $db)
    {
        $this->db = $db;
    }
    
    public function getPostsCategory($category_id){        
        $query = 'SELECT * from post where category_id=?';
        $category_posts = $this->db->prepare($query, [$category_id]);
        return $category_posts;        
    }

    public function getPosts(){
        $query = 'SELECT * from post';
        $posts = $this->db->query($query);
        return $posts;
    }

    public function getPost($post_id)
    {
        $query = 'SELECT * from post where id=?';
        $post = $this->db->prepare($query, [$post_id]);
        return $post;
    }

    public function removePost($post_id){
        $query = 'DELETE  from post where id=?';
        $result = $this->db->prepare($query, [$post_id], 'delete');
        return $result;
    }

}