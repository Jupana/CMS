<?php 
	session_start();
	
	require'medoo.php';

	use Medoo\Medoo;

try{
	$database = new Medoo([
		// required
		'database_type' => 'mysql',
		'database_name' => 'cms_avanzado',
		'server' => 'localhost',
		'username' => 'root',
		'password' => '',

	]);
 }catch(PDOException $e){
 	echo"No se pudo conectar a la base de datos.";

 }

 ?>