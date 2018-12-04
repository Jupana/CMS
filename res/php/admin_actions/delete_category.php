<?php
 require '../functions.php';
 $obj = new Admin_Actions();

 $delete = $obj->deleteCategory($_POST['category_id']);

 echo $delete;

?>