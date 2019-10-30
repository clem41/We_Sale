<?php
if (isset($_GET['search'])){
    $recipeCode= $_GET['search'];
} else {
    include 'main.php';
    die;
}
?>

 
<?php  
	if(isset($_POST['product_id'])){ 
		include ('cart_functions.php'); 
		$article2 = $_POST['product_id']; 
		addToCart($article2); 
	} 
 ?> 
 
 


<!DOCTYPE html>
<html>
	.category{
		display: block;
	}
ul.lel {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li.lel {
    float: left;
}
li.lel a {
    display: block;
    color: white;
    text-align: center;
    text-decoration: none;
    padding: 14px 16px;
    background-color: #111;
li.lel a:hover {
}
</style>
<head>
    <title> We sale ! Page produits </title>
    
    <link rel="stylesheet" href="productCSS.css" />
    <link rel="stylesheet" href="css/product.css" />
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
	<form action = "products.php" method="post"> 	
		<div class="article">
			<?php
				$response = $bdd->query('SELECT * FROM products' );
			?>	
				
				<?php

				while ($article1 = $response->fetch()) 
				{
				
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
	</div>

	<footer>
		<?php include'footer.php';
		?>
	</footer>
</body>