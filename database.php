<?php
try
{    //FIXME: change dbname by your own dbname
	//uncomment for mac emvironmemt
	//$bdd = new PDO('mysql:host=localhost;dbname=bd_project','root','root');
	//uncomment for windows environnment
    $bdd = new PDO('mysql:host=localhost;dbname=bd_projet', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

//*******************function to read and write************************//   
    function executeQuery($query, $params)
{
   global $bdd;
        $res = $bdd->prepare($query);
        $res->execute($params);

        $datas = $res->fetchAll();

        $res->closeCursor();

        return $datas;
}
function writeOnDatabase($input){

//write on the
	global $bdd;
$bdd->exec($input);
}


//***********************interact specifically with the bsd*******************************//
function getProductById($id){
	$params = array('id'=>$id);
	$query = 'SELECT * FROM products where id= :id';
    return executeQuery($query, $params);
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
function getOrderProductsByOrderIdAndProductId($orderId,$productId)
{
    $params = array('orderId' => $orderId,'productId' =>$productId);
    $query = '
        select *
          from order_products
          where order_products.order_id = :orderId
          and order_products.product_id = :productId
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

function getProductPrice($productId)
//get the picture name (name.jpg) from a product ID
{
	$params = array('productId'=> $productId);
	$query ='
	select unit_price 
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
	$query="select * from products where name like '$string%'";
	return executeQuery($query,$params);
}

function searchGoods($name)
{
		$res=getProductByNameGivenBySearch($name);
		//var_dump($res);
	  	$numberOfProductsFound=count($res);
	    if($numberOfProductsFound==0){
			echo "Sorry,didn't find what you are looking for";
			}?>
		<?php
		return $res;
}

function updateProductQuantityInCart($articleId,$orderId,$quantity){
    $request= "UPDATE `order_products` SET `quantity`=".$quantity." WHERE `order_products`.`product_id`=".$articleId." AND `order_products`.`order_id`=".$orderId."";
    writeOnDatabase($request);
}


function addToCart($articleId){
	$listOfOrdersInCart = getOrderInCart();
	if ($listOfOrdersInCart==NULL){
		//if there isn"t any order in cart, we should create a new order
		$request = "INSERT INTO `orders` (`type`, `status`, `amount`, `billing_adress_id`, `delivery_adress_id`, `created_at`, `updated_at`) VALUES
		('CART', 'CART', 149.52, 1, 2, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";
		writeOnDatabase($request);

		//we add the product on the database
		$product=getProductById($articleId);
		$listOfOrdersInCart = getOrderInCart();
		$request = "INSERT INTO `order_products` (`order_id`, `product_id`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES (".$listOfOrdersInCart[0]['id'].", ".$product[0]['id'].", '1', ".$product[0]['unit_price'].", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)"; 
	}
	else{
			//check if the product is already in the cart or not
		$productCurrentlyInTheCart = getOrderProductsByOrderIdAndProductId($listOfOrdersInCart[0]['id'],$articleId);
		//var_dump($productCurrentlyInTheCart);
		if ($productCurrentlyInTheCart!=NULL){
			$newQuantity = (int)$productCurrentlyInTheCart[0]['quantity']+1;
			echo($newQuantity);
			updateProductQuantityInCart($productCurrentlyInTheCart[0]['product_id'],$productCurrentlyInTheCart[0]['order_id'],$newQuantity);}
			else{

		$product=getProductById($articleId);
				$request = "INSERT INTO `order_products` (`order_id`, `product_id`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES (".$listOfOrdersInCart[0]['id'].",'".$product[0]['id']."', '1', '".$product[0]['unit_price']."', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)"; 
		writeOnDatabase($request);
				$request = "INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES ('', '', '".$product[0]['id']."', '1', '".$product[0]['unit_price']."', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)"; 
	
	}
}
}

function deleteProductFromCart($articleId,$orderId){
	$request = "DELETE FROM `order_products` WHERE `order_products`.`product_id` = ".$articleId." and `order_products`.`order_id` = ".$orderId."";
	writeOnDatabase($request);
}
	
function logIn($name){
	$params = array('name'=> $name);
	$query="select password from users where username='$name'";
	return executeQuery($query,$params);
	}
	
function selectUserByUsername($name){
	$params = array('name'=> $name);
	$query="select * from users where username='$name'";
	return executeQuery($query,$params);
}
//wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
//***************************************************
//Add your function here to interact with the database
//*****************************************************
//wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
?>