<?php

    use Zio\Model\Admin\Login;
    use Zio\App\Database;
    use Zio\Model\Category;
    use Zio\Model\Post;

    function login(){
        if( isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] = true){
            header('Location: admin.php?action=main');
        }
        else{
            include_once('./view/admin/loginView.php');
        }
    }

    function logout(){
        session_start();
        // Unset all of the session variables
        $_SESSION = array();
        // Destroy the session.
        session_destroy();
        // Redirect to login page
        header("location: index.php?action=login");
        exit;
    }

    function authentification_controller($user,$password){
        session_start();
        $db = new Database('127.0.0.1', 'phpmyadmin', 'root', 'blog');
        $auth = new Login($db);
        $result = $auth->authentification($user, $password);

        if(count($result) == 1){
            var_dump($result);
            $_SESSION['user'] = $result[0]->name;
            $_SESSION['id'] = $result[0]->id;
            $_SESSION["loggedin"] = true;
            header('Location: admin.php?action=main');
        }
        else{
            include_once('./view/admin/loginView.php');
        }
        
    }

    function admin_main(){
        session_start();
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] = true){
            $db = new Database('127.0.0.1', 'phpmyadmin', 'root', 'blog');
            $post = new Post($db);
            $category = new Category($db);
    
            $posts = $post->getPosts();
            $categories = $category->getCategories();
    
            include_once('./view/admin/dash.php');
        }
        else{
            header('Location: admin.php?action=login');
        }
        
    }

    function admin_post($id=null){
        session_start();
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] = true){
            $db = new Database('127.0.0.1', 'phpmyadmin', 'root', 'blog');
            $category = new Category($db);
            $categories = $category->getCategories();
            if($id == null){
                $post_title = '';
                $post_body = '';
                $post_category_id = '';
                $post_id = '';
            }
            else{
                $post = new Post($db);
                $result = $post->getPost($id);
                $post_title = $result[0]->title;
                $post_body = $result[0]->body;
                $post_category_id = $result[0]->category_id;
                $post_id = $result[0]->id;
            }
            include_once('./view/admin/postView.php');
        }
        else{
            header('Location: admin.php?action=login');
        }
        
    }

    function admin_category($id=null){
        session_start();
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] = true){
            if($id == null){
                $category_name = '';
                $category_id = '';
            }
            else{
                $db = new Database('127.0.0.1', 'phpmyadmin', 'root', 'blog');
                $category = new Category($db);
                $result = $category->getCategory($id);
                $category_name = $result[0]->name;
                $category_id = $result[0]->id;
            }
            include_once('./view/admin/categoryView.php');
        }
        else{
            header('Location: admin.php?action=login');
        }
    }

    function delete_category($category_id){
        session_start();
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] = true){
            $db = new Database('127.0.0.1', 'phpmyadmin', 'root', 'blog');
            $category = new Category($db);
            $category->removeCategory($category_id);
            header('Location: admin.php?action=main');
        }
        else{
            header('Location: admin.php?action=login');
        }
    }

    function delete_post($post_id){
        session_start();
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] = true){
            $db = new Database('127.0.0.1', 'phpmyadmin', 'root', 'blog');
            $post = new Post($db);
            $post->removePost($post_id);
            header('Location: admin.php?action=main');
        }
        else{
            header('Location: admin.php?action=login');
        }
    }

    function update_post($post_id, $category_id, $body, $post_title){
        session_start();
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] = true){
            $db = new Database('127.0.0.1', 'phpmyadmin', 'root', 'blog');
            $post = new Post($db);
            $post->updatePost($post_id, $category_id, $body, $post_title);
            header('Location: admin.php?action=post&id='.$post_id);
        }
        else{
            header('Location: admin.php?action=login');
        }
    }

    function update_category($category_id, $category_name){
        session_start();
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] = true){
            $db = new Database('127.0.0.1', 'phpmyadmin', 'root', 'blog');
            $category = new Category($db);
            $category->updateCategory($category_id, $category_name);
            header('Location: admin.php?action=category&id='.$category_id);
        }
        else{
            header('Location: admin.php?action=login');
        }
    }

    function insert_category($category_name){
        session_start();
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] = true){
            $db = new Database('127.0.0.1', 'phpmyadmin', 'root', 'blog');
            $category = new Category($db);
            $category->insertCategory($category_name);
            header('Location: admin.php?action=main');
        }
        else{
            header('Location: admin.php?action=login');
        }
    }

    function insert_post($category_id, $body, $post_title){
        session_start();
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] = true){
            $db = new Database('127.0.0.1', 'phpmyadmin', 'root', 'blog');
            $post = new Post($db);
            $post->insertPost($category_id, $body, $post_title);
            header('Location: admin.php?action=main');
        }
        else{
            header('Location: admin.php?action=login');
        }
    }
