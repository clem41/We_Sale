<?php
if(isset($_GET['name'])){
	$flag = 1;
}
else{
	$flag = 0;
	$name='';
}
?>

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
<?php $name=$_GET['name'];
    if(isset($_POST['Product'])){
      addToCart($POST['prodId']);
      echo("Your product was added in the cart");
    }?>
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
?>
</div>
<?php 
switch($flag){
	case 0:
foreach ($products as $product)
{?>
  <div class="img">
    <a target="_blank" href="products.php?name=<?php echo $product['name']?>">
	  <?php $imageProduct = getPictureName($product['id']);?> 
      <img src="<?php echo $imageProduct[0]['image']?>" alt="图片文本描述" width="300px" height="400px">
    </a>
    <div class="desc">
	<?php		
		echo $product['name'];
		echo "<br>";
		echo $product['unit_price'];
      ?>
  <input id="prodId" name="prodId" type="hidden" value="<?php echo $product['id']?>">
<button class="button"><a class="button" name='addProduct' type = "submit" href="products.php">add to cart</a></button>
</div>
</div>
<?php }break;
  case 1:
  foreach ($products as $product)
{?>
<div class="image">
<a target="_blank" href="products.php?name=<?php echo $product['name']?>">
	  <?php $imageProduct = getPictureName($product['id']);?> 
      <img src="<?php echo $imageProduct[0]['image']?>" alt="图片文本描述" width="300px" height="400px">
</a> 
</div>
 <div class="description">
	<?php		
		echo $product['name'];
		echo "<br>";
		echo $product['description'];
		echo "<br>";
		echo $product['unit_price'];
      ?>
	</div>
<?php }break;?>
<?php }?>

<?php include 'footer.php'?>
</body>
</html>
$products=searchGoods($name);
<button class="button2"><a class="button" href="products.php">add to cart</a></button>