<?php

    use Zio\Model\Admin\Login;
    use Zio\App\Database;

    function login(){
        include_once('./view/admin/login.php');
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
            include_once('./view/admin/login.php');
        }
        
    }
    