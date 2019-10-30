<!DOCTYPE html>
<html>

<title>We Sale ! Your Cart</title>
<head>
	<link rel="stylesheet" href="main.css" />
	<link rel="stylesheet" href="cart.css" />
</head>
<body>
	<div class="category">
		<?php include'header.php';?>
	</div>

	<?php echo "Your cart";?>

	<?php $listOfOrdersInCart = getOrderInCart();?>

		
		<?php
	if ($listOfOrdersInCart==NULL){
		echo "Your cart is empty";
	}
	else{
		//var_dump($listOfOrdersInCart);

		
		foreach($listOfOrdersInCart as $OrderInCart){
			//echo $OrderInCart['id'];
			$listOfProductsInCart = getAllOrderProductsByOrderId($OrderInCart['id']);
		
	
			foreach($listOfProductsInCart as $Product){
				//var_dump($Product); ?>
				<div class="boxProduct">
					<ul>
						<?php $imageProduct = getPictureName($Product['product_id']);?> 
		    			<li><img id="sponge.jpg" src="<?php echo $imageProduct[0]['id_image']?>"/></li>
		    			<?php $nameProduct = getProductNamebyId($Product['product_id']) ;?>	
		    			<li>
		    				<div class="productTitle">
		    					<?php  echo ($nameProduct[0]['name']);?>
		    				</div>
		    				<p>Quantity :<?php echo($Product['quantity']);?></p>
		    			</li>
	    			</ul>
	    		</div>
	    			
	    		<div class="productPrice">
	    			<?php echo($Product['unit_price']);?> USD
	    		</div>
	<?php 	
			}
		
		}
	}
	?>
	<br>
	<div class="productPrice">Total : USD</div>
	<?php
		include'footer.php';
	?>
</body>

