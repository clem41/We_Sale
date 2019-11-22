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
if (isset($_POST['username']) and isset($_POST['psw'])){
  $name=$_POST['username'];
  $psw=$_POST['psw'];
  
  if($name!=''){
    $userfound=selectUserByUsername($name);
    if($userfound==NULL){
      echo 'this user dose not exist';
    }
    else{
      $password=logIn($name);
      if($psw==$password[0]['password']){
        echo 'successful connection';
                
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

if(isset($_POST["connection"]))
{
  ?>
  <form action ="index.php?page=connection" method = "post">
    <input type="submit" value="deconnection">
<?php
}
else{
?>
<form action="index.php?page=connection" method="post">
  <input type="Username" placeholder="Username" name="username">
  <input type="Password" placeholder="Password" name="psw">
  <input type="submit" value="logIn" name = "connection">
</form>
<?php  
}
?>

    
