<?php


    
function executeQuery($query, $params)
{
    //FIXME: change dbname by your own dbname
    $bdd = new PDO('mysql:host=localhost;dbname=dump', 'root') ;
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
        SELECT *
          from orders 
          where orders.type = 'CART'
    ";
    return executeQuery($query,NULL);
}
function getAllOrderProductsByOrderId($orderId)
{
    $params = array('orderId' => $orderId);
    $query = '
        SELECT *
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
	SELECT image 
	from products
	where products.id= :productId';
	return executeQuery($query,$params);
}

function getProductNameById($productId)
//get the picture name (name.jpg) from a product ID
{
	$params = array('productId'=> $productId);
	$query ='
	SELECT name 
	from products
	where products.id= :productId';
	return executeQuery($query,$params);
}
//wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
//***************************************************
//Add your function here to interact with the database
//*****************************************************
//wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
?>
