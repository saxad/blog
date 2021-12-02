<?php
    require('./Autoloader.php');
    Autoloader::register();

    use \Zio\Model\Post;
    use \Zio\Model\Category;
    use \Zio\App\Database;

    
    function main(){
        $db = new Database('127.0.0.1', 'phpmyadmin', 'root', 'blog');
        $category = new Category($db);
        $post = new Post($db);

        $posts = $post->getPosts();
        $categories = $category->getCategories();
        require('./view/indexView.php');
    }

    function posts($category_id){        
        $db = new Database('127.0.0.1', 'phpmyadmin', 'root', 'blog');
        $post = new Post($db);
        $category_posts = $post->getPostsCategory($category_id);
        $category = new Category($db);
        $categories = $category->getCategories();
        $category = $category->getCategory($category_id);
        require('./view/articlesView.php');
    }
    
    function post($post_id){
        $db = new Database('127.0.0.1', 'phpmyadmin', 'root', 'blog');
        $post = new Post($db);
        $category = new Category($db);
        $post = $post->getPost($post_id);
        $categories = $category->getCategories();
        require('./view/articleView.php');
    }
