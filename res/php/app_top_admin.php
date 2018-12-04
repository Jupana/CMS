<?php

    require "functions.php";
    $admin = new Admin_Actions();

    if(
        isset($_SESSION['admin']) &&
       !isset($_GET['section']) 
      
     ){
        //Obtener categories de la bd
        $posts = $admin->getPosts();
    }

    if(
        isset($_SESSION['admin']) &&
        isset($_GET['section']) &&
        $_GET['section'] == "posts"
    ){
        //Obtener categories de la bd
        $categories = $admin->getCategories();
    }
    if(
        isset($_SESSION['admin']) &&
        isset($_GET['section']) &&
        $_GET['section'] == "categories"
    ){
        //Obtener categories de la bd
        $categories = $admin->getCategories();
    }

           
?>