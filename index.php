<?php
    require_once('./controller/controller.php');

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
        }
        elseif($_GET['action'] == 'post'){
            // post id
            if(isset($_GET['post_id']) && $_GET['post_id'] > 0){
                post($_GET['post_id']);
            }
        }
        else{
            echo "action not handled";
        }
    }
    else{
        echo "No action set";
    }