
<form enctype="multipart/form-data" id="new_post_container" class="ui form new_post_container">

    <h1>Nueva Publicacion</h1>
    <p><b>Nombre de la Publicacion</b></p>
    <div class="ui input">
		<input type="texto" class="txtNamePost" name="txtNamePost" placeholder="Nombre de la Publicacion">
    </div>
    
    <p><b>Categoria</b></p>
    
    <div class="field">
        <select class="txtCategoryPost" name="txtCategoryPost">
            <option value="0">--SELECCIONAR UNA CATEGORIA--</option>

                <?php foreach($categories as $category):?>
                    <option value="<?php echo $category['category_id'];?>"><?php echo $category['category'];?></option>
                <?php endforeach;?>
        </select>
    </div>

    <p><b>Seleccione una imagen</b></p>
    <div class="ui input">
		<input type="file" class="image_file" name="image_file">
    </div>

      <p><b>Publicacion</b></p>
        <textarea name="txtDescription" id="txtDescription"></textarea>

    <button  class="ui basic blue button btnSavePost">Subir Publicacion</button>
    <p class="clearfix"></p>

    
</form>