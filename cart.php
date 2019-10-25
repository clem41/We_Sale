
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
	<link rel="stylesheet" href="cart.css" />
</head>
<body>
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

		foreach($listOfOrdersInCart as $OrderInCart){
			//echo $OrderInCart['id'];
		
		$listOfProductsInCart = getAllOrderProductsByOrderId($OrderInCart['id']);
	
		foreach($listOfProductsInCart as $Product){
			var_dump($Product); ?>
			<div class="boxProduct">
				        <?php $imageProduct = getPictureName($Product['product_id']) ;
				        var_dump($imageProduct);?>
    		<img id="recipeImage" src="<?php echo $imageProduct['image']?>"/>


			</div>
		<?php }
		}
	}

		include'footer.php';
		?>
</body>