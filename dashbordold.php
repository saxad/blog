<?php
  session_start();
if (!(isset($_SESSION['loggedin'])) or $_SESSION['loggedin'] == null) {
    header('Location: login.php');
    exit;
}
echo "welcome to dashbord page";
?>
<a href="logout.php" tite="Logout">Logout.</a>