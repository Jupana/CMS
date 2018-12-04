<?php
        require'..//functions.php';
        $obj = new Admin_Actions();

        $name_img = uniqid();

        //Obtenedr el perfil del administrador activo
        $profile = $obj->getProfile($_SESSION['admin']);

        $save = $obj->savePost($_POST['txtNamePost'],$_POST['txtCategoryPost'],$_POST['description'],$name_img, $profile[0]['admin_id']);

       if($save > 0){

        move_uploaded_file($_FILES['image_file']["tmp_name"],"../../img/img_posts/" . $name_img . ".png");

        echo "true";
       }else{
           echo "false";
       }



?>