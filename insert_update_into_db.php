<?php
	include_once 'database.php';
	$bdd = new PDO('mysql:host=localhost;dbname=bd_projet', 'root');
	//$con = mysql_connect("localhost","root","");
	//if (!$con)
	if(!$bdd)
	{
		die('Could not connect: ' . mysql_error());
	}

	//mysql_select_db("bd_projet", $con);

	$sql="INSERT INTO `users` (`id`, `username`, `email`, `password`, 
	`billing_adress_id`, `delivery_adress_id`, `created_at`, `updated_at`) 
	VALUES
	('$_POST[name]','$_POST[email]','$_POST[password]')";
	
	//for testing if the data has been transfered to this file.
	/*
	echo $_POST["name"];
	echo $_POST["email"];
	echo $_POST["password"];
	*/
	
	//if (!mysql_query($sql,$con))
	/*
	if (!mysql_query($sql,$bdd))
	{
		die('Error: ' . mysql_error());
	}
	echo "1 record added";
	
    mysql_close($bdd);
	*/
	//mysql_close($con);
	
?>
<html>
<head>
	<title>Success!</title>
	
	<link rel="stylesheet" href="productCSS.css" />
	<link rel="stylesheet" href="display.css" />
	
</head>
<body>
<div class="category">
<ul class="display">
<li class="display"><a class="active" href="main.php">Congratulations! You are our new client now.</a></li>
</ul>
</div>
</body>
</html>