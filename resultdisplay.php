<!DOCTYPE html>
<html>
<head>
    <title>displayForm</title>
<link rel="stylesheet" href="display.css" />
</head>
<body>
<?php
$name=$_POST['name'];?>
<div class="category">
<ul class="display">
   <li class="display"><a class="active" href="index.php?page=main">Back to main</a></li>
  <li class="display"><a href="resultdisplay.php?name=<?php echo $name?>&sort=low">Price:low to high</a></li>
  <li class="display"><a href="resultdisplay.php?name=<?php echo $name?>&sort=hight">Price:high to low</a></li>
  <li class="display"><a href="Newest">Newest Arrival</a></li>
</ul>
</div>
<div>
<?php
$name=$_POST['name'];
//$flag=$_GET['sort'];
$products=searchGoods($name);
?>
</div>
<?php foreach ($products as $product)
{?>
  <div class="img">
    <a target="_blank" href="index.php?page=products&name=<?php echo $product['name']?>">
	  <?php $imageProduct = getPictureName($product['id']);?> 
      <img src="<?php echo $imageProduct[0]['image']?>" alt="图片文本描述" width="300px" height="400px">
    </a>
    <div class="desc">
	<?php		
		echo $product['name'];
		echo "<br>";
		echo $product['unit_price'];
      ?>
<form method="post" action="index.php?page=cart">
<input id="idProduct" name="idProduct" type="hidden" value="<?php echo $product['id']?>">
<input id="idProduct" name="idProduct" type="hidden" value="<?php echo $product['id']?>"><br>
       <label for="pays">Quantity : </label>
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
<input type="submit" name='submit' value='Add to Cart' class="button">
</form></b>
	</div>
	
	   </div>
<?php }?>
<?php include 'footer.php'?>
</body>
</html>
