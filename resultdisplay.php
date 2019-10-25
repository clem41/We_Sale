<!DOCTYPE html>
<html>
<head>
    <title>displayForm</title>
<style>
div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}
display.category{
	display:block;
	}
div.img:hover {
    border: 1px solid #777;
}
div.img img {
    width: 100%;
    height: 150px;
}

div.desc {
    padding: 15px;
    text-align: center;
}
* {
    box-sizing: border-box;
}
ul.category_nav{
	display:block;
	}
ul.display{
	display:block;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li.display {
    float: left;
}

li.display a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li.display a:hover {
    background-color: #111;
}
.button {
	display:block;
	margin: 0 auto;
    background-color: #e7e7e7;
    color: black;
    border: none;
	padding: 4px 8px;
    text-align: center;
    text-decoration: none;
    display:block;
    font-size: 12px;
    cursor: pointer;
}
a.button{
	display:inline;
    text-align: center;
    text-decoration: none;
}
</style>
</head>
<body>
<div class="category">
<?php include 'header.php'?>
<?php $name=$_GET[name];?>
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
$name=$_GET[name];
$bdd = new PDO('mysql:host=localhost;dbname=dump','root','root');
$flag=$_GET[sort];
   if($flag=="low"){
   $res = $bdd->prepare("select * from products where name like '%$name%' order by unit_price");
   }
   elseif($flag=="hight"){
   $res = $bdd->prepare("select * from products where name like '%$name%' order by unit_price desc");
   	}
   	else{
   		$res = $bdd->prepare("select * from products where name like '%$name%'");
   		}
        $res->execute();
		$products = $res->fetchAll();
	  	$num=count($products);
	    if($num==0){
			echo "Sorry,didn't find what you are looking for";
			}
?>
</div>
<?php foreach ($products as $product)
{?>
  <div class="img">
    <a target="_blank" href="www.baidu.com">
      <img src="<?php echo $product['name']?>.jpg" alt="图片文本描述" width="300px" height="400px">
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