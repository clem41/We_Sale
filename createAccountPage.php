<!DOCTYPE html>
<html>
<head>
	<title>createAccountPage</title>
	<link rel="stylesheet" href="createAccountPage.css" />
</head>
<body>
 	<form action = "insert_update_into_db.php" method = "post">
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
		 	<input type="text" name="password">
		 	<br>
		 	<label> confirm your password </label>
		 	<br>
		 	<input type="text" name="confirm password"><br><br>
		    <input type="submit">
 		
			<p>
 	</form>
 	<?php include("footer.php") ?>
</body>
</html>