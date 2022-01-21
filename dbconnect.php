<?php

    $host = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'notresite';
	$con = mysqli_connect($host, $username, $password, $dbname);
	mysqli_set_charset($con, 'utf8');

try{
     $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
	 $db=new PDO('mysql:host=127.0.0.1; dbname=notresite','root','');
	 $db->setAttribute(pdo::ATTR_CASE, PDO::CASE_LOWER); //mettre les noms des champs en majuscule
	 $db->setAttribute(pdo::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //lancer des exceptions en cas d'erreurs
	 $db->exec("SET CHARACTER SET utf8"); 
	 }
	 
	 catch(PDOException $e){
	       dir('Erreur : '.$e->getMessage());
		   }
		   
?>



