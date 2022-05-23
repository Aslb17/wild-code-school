<?php

function getList(){
	$mysqlClient = dbConnect();

	$argoStatement = $mysqlClient->prepare('SELECT * FROM argonautes ORDER BY name ASC');
	$argoStatement->execute();
	$argonautes = $argoStatement->fetchAll();
	return $argonautes;
}

function newMember($name)
{
	$db = dbConnect();
	$member = $db->prepare('INSERT INTO `argonautes` (`name`) VALUES (?)');
	$affectedLines = $member->execute(array($name));

	return $affectedLines;
}


function dbConnect() {
	try
	{
	    $db = new PDO('mysql:host=localhost;dbname=jason;charset=utf8', 'root', 'root');
	    return $db;
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}
}

