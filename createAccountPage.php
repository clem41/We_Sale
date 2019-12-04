	<?php
$contenuName = $_POST['name']; 
setcookie("UserName", $contenu, time()+36000);
$contenuPassword = $_POST['password']; 
setcookie("UserPassword", $contenu, time()+36000);
?>
	

<!DOCTYPE html>
<html>
<head>
	<title>createAccountPage</title>
	<link rel="stylesheet" href="display.css" />
	 <link rel="stylesheet" href="createAccountPage.css" />
</head>
<body>


<?php

if (isset($_POST['submit'])){
	$userfound=selectUserByUsername($_POST['name']);
     $emailfound=selectUserByUsername($_POST['email']);
	if(($_POST['name']=='')||($_POST['email']=='')||($_POST['password']=='')||($_POST['confirmpassword']=='')){
  	?><br><?php 
		  	echo"<br>";
	 echo"Please, make sure that all the parts of the form are filled";
	}
 
  else if($_POST['password']!=$_POST['confirmpassword']){
  	?><br><?php  	
  	echo"<br>";
  	echo "The password and the password confirmation don't match";
  }
   else if($userfound!=NULL||$emailfound!=NULL){
  	?><br><?php 
  	echo"<br>";  
echo 'this user already exists';
			 
	    }
else{
	 	addUserToDatabase($_POST['name'],$_POST['email'],$_POST['password']);
  echo '<div class="category">
	    <ul class="display">
	    <li class="display"><a class="active" href="index.php?page=main">Congratulations! You are our new client now. Click here to start your shopping.</a></li>
	    </ul>
	    </div>';
	 	}
  	}
  	?>
	<br>
 	<form action = "index.php?page=account" method = "post">
 		<p class="inscritpion">
			 
	 		
		 	<label>	Name. </label>
		 	<br> 
		 	<input type="text" name="name">
		 	<br>
		 	<label> Email. </label>
		 	<br> 
		 	<input type="text" name="email">
		 	<br>
		 	<label> Password. </label>
		 	<br>
		 	<input type="password" name="password">
		 	<br>
		 	<label> Confirm your password. </label>
		 	<br>
		 	<input type="password" name="confirmpassword"><br><br>
		    <input name = 'submit' type="submit">
 		
			</p>
 	</form>
 	
</body>
</html>