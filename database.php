<?php


    
    function executeQuery($query, $params)
{
    //FIXME: change dbname by your own dbname
    $bdd = new PDO('mysql:host=localhost;dbname=bd_projet', 'root') ;
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
{
    $query = "
        select *
          from orders 
          where orders.type = 'CART'
    ";
    return executeQuery($query,NULL);
}

?>
