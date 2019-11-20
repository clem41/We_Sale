
<?php
	//include_once 'database.php';
	//$bdd = new PDO('mysql:host=localhost;dbname=bd_projet', 'root');
	//$con = mysql_connect("localhost","root","");
	//if (!$con)
	//if(!$bdd)
	/*{
		die('Could not connect: ' . mysql_error());
	}
	*/
	//mysql_select_db("bd_projet", $con);
	/*
	$sql="INSERT INTO `users` (`id`, `username`, `email`, `password`, `billing_adress_id`, `delivery_adress_id`, `created_at`, `updated_at`) VALUES
	('$_POST[name]','$_POST[email]','$_POST[password]')";
	*/
	//these 3 echos are just for test whether the data sent by createAccountPage.php has been received by this file.
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
	<meta charset="utf-8">
	<title>Success!</title>
	
	<link rel="stylesheet" href="productCSS.css" />
	<link rel="stylesheet" href="display.css" />
	
</head>
<body>
	<?php
	include_once('database.php');
	function executeSql($sql){
		$flag = false;
		$feedback = array();
		if($sql == ""){
			echo "Error! Sql content is empty!";
		}else{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "bd_projet";

			$conn = mysqli_connect($servername, $username, $password, $dbname);

			if (mysqli_connect_errno()){
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

			$query_result=mysqli_query($conn,$sql);//query_result is a PHP array
			if($query_result){
				$flag = true;
				$feedback = $query_result;
				//$num_rows=mysqli_num_rows($query_result);
			}
		return array($flag,$feedback);
		}
	}

	//these 4 echos are just used for testing whether the data sent by createAccountPage.php has been received by this file.
	/*
	echo $_POST["name"];
	echo $_POST["email"];
	echo $_POST["password"];
	echo $_POST["confpassword"];
	*/
	
	function selectUserByEmail($email){
	$params = array('email'=> $email);
	$query="select * from users where email='$email'";
	return executeQuery($query,$params);}
	
	$userName = $_POST["name"];
	$pwd = $_POST["password"];
	$cofPsw = $_POST["confpassword"];
	$email = $_POST["email"];
	$userfound = selectUserByUsername($userName);
	$emailfound = selectUserByEmail($email);

	if($userName == "" || $pwd == "" || $cofPsw == "" || $email == ""){
		echo "None of the value can be empty!";
	}
	else if($userfound != NULL){
		echo "This user has already existed, you can't use it again!";
	}
	else if($emailfound != NULL){
		echo "This email has already existed, you can't use it again!";
	}
	else if($pwd != $cofPsw){
		echo "Please confirm your password again!";
	}else if ($pwd == $cofPsw){
		$sql = "INSERT INTO `users` (`username`, `email`, `password`) 
		VALUES('" .$userName ."','" . $email . "','" . $pwd ."');";
		$result = executeSql($sql);
		if($result){
			$select_sql = "SELECT * FROM users WHERE username = '".$userName."';";
			$result = executeSql($select_sql);
			if($result[0]){
				setcookie('login_status',true);
				while($row = mysqli_fetch_assoc($result[1])){
					$userid=$row["id"];
					setcookie('id',$userid);
				}
				header("location:index.php?page=check");
			}
		}
	}
	?>
	
	<div class="category">
	<ul class="display">
	<li class="display"><a class="active" href="index.php?page=main">Congratulations! You are our new client now. Click here to start your shopping.</a></li>
	</ul>
	</div>

</body>
</html>

