<?php

    include_once('./config.php');
    try {
        $conn = new PDO("mysql:host=$host;dbname=$db",$user,$password);
    } catch (\Throwable $th) {
        echo $th->getMessage();
    }
    
