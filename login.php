<?php
session_start(); 
include "koneksi.php"; 
$username = $_POST['username']; 
$password = $_POST['password']; 
$password = md5($password); 

$sql = $pdo->prepare("SELECT * FROM user WHERE username=:a AND password=:b");
$sql->bindParam(':a', $username);
$sql->bindParam(':b', $password);
$sql->execute(); 
$data = $sql->fetch(); 
if( ! empty($data)){ 
  $_SESSION['username'] = $data['username']; 
  $_SESSION['nama'] = $data['nama'];
  
  setcookie("message","delete",time()-1); 
  
  header("location: welcome.php"); 
}else{ 
  setcookie("message", "Maaf, Username atau Password salah", time()+3600);
  
  header("location: index.php"); 
}
?>