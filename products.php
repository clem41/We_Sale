<!DOCTYPE html>
<html>
<title>We Sale !</title>
<head>
	<link rel="stylesheet" href="products.css" />
	
</head>
<body>
	<?php
		$bdd = new PDO('mysql:host=localhost;dbname=dump','root','');
	?>
	<?php include'header.php';
	?>
	<form id= "cart_functions.php">
		<div class="article">
			<?php
				$response = $bdd->query('SELECT * FROM products' );
				
				

				while ($article1 = $response->fetch()) 
				{
				
				?>
					
					<p>
						<?php echo $article1['name'];?><br>
						<img id="mainImg" src="cereales.jpg">
						description de l'objet : <?php echo $article1['description']; ?> <br>
						son prix est de : <?php echo $article1['unit_price'];?><br>
						<input type="submit" value=" Ajouter au panier">
					</p>
				<?php
				}

				$response->closeCursor();
				?>
		</div>

</body>

<footer>
	<?php include'footer.php';
	?>
</footer>