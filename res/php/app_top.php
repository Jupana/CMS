<?php

require "functions.php";
$user = new User_Actions();


if(!isset($_GET['section'])) {
    //Obtener Publicaciones recientes
  $posts = $user->getRecentPosts();

 }elseif(
     isset($_GET['section']) &&
     $_GET['section'] == "posts"
 ){
     //Obtener  Publicaciones
    $posts = $user->getPosts();

 }elseif(
        isset($_GET['section']) &&
        $_GET['section'] == "post"
 ){
            //Obtener Info de la Publicacion
            $post = $user->getPostInfo($_GET['post_id']);

        if(isset($_SESSION["user"])){

          //Obtener el perfil del usuario
          $profile = $user->getProfile($_SESSION["user"]);

         //Checar que la publicacion visitada ya esta en sus favoritos
            $check = $user-> checkFavorites($profile[0]["user_id"],$_GET["post_id"]);
        }

        }elseif(
        isset($_SESSION['user']) && 
        isset($_GET['section']) && 
        $_GET['section'] == "my-favorites"
     ){
         //Obtener el perfil del usuario
        $profile = $user->getProfile($_SESSION["user"]);

       //Obtener Publicaciones Favoritas
       $posts = $user->getMyFavorites( $profile[0]["user_id"]);
    }

?>