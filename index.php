<?php
session_start(); /
if(isset($_SESSION['username'])){ 
  header("location: welcome.php"); 
}
?>
<html>
<head>
  <title>Halaman Sebelum Login</title>
</head>
<body>
  <h1>Silahkan login terlebih dahulu...</h1>
  
  <div style="color: red;margin-bottom: 15px;">
    <?php
    
    if(isset($_COOKIE["message"])){ 
      echo $_COOKIE["message"]; 
    }
    ?>
  </div>
  
  <form method="post" action="login.php">
    <label>Username</label><br>
    <input type="text" name="username" placeholder="Username"><br><br>
    
    <label>Password</label><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    
    <button type="submit">Login</button>
  </form>
</body>
</html>