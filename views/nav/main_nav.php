<div class="ui pointing menu" style="margin-bottom: 0px;">
  <a  href="http://localhost/PROIECTO_CMS/ "  class="item">
    Inicio
   </a>

    <a  href="http://localhost/PROIECTO_CMS/posts "  class="item">
    Publicaciones
    </a>

  <?php if(isset($_SESSION["user"])): ?>
    <a href="http://localhost/PROIECTO_CMS/my-favorites " class="item">
     Mis Publicaciones Favoritas
    </a>
  <?php endif; ?>

  <?php if(!isset($_SESSION["user"])): ?>
  
    <div class="right menu">
      <a href="http://localhost/PROIECTO_CMS/log-in " class="item">
        Iniciar Sesion
      </a>
      <a href="http://localhost/PROIECTO_CMS/register" class="item">
        Registrame
      </a>
    </div> 
    <?php else: ?> 

    <div class="right menu">
        <a href="http://localhost/PROIECTO_CMS/log-out"class="item">
          Salir
        </a>
    </div> 

  <?php endif; ?>
 </div>     

     
  