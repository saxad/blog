<?php 
session_start();
echo "hello in dash bord";
echo "<br>";
var_dump($_SESSION);
echo '<br>';
echo '<a href="logout.php">logout</a>';
