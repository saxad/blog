<?php
    require_once('./controller/controller.php');
try {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    if(isset($_GET['action'])){
        //die($_GET['action']);
        if($_GET['action'] == 'main'){
            main();
        }
        elseif($_GET['action'] == 'posts'){
            // category id
            if(isset($_GET['category_id']) && $_GET['category_id'] > 0){
                posts($_GET['category_id']);
            }
            else{
                throw new Exception("Pas de post trouvé pour cette categorie", 1);
                
            }
        }
        elseif($_GET['action'] == 'post'){
            // post id
            if(isset($_GET['post_id']) && $_GET['post_id'] > 0){
                post($_GET['post_id']);
            }
            else{
                throw new Exception("pas de post avec cette id ", 1);
                
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
    