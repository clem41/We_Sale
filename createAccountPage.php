<!DOCTYPE html>
<html>
<head>
	<title>createAccountPage</title>
	<link rel="stylesheet" href="createAccountPage.css" />
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
  
  if($psw2!=$psw1){
  	echo 'please to make the two password the same';
  	
  	}
  else{
     $userfound=selectUserByUsername($name);
     $emailfound=selectUserByUsername($email);
     if($userfound!=NULL||$emailfound!=NULL){
	     echo 'this user has aready exist';		 
	    }
	 else{
	 	addUserToDatabase($name,$email,$psw1);
	 	 echo 'successful';
	 	}
  	}
?>	
<?php }break;}?>
</body>
</html>