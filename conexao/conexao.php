<?php
	
	$host = "127.0.0.1:3312"; //127.0.0.1   >>> 189.200.200.50  >>> mysql.hostinger.fr
	$user = "root";
	$pass = "";
	$banco = "esteticav1";
	$driver = "mysql:host=$host;dbname=$banco";

	try{
		//conexão usando o PDO
		$con = new PDO($driver, $user, $pass );
		//atribuindo a conexão o modo de tratamento de erro
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $erro){
		echo "Falha na conexão com banco".$erro->getMessage();
	}
?>