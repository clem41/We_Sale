<!DOCTYPE html>
<html>
<title>We Sale !</title>
<style>
	.category{
		display: block;
	}

ul.lel {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li.lel {
    float: left;
}

li.lel a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li.lel a:hover {
    background-color: #111;
}
</style>
<head>
	<!-- <link rel="stylesheet" href="products.css" /> -->
	
</head>
<body>
	<?php
		$bdd = new PDO('mysql:host=localhost;dbname=dump','root','');
	?>
	<div class='category'>
	<?php include'header.php';
	?>
</div>
<div class='category'>
	<ul class='lel'>
  		<li class='lel'><a class="active" href="main.html">Back to main</a></li>
  		<li class='lel'><a href="Pricelow">Price:low to high</a></li>
  		<li class='lel'><a href="Pricehigh">Price:high to low</a></li>
  		<li class='lel'><a href="Newest">Newest Arrival</a></li>
	</ul>
</div>
<div class='category'>
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
	</div>

</body>

<footer>
	<?php include'footer.php';
	?>
</footer>