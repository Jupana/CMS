<?php require'res/php/app_top.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CMS Avanzado</title>

	<link rel="stylesheet" href="http://localhost/PROIECTO_CMS/res/css/framework/semantic/semantic.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://localhost/PROIECTO_CMS/res/css/main.css">
</head>
<body>
	<?php require "views/nav/main_nav.php"?>

	<?php 
		if(!isset($_GET['section'])) {
			require'views/home.php';
		}
		elseif(
			isset($_GET['section']) &&
			 $_GET['section'] == "post"
			 ){
	
			require 'views/post.php';
		}
		elseif(
			isset($_GET['section']) &&
			 $_GET['section'] == "posts"
			 ){
	
			require 'views/posts.php';
		}
		elseif(
			isset($_GET['section']) && 
			$_GET['section'] == "register"
			){
	
			require 'views/register.php';
		}
		elseif(
			isset($_GET['section']) && 
			$_GET['section'] == "log-in"
			){
	
			require 'views/log-in.php';
		}elseif(
			isset($_SESSION['user']) && 
			isset($_GET['section']) && 
			$_GET['section'] == "my-favorites"
			){
	
			require 'views/my-favorites.php';
		}
	
	
	 ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="http://localhost/PROIECTO_CMS/res/css/framework/semantic/semantic.min.js"> </script>
	<script src="http://localhost/PROIECTO_CMS/res/js/main.js"> </script>

	
</body>
</html>