<?php

    include_once($_SERVER['DOCUMENT_ROOT']."/blog/config.php");
    try {
        $conn = new PDO("mysql:host=$host;dbname=$db",$user,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (\Throwable $th) {
        
        echo $th->getMessage();
        
    }
    
