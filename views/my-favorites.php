<div class="ui grid stackable container" > 
	<div class="sixteen wide column">
		<h2 style="text-align:center;"> Publicaciones Favoritos </h2>
	</div>

	<?php foreach($posts as $post): ?>

	<a href="post/<?php echo $post["post_id"]; ?>" class="four wide column ">
		<div class="post_container">	
			<img src="res/img/img_posts/<?php echo $post["img_post"]; ?>.png" class="post_img" alt="<?php echo $post["name"]; ?>"> 
			<h2 class="post_title">	<?php echo $post["name"]; ?></h2>
			<p class="post_date"><?php echo date("d-m-y",$post["created_at"]); ?></p>
			<p class="ui red button btnDeleteFavorite" data-favoriteId="<?php echo $post["favorite_id"]; ?>">Eliminar Publicaciones Favoritas</p>
	    </div>
	</a>
	
	<?php endforeach; ?>
</div>