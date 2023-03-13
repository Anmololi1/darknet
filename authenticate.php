<?php
session_start(); 


$valid_username = "anmol";
$valid_password = "anmol111";


if(isset($_GET['username']) && isset($_GET['password'])) {
  
  $username = $_GET['username'];
  $password = $_GET['password'];

  
  if($username === $valid_username && $password === $valid_password) {
  
    $_SESSION['username'] = $username;
    $_SESSION['loggedin'] = true;

  
    header("Location: home.php");
    exit;
  } else {
    
    $error_message = "Invalid username or password.";
  }
}
?>