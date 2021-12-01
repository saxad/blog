<?php



class Autoloader{


    static function register(){
        spl_autoload_register(array('Autoloader', 'autoload'));
    }


    static function autoload($class_name){
        $path = str_replace('\\','/',$class_name);
        $path = str_replace('Zio','',$path);
        $path[1] = strtolower($path[1]);
        require('.'. $path . '.php');
    }


}