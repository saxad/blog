<?php



class Autoloader{


    static function register(){
        spl_autoload_register(array('Autoloader', 'autoload'));
    }


    static function autoload($class_name){
        
        $parts = explode('\\', $class_name);
        //var_dump('./model/'.end($parts).'.php');
        //die();
        require('./model/'.end($parts).'.php');
    }


}