<?php

function getAllRanges()
{
	$query  = "select * from ranges";
	return executeQuery($query,null)

}

function getRangeById($rangeId)
{
	$params = array('rangeId' =>$rangeId);
	$query = "select r.* from ranges r where r.id = :rangeId";
	return executeQuery($query,$params);
}
function g