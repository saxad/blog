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
            // category id
            if(isset($_GET['id'])){
                admin_post($_GET['id']);    
            }
            else{
                admin_post();
            }
            /*if(isset($_GET['category_id']) && $_GET['category_id'] > 0){
                posts($_GET['category_id']);
            }
            else{
                throw new Exception("Pas de post trouvé pour cette categorie", 1);
                
            }*/
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