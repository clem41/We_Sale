<?php include 'header.php' ?>
<?php
  $name=$_POST['username'];
  $psw=$_POST['psw'];
  $password=logIn($name);
  var_dump($password);
  echo $password[0]['PASSWORD'];
  if($psw==$password[0]['PASSWORD']){
  	 echo 1;
  	}
  	else{
  	echo 2;	
  		}
?>
