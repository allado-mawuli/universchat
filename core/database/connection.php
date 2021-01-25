<?php
	$dsn = 'mysql:host=sql310.epizy.com; dbname=epiz_27770824_tweety';
	$user = 'epiz_27770824';
	$password = 'ScD0cDLrArT';


	try{
		$pdo = new PDO($dsn, $user, $password);
	}catch(PDOException $e){
		echo 'connection error! ' . $e;
	}
?>
