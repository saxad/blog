<?php
    require_once('./controller/controller.php');
    require_once('./controller/controller_admin.php');
try {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    if(isset($_GET['action'])){
        //die($_GET['action']);
        if($_GET['action'] == 'main'){
            admin_main();
        }
        elseif($_GET['action'] == 'post'){
            // post id
            if(isset($_GET['id'])){
                admin_post($_GET['id']);    
            }
            else{
                admin_post();
            }
        }
        elseif($_GET['action'] == 'update_post'){
            if(isset($_POST['id']) && $_POST['id']!="" && isset($_POST['title']) && isset($_POST['category']) && isset($_POST['body'])){
                update_post($_POST['id'], $_POST['category'], $_POST['body'], strval($_POST['title']));
            }
            elseif($_POST['id'] == "" && isset($_POST['title']) && isset($_POST['category']) && isset($_POST['body'])){
                insert_post($_POST['category'], $_POST['body'], strval($_POST['title']));
            }
            else{
                echo 'erreur une des entré n\'est  pas renseignée ';
            }
        }
        elseif($_GET['action'] == 'category'){
            // post id
            /*if(isset($_GET['post_id']) && $_GET['post_id'] > 0){
                post($_GET['post_id']);
            }
            else{
                throw new Exception("pas de post avec cette id ", 1);
                
            }*/
            if(isset($_GET['id'])){
                admin_category($_GET['id']);    
            }
            else{
                admin_category();
            }
            
        }       
        elseif($_GET['action'] == 'update_category'){
            
            if(isset($_POST['id']) && isset($_POST['name'])){
                update_category($_POST['id'], $_POST['name']);    
            }
            elseif(isset($_POST['name'])){
                insert_category($_POST['name']);    
            }
            else{
                echo 'entrée non valide';
            }
            
        }
        elseif($_GET['action'] == 'login'){
                login();
        }
        elseif($_GET['action'] == 'delete_category'){
            
            if(isset($_GET['id']) && $_GET['id']>0){
                delete_category($_GET['id']);
            }
        }
        elseif($_GET['action'] == 'delete_post'){
            if(isset($_GET['id']) && $_GET['id']>0){
                delete_post($_GET['id']);
            }
            
        }
        elseif($_GET['action'] == 'logout'){
            logout();
        }
        else{
            echo "action not handled";
        }
    }
    else{
        main();
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
