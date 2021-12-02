<?php



class Autoloader{


    static function register(){
        spl_autoload_register(array('Autoloader', 'autoload'));
    }


    static function autoload($class_name){
        $path = str_replace('\\','/',$class_name);
        $path_elements = explode('/',$path);
        for($i=0; $i < count($path_elements)-1; $i++){
            $path_elements[$i][0] = strtolower($path_elements[$i][0]);
        }
        $new_path = implode('/',$path_elements);
        $new_path = str_replace('zio','',$new_path);
        require('.'. $new_path . '.php');
    }


}