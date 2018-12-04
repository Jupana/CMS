
<div class="post_main_img">

<img src="../res/img/img_posts/<?php echo $post[0]["img_post"];?>.png"  alt="<?php echo $post[0]["name"];?>">

</div>

<div class="post_main_body">
    <h1>
        
        <?php echo $post[0]["name"];?>
        <?php  if(isset($_SESSION["user"]) && $check == 0 ): ?>

            <span class="btnMarkFavorite" data-postId="  <?php echo $_GET["post_id"];?>" title="Marcar como favorito"><i class="fa fa-star" ></i></span>

        <?php endif;?>

    
    </h1>
    <p >
        <?php echo date("d-m-Y", $post[0]["created_at"]);?> - <?php echo $post[0]["username"];?>
    </p>
    <p>
        <?php echo $post[0]["body"];?>   
    </p>


</div>