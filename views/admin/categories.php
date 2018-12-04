
<div class="ui form new_post_container">

<h1>Categorias</h1>
<p><b>Nombre de la Categoria</b></p>
<div class="ui input">
    <input type="texto" class="txtNameCategory"  placeholder="Nombre de la Categoria">
</div>


<button  class="ui basic blue button btnSaveCategory">Guardar Categoria</button>
<p class="clearfix"></p>

<h3>Categorias Existentes</h3>
<table class="ui single line table tblCategories">
    <thead>
        <tr>
            <th>Nombre de la Categoria</th>
            <th>Accion</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($categories as $category): ?>
            <tr>
                <td><?php echo $category['category'] ?></td>
                <td><i class="fa fa-remove btnRemoveCategory" data-categoryId="<?php echo $category['category_id']; ?>" style="color: #ff2a00; cursor: ponter;"title="Eliminar Categoria"></i></td>

            </tr>
        <?php endforeach; ?>


    </tbody>
</table>
</div>