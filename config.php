<?php
	session_start(); //중요
	$dbServer='127.0.0.1' ;
	$dbUser='root' ;
	$dbPass='';
	$dbName='php1';
	try{
	$dsn="mysql:host={$dbServer}; dbname={$dbName}; charset=utf8";
	$pdo=new pdo($dsn,$dbUser,$dbPass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	echo"연결성공";
	}
	catch(PDOException $e){
	echo"연결실패";
	}
?>