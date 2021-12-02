<?php

namespace Zio\Model\Admin;
use Zio\App\Database;

class Login{


    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }
    /*
    *  return array of result 
    *  si len array == 1 ok else ko
    */
    public function authentification($username, $password){
        $query = 'SELECT * FROM admin WHERE name=? and password=?';
        $result = $this->db->prepare($query, [$username, $password]);
        return $result;
    }


}