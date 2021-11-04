<?php
  session_start();
if (!(isset($_SESSION['loggedin'])) or $_SESSION['loggedin'] == null) {
    header('Location: index.php');
    exit;
}
echo "welcome to dashbord page";