<?php
    require('./Autoloader.php');
    Autoloader::register();

    use \Zio\Model\Post;
    use \Zio\Model\Category;
    use \Zio\App\Database;

    
    function main(){
        $db = new Database('127.0.0.1', 'phpmyadmin', 'root', 'blog');
        $cat = new Category();
        $post = new Post($db);
        $posts = $post->getPosts();
        $stmt_categories = $cat->getCategories();
        require('./view/indexView.php');
    }

    function posts($category_id){        
        $db = new Database('127.0.0.1', 'phpmyadmin', 'root', 'blog');
        $post = new Post($db);
        $category_posts = $post->getPostsCategory($category_id);
        
        $cat = new Category();
        //$post = new Post();

        
        $stmt_category = $cat->getCategory($category_id);
        $category = $stmt_category->fetch(PDO::FETCH_OBJ);
        $stmt_categories = $cat->getCategories();

        require('./view/articlesView.php');
    }
    
    function post($post_id){
        $db = new Database('127.0.0.1', 'phpmyadmin', 'root', 'blog');
        $post = new Post($db);
        $cat = new Category();
        $post = $post->getPost($post_id);
        $stmt_categories = $cat->getCategories();
        require('./view/articleView.php');
    }
