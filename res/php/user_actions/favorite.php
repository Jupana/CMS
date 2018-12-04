<?php

require '../functions.php';
$user = new User_Actions();

//Obtener el perfil del usuario
$profile = $user->getProfile($_SESSION["user"]);

//Marcar como favorito
$favorite = $user->markAsFavorite($_POST["post_id"], $profile[0]["user_id"]);

if($favorite > 0){
    echo "true";
}else{
    echo "false";
}

?>