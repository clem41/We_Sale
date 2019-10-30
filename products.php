<?php
if (isset($_GET['search'])){
    $recipeCode= $_GET['search'];
}

if(isset($_POST['product_id'])){ 
	include ('cart_functions.php'); 
	$article2 = $_POST['product_id']; 
	addToCart($article2); 
} 
?> 

<!DOCTYPE html>
<html>
<head>
    <title> We sale ! Page produits </title>
    
    
    <link rel="stylesheet" href="products.css" />
</head>
<body>
	<?php $bdd = new PDO('mysql:host=localhost;dbname=dump','root',''); ?>
	
	<div class='category'>
		<?php include'header.php';?>
	</div>

	<div class='category'>
		<ul class='lel'>
  			<li class='lel'><a class="active" href="main.php">Back to main</a></li>
  			<li class='lel'><a href="Pricelow">Price:low to high</a></li>
  			<li class='lel'><a href="Pricehigh">Price:high to low</a></li>
  			<li class='lel'><a href="Newest">Newest Arrival</a></li>
		</ul>
	</div>
		<div class='category'>
			<form action = "products.php" method="post"> 	
			<div class="article">
			<?php $response = $bdd->query('SELECT * FROM products' );

			while ($article1 = $response->fetch()) {	
			?>
					
				<p>
					<?php echo $article1['name'];?><br>
					<img id="mainImg" src="cereales.jpg">
					description de l'objet : <?php echo $article1['description']; ?> <br>
					son prix est de : <?php echo $article1['unit_price'];?><br>
					<input type="submit" name="addcart"> 
					<input type="hidden" value ="<?php echo $article1['id'] ?>" name="product_id"> 
				</p>
			<?php
			}

			$response->closeCursor();
			?>
			
		</div>					

	<?php include('footer.php');?>
</body>
</html>
