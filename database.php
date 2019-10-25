<?php

function getOrderByType($orderType)
{
    $params = array('orderType' => $orderType);
    $query = '
        select o.*
          from orders o
          where o.Type = :orderType
    ';
    return executeQuery($query, $params);

    
    function executeQuery($query, $params)
{
    //FIXME: change dbname by your own dbname
    $bdd = new PDO('mysql:host=localhost;dbname=technoweb', 'root') ;
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
}

