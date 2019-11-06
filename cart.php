
<!DOCTYPE html>
<html>
<style>
.category{
	display:block;
	}
</style>
<title>We Sale ! Your Cart</title>
<head>
	<link rel="stylesheet" href="main.css" />

</head>
<body>
		<link rel="stylesheet" href="cart.css" />
<div class="category">
		<?php include'header.php';
	?>
	</div>
	<?php $listOfOrdersInCart = getOrderInCart();
	if ($listOfOrdersInCart==NULL){
		echo "Your cart is empty";
	}
	else{
		//var_dump($listOfOrdersInCart);
		echo "Your cart";?>
		<br>
		<?php
		foreach($listOfOrdersInCart as $OrderInCart){
			//echo $OrderInCart['id'];
		//var_dump($OrderInCart);
		$listOfProductsInCart = getAllOrderProductsByOrderId($OrderInCart['id']);
	
		foreach($listOfProductsInCart as $Product){
			//var_dump($Product); ?>
			<div class="boxProduct">
				        <?php $imageProduct = getPictureName($Product['product_id']);?> 
    		<li><img id="recipeImage" src="<?php echo $imageProduct[0]['image']?>"/></li>
    			<?php $nameProduct = getProductNamebyId($Product['id']) ;
    			?>
    		<li><div class="productTitle">
    				<?php  echo ($nameProduct[0]['name']);?>
    			</div>
    		<p>Quantity :<?php echo($Product['quantity']);?>
    	
    			</div></li>
    		<div class="productPrice">
    			<?php 
    			$unitPriceProduct = getProductPrice($Product['product_id']);
    			echo($unitPriceProduct[0]['unit_price']);?> USD
    			</div>

			</div>
		<?php }
		}
	}?>
	<br>
	<div class="productPrice">Total : USD</div>
<?php
		include'footer.php';
		?>
</body>

