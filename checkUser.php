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
  $name=$_POST['username'];
  $psw=$_POST['psw'];
  
  if($name!=''){
  	$userfound=selectUserByUsername($name);
	if($userfound==NULL){
		echo 'this user does not exist';
		
	}
	else{
			$password=logIn($name);
  if($psw==$password[0]['password']){
  	 echo 'sucsses';
  	}
  	else{
  	echo 'the password is wrong please try again';	
  		}}}
  else{
  	echo 'please input the both name and password';
  	}
?>
<?php include 'footer.php'?>
</body>
</html>