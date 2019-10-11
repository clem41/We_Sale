<!<!DOCTYPE html>
<html>
<head>
	<title>
		createAccountPage
	</title>
	<style type="text/css">
	label{
		
		display: block;
		width :150 px;
		
	}
	</style>

</head>
	
<body>
	<?php include ('header.php') ?>

 	<form> 
 		<label> <?php echo "lastName" ?> </label> <input type="text" name="lastName">
	 	<br>
	 	<label>	<?php echo "name" ?> </label> <input type="text" name="name">
	 	<br>
	 	<label>	<?php echo "e-mail" ?> </label> <input type="text" name="e-mail">
	 	<br>
	 	<label> <?php echo "mot de passe" ?></label> <input type="text" name="mot de passe">
	 	<br>
	 	<label> <?php echo "confirmer mot de passe" ?></label><input type="text" name="confirmer mot de passe"><br>
	 	<input type="button" value =" valider ">
 		
		<?php include ('footer.php') ?>

 	</form>

</body>
</html>