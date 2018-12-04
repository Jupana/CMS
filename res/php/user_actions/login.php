<?php

require '../functions.php';
$user = new User_Actions();

//Login
$login = $user->logIn($_POST['email'], $_POST['pass']);

if($login){
    //Iniciar Sesion
    $_SESSION['user'] = $_POST['email'];
    echo "true";
}else{
    echo "false";
}



?>