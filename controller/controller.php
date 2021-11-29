<?php
    // ca c'est le require du model
    //require('./model/model.php');
    require('./model/Category.php');
    require('./model/Post.php');
    function main(){
        $cat = new Category();
        $post = new Post();
        $stmt_categories = $cat->getCategories();
        $stmt = $post->getPosts();
        require('./view/indexView.php');
    }

    function posts($category_id){        
        $cat = new Category();
        $post = new Post();

        $stmt_post = $post->getPostsCategory($category_id);
        $stmt_category = $cat->getCategory($category_id);
        $category = $stmt_category->fetch(PDO::FETCH_OBJ);
        $stmt_categories = $cat->getCategories();
        require('./view/articlesView.php');
    }
    
    function post($post_id){
        $p = new Post();
        $cat = new Category();
        $post = $p->getPost($post_id);
        $stmt_categories = $cat->getCategories();
        require('./view/articleView.php');
    }
