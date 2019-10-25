
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
<div class="category">
		<?php include'header.php';
	?>
	</div>
	<?php $listOfOrdersInCart = getOrderInCart();
	if ($listOfOrdersInCart==NULL){
		echo "Your cart is empty";
	}
	else{
		var_dump($listOfOrdersInCart);

		$listOfProductsInCart = getAllOrderProductsByOrderId($listOfOrdersInCart['id']);
		var_dump($listOfProductsInCart);
	}
	?>

		<?php include'footer.php';
	?>
</body>

