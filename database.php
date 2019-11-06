<?php


    
    function executeQuery($query, $params)
{
    //FIXME: change dbname by your own dbname
	//uncomment for mac emvironmemt
	$bdd = new PDO('mysql:host=localhost;dbname=bd_project','root','root');
	//uncomment for windows environnment
    //$bdd = new PDO('mysql:host=localhost;dbname=bd_projet', 'root');
    try {
        $res = $bdd->prepare($query);
        $res->execute($params);

        $datas = $res->fetchAll();

        $res->closeCursor();

        return $datas;
    } catch (PDOException $e) {
        var_dump($e);
    }
}
function getOrderInCart()
//detection of orders which are still in the cart
{
    $query = "
        select *
          from orders 
          where orders.type = 'CART'
    ";
    return executeQuery($query,NULL);
}
function getAllOrderProductsByOrderId($orderId)
{
    $params = array('orderId' => $orderId);
    $query = '
        select *
          from order_products
          where order_products.order_id = :orderId
    ';
    return executeQuery($query, $params);
}

function getPictureName($productId)
//get the picture name (name.jpg) from a product ID
{
	$params = array('productId'=> $productId);
	$query ='
	select image 
	from products
	where products.id= :productId';
	return executeQuery($query,$params);
}

function getProductNameById($productId)
//get the picture name (name.jpg) from a product ID
{
	$params = array('productId'=> $productId);
	$query ='
	select name 
	from products
	where products.id= :productId';
	return executeQuery($query,$params);}

function getProductByNameGivenBySearch($string)
{
	$params = array('string'=> $string);
	$query='select * from products where name like :string';
	return executeQuery($query,$params);
}

function searchGoods($name,$flag)
{
	/*$bdd = new PDO('mysql:host=localhost;dbname=bd_project','root','root');
	   if($flag=="low"){
   $res = $bdd->prepare("select * from products where name like '%$name%' order by unit_price");
   }
   elseif($flag=="hight"){
   $res = $bdd->prepare("select * from products where name like '%$name%' order by unit_price desc");
   	}
   	else{
   		$res = $bdd->prepare("select * from products where name like '%$name%'");
   		}
        $res->execute();*/
		$res=getProductByNameGivenBySearch($name);
		$products = $res->fetchAll();
	  	$num=count($products);
	    if($num==0){
			echo "Sorry,didn't find what you are looking for";
			}?>
		return $products;
}
//wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
//***************************************************
//Add your function here to interact with the database
//*****************************************************
//wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
?>
