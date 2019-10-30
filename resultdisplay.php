<!DOCTYPE html>
<html>
<head>
    <title>displayForm</title>
    <link rel="stylesheet" href="resultdisplay.css" />
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
//$bdd = new PDO('mysql:host=localhost;dbname=dump','root','');

//if(isset($_GET['Sort'], $_GET['SortDescending']))

$flag=$_GET['sort'];

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

