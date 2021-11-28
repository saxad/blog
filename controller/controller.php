<?php
    // ca c'est le require du model
    require('./model/model.php');
    function main(){
        $stmt_categories = getCategories();
        $stmt = getPosts();
        require('./view/indexView.php');
    }

    function posts($category_id){        
        $stmt_post = getPostsCategory($category_id);
        $stmt_category = getCategory($category_id);
        $category = $stmt_category->fetch(PDO::FETCH_OBJ);
        $stmt_categories = getCategories();
        require('./view/articlesView.php');
        //return $stmt_post;
    }
    
    function post($post_id){
        $post = getPost($post_id);
        $stmt_categories = getCategories();
        require('./view/articleView.php');
    }
