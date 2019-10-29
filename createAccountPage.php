<!DOCTYPE html>
<html>
<head>
	<title>createAccountPage</title>
	<link rel="stylesheet" href="createAccountPage.css" />
</head>
<body>
	<?php include("header.php") ?>
 	<form >
 		<p class="inscritpion">
			 
	 		<label> lastName </label>
	 		<br>
	 		<input type="text" name="lastName">
		 	<br>
		 	<label>	name </label>
		 	<br> 
		 	<input type="text" name="name">
		 	<br>
		 	<label> e-mail </label>
		 	<br> 
		 	<input type="text" name="e-mail">
		 	<br>
		 	<label> password </label>
		 	<br>
		 	<input type="text" name="mot de passe">
		 	<br>
		 	<label> confirm your password </label>
		 	<br>
		 	<input type="text" name="confirm password"><br><br>
		 	<input type="button" value =" validate ">
 		
			<p>
 	</form>
 	<?php include("footer.php") ?>
</body>
</html>