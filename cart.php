
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

			<?php 
//Add a product in the cart if there is a redirection from a add to cart button
			if(isset($_POST['submit'])){
 			if (session_status() == PHP_SESSION_NONE) {
 				  header('http://localhost/We_Sale/index.php?page=connection');
 			 exit();
 			}
    
		addToCart($_POST["idProduct"],$_POST['quantity'],$_SESSION['login']);
		echo "Your product was well added to the cart";
	}?>
				<?php 
//Delete a product in the cart if there is a redirection from a delete button of the cart
				if(isset($_POST['submitDelete'])){
		deleteProductFromCart($_POST["idProduct"],$_POST["idOrderProduct"]);
		echo "A product was deleted";
	}
//if a quantity was updated
					if(isset($_POST['newQuantity'])){
	updateProductQuantityInCart($_POST['idProduct'],$_POST["idOrderProduct"],$_POST['quantity']);
	echo" update of quantity done";
}
	?><?php
	if(!isset($_SESSION)) {
		echo"You must log in to see your cart";
	}
	else{
	$listOfOrdersInCart = getOrderInCart($_SESSION['login']);

	if ($listOfOrdersInCart==NULL){
		echo "Your cart is empty";
	}
	else{
		//var_dump($listOfOrdersInCart);
		//initalise the sub total to cost
		$subtotal = 0.0;
		echo "Your cart";?>
		<br>
		<?php
		foreach($listOfOrdersInCart as $OrderInCart){
		$listOfProductsInCart = getAllOrderProductsByOrderId($OrderInCart['id']);
	
		foreach($listOfProductsInCart as $Product){
			//var_dump($Product); ?>
			<br>
			<div class="boxProduct">
				        <?php $imageProduct = getPictureName($Product['product_id']);?> 
    		<li><img id="recipeImage" src="<?php echo $imageProduct[0]['image']?>"/></li>
    			<?php $nameProduct = getProductNamebyId($Product['product_id']) ;
    			?>
    		<li><div class="productTitle">
    				<?php  
    				echo ($nameProduct[0]['name']);?>
    			</div>
    		<p>Quantity :<?php echo($Product['quantity']);?>

<form method="post" action="index.php?page=cart">
<input id="idProduct" name="idProduct" type="hidden" value="<?php echo $Product['product_id']?>"> 
<input id="idOrderProduct" name="idOrderProduct" type="hidden" value="<?php echo $Product['order_id']?>">
       <select name="quantity" id="quantity">
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
           <option value="6">6</option>
           <option value="7">7</option>
           <option value="8">8</option>
           <option value="9">9</option>
       </select>       
<input type="submit" name='newQuantity' value='newQuantity' class="button">
    	
    			</div></li>
    			<li><form method="post" action="index.php?page=cart">
<input id="idProduct" name="idProduct" type="hidden" value="<?php echo $Product['product_id']?>"> 
<input id="idOrderProduct" name="idOrderProduct" type="hidden" value="<?php echo $Product['order_id']?>">      
<input type="submit" name='submitDelete' value='Delete' class="button">
</form></li>

</form></li>
    		<div class="productPrice">
    			<?php 
    			$unitPriceProduct = getProductPrice($Product['product_id']);
    			echo($unitPriceProduct[0]['unit_price']);
    			?> USD

    			<?php $subtotal = ($subtotal+ (double)$Product['quantity']*(double)($unitPriceProduct[0]['unit_price']));
    			?></div>

    			</div>

			</div>
		<?php }
		}
	}
}?>
	<br>
	<div class="productPrice">Subtotal: <?php echo($subtotal);?> USD</div>
	<br><button class="buttonCartCheck" href="cart.php">Proceed to checkout</button>