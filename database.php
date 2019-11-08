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

//*******************function to read and write************************    
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


//***********************interact specifically with the bsd*******************************
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

function addToCart($articleId,$quantity){
		$product=getProductById($articleId);
				$request = "INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES ('', '', '".$article1['id']."', '1', '".$article1['unit_price']."', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)"; 
	
	}
//wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
//***************************************************
//Add your function here to interact with the database
//*****************************************************
//wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
?>
