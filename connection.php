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
if(isset($_SESSION["isConnected"]))
{
  ?>
  <form action ="index.php?page=connection" method = "post">
    <input type="submit" value="deconnection">
<?php
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
        session_start();
        $_SESSION["isConnected"]=1;
                
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
if (isset($_POST["deconnection"])) {
  session_destroy();
  
}

if(!isset($_SESSION["isConnected"])){
?>
<form action="index.php?page=connection" method="post">
  <input type="Username" placeholder="Username" name="username">
  <input type="Password" placeholder="Password" name="psw">
  <input type="submit" value="logIn" name = "connection">
</form>
<?php  
}
?>

    
