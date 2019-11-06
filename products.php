<!DOCTYPE html>
<html>
<head>
    <title> We sale ! Page produits </title>
    
    <link rel="stylesheet" href="productCSS.css" />
	<link rel="stylesheet" href="display.css" />
</head>
<body>
	<div class="category">
<?php include 'header.php'?>
<?php $name=$_GET['name'];?>
</div>
<div class="category">
<ul class="display">
  <li class="display"><a class="active" href="main.php">Back to main</a></li>
  <li class="display"><a href="resultdisplay.php?name=<?php echo $name?>&sort=low">Price:low to high</a></li>
  <li class="display"><a href="resultdisplay.php?name=<?php echo $name?>&sort=hight">Price:high to low</a></li>
  <li class="display"><a href="Newest">Newest Arrival</a></li>
</ul>
</div>
<div>
<?php
$name=$_GET['name'];
//$flag=$_GET['sort'];
$products=searchGoods($name);
?>
</div>
<?php foreach ($products as $product)
{?>
  <div class="img">
    <a target="_blank" href="www.baidu.com">
	  <?php $imageProduct = getPictureName($product['id']);?> 
      <img src="<?php echo $imageProduct[0]['image']?>" alt="图片文本描述" width="300px" height="400px">
    </a>
    <div class="desc">
	<?php		
		echo $product['name'];
		echo "<br>";
		echo $product['unit_price'];
      ?>
<button class="button"><a class="button" href="cart.php">add to cart</a></button>
	</div>
	
	   </div>
<?php }?>
<?php include 'footer.php'?>
</body>
</html>