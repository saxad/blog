<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./public/css/login.css">
</head>
<body>

<div id="id01" class="">
  
  <form class="modal-content animate" action="index.php?action=athentification" method="post">
    <?php 
    //session_start();
    //var_dump($_SESSION);
        //if(!empty($login_err)){
        //    echo '<div class="alert alert-danger">' . $login_err . '</div>';
       // }        
        ?>
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">

    </div>
  </form>
</div>
</body>
</html>
