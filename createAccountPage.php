<!DOCTYPE html>
<html>
<head>
	<title>createAccountPage</title>
	<link rel="stylesheet" href="createAccountPage.css" />
	<link rel="stylesheet" href="display.css" />
</head>
<body>
<?php
if(!isset($_POST['name'])){
$flag=0;}
else if(isset($_POST['name'])){
$flag=1;
	}
?>
<?php
switch($flag){
	case 0:
	{?>
 	<form action = "index.php?page=account" method = "post">
 		<p class="inscritpion">
			 
	 		
		 	<label>	your whole name </label>
		 	<br> 
		 	<input type="text" name="name">
		 	<br>
		 	<label> email </label>
		 	<br> 
		 	<input type="text" name="email">
		 	<br>
		 	<label> password </label>
		 	<br>
		 	<input type="password" name="password">
		 	<br>
		 	<label> confirm your password </label>
		 	<br>
		 	<input type="password" name="confirmpassword"><br><br>
		    <input type="submit">
 		
			</p>
 	</form>
<?php }break;
  case 1:
{?>
<?php 
echo "<br>";
echo "<br>";
  $name=$_POST['name'];
  $email=$_POST['email'];
  $psw1=$_POST['password'];
  $psw2=$_POST['confirmpassword'];
  if($name==""||$email==""){
  		echo '<div class="category">
	    <ul class="display">
       <li class="display"><a class="active" href="index.php?page=account">Please click here to recreate the user</a></li>
	    </ul>
	    </div>';
  	echo 'Please make sure that the username and password are not empty.';
  	}
  else if($psw2!=$psw1){
  		echo '<div class="category">
	    <ul class="display">
       <li class="display"><a class="active" href="index.php?page=account">Please click here to recreate the user</a></li>
	    </ul>
	    </div>';
  	echo 'please  make the two password the same';
  	}
  else{
     $userfound=selectUserByUsername($name);
     $emailfound=selectUserByUsername($email);
     if($userfound!=NULL||$emailfound!=NULL){
	 	echo '<div class="category">
	    <ul class="display">
       <li class="display"><a class="active" href="index.php?page=account">Please click here to recreate the user</a></li>
	    </ul>
	    </div>';
	     echo 'this user has aready exist';
			 
	    }
	 else{
	 	addUserToDatabase($name,$email,$psw1);
  echo '<div class="category">
	    <ul class="display">
	    <li class="display"><a class="active" href="index.php?page=main">Congratulations! You are our new client now. Click here to start your shopping.</a></li>
	    </ul>
	    </div>';
	 	}
  	}
?>	
<?php }break;}?>
</body>
</html>