<?php

    use Zio\Model\Admin\Login;
    use Zio\App\Database;
    use Zio\Model\Category;
    use Zio\Model\Post;

    function login(){
        include_once('./view/admin/loginView.php');
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
            header('Location: admin.php?action=main');
        }
        else{
            include_once('./view/admin/loginView.php');
        }
        
    }

    function admin_main(){
        session_start();
        $db = new Database('127.0.0.1', 'phpmyadmin', 'root', 'blog');
        $post = new Post($db);
        $category = new Category($db);

        $posts = $post->getPosts();
        $categories = $category->getCategories();

        include_once('./view/admin/dash.php');
    }

    function admin_post($id=null){
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

    function admin_category($id=null){
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

    function delete_category($category_id){
        $db = new Database('127.0.0.1', 'phpmyadmin', 'root', 'blog');
        $category = new Category($db);
        $category->removeCategory($category_id);
        header('Location: admin.php?action=main');
    }

    function delete_post($post_id){
        $db = new Database('127.0.0.1', 'phpmyadmin', 'root', 'blog');
        $post = new Post($db);
        $post->removePost($post_id);
        header('Location: admin.php?action=main');
    }

    function update_post($post_id, $category_id, $body, $post_title){
        $db = new Database('127.0.0.1', 'phpmyadmin', 'root', 'blog');
        $post = new Post($db);
        $post->updatePost($post_id, $category_id, $body, $post_title);
        header('Location: admin.php?action=post&id='.$post_id);
    }
