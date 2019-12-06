<!DOCTYPE html>
<html>
<head>
    <title>displayForm</title>
<link rel="stylesheet" href="display.css" />
</head>
<body>

<div class="category">
  <ul class="display">
      <li class="display"><a class="active" href="index.php?page=main">Start to shopping</a></li>
      <li class="display"><a class="active" href="index.php?page=account">create a new account</a></li>
  </ul>
</div>
<?php
global $flagsuccess;
//$flagsuccess；
if(isset($_SESSION["isConnected"]))
{
  ?>
  <form action ="index.php?page=connection" method = "post">
    <input type="submit" value="deconnection">
<?php
}
if(isset($_GET[session_name()])){
	echo '<a href="login_out.php">logged out</a>';

	}	
if (isset($_POST['username']) and isset($_POST['psw'])){
  $_SESSION["login"]=$_POST['username'];
  $_SESSION["password"]=$_POST['psw'];
  
  if($_SESSION["login"]!=''){
    $userfound=selectUserByUsername($_SESSION["login"]);
    if($userfound==NULL){
      echo 'this user dose not exist';
    }
    else{
      $password=logIn($_SESSION["login"]);
      if($_SESSION["password"]==$password[0]['password']){
        echo 'successful connection';
		$flagsuccess=true;
       		session_start();
		$_SESSION['name']='admin';
        echo '<a href="index.php">Please click here to start your shopping</a>';
                
                
      }
      else{
        echo 'the password is wrong please try again';  
      }
    }
  }
  else{
    echo 'please input the both name and password';
  }
}
?>
<?php

if(!isset($_GET[session_name()])){
	if($flagsuccess!=true){
?>
<form action="index.php?page=connection" method="post">
  <input type="Username" placeholder="Username" name="username">
  <input type="Password" placeholder="Password" name="psw">
  <input type="submit" value="logIn" name = "connection">
</form>
<?php  
	}}
?>

    
