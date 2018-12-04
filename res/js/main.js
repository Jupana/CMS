$(document).ready(function(){
    var root="http://localhost/PROIECTO_CMS/";

    //Log In

     $(".btnUserLogIn").on("click",function(){
        var email = $(".txtEmailLoginUser").val().trim(),
          pass = $(".txtPassLoginUser").val().trim();

        $.ajax({
            type: "POST",
            url: root + "res/php/user_actions/login.php",
            data: {
                email: email,
                pass: pass
            },
            success: function(data){
               
              if(data == "true"){
                window.location.href = "http://localhost/PROIECTO_CMS/";

              }else {
                  alert("Sus credenciales no coinciden,por favor intente de nuevo.");
                }
            }    
        });
    
    });
 
     $(".btnRegisterUser").on("click",function(){
        var name = $(".txtNameRegister").val().trim(),
            last_name   = $(".txtLastNameRegister").val().trim(),
            username    = $(".txtUsernameRegister").val().trim(),
            email       = $(".txtEmailRegister").val().trim(),
            pass        = $(".txtPassRegister").val().trim();
            self        =this;

        if(name !== "" && last_name !== "" && username !== "" && email !== "" && pass !== "" ){
            //Enviar los datos con Ajax
            $.ajax({
                type: "POST",
                url: root + "res/php/user_actions/register.php",
                data: {
                    name: name,
                    last_name: last_name,
                    username: username,
                    email: email,
                    pass: pass

                },
                beforeSend: function(){
                    $(self).addClass("loading");
                },
                success: function(data){
                    $(self).removeClass("loading");

                    if(data>0){
                        $(".txtNameRegister,.txtLastNameRegister,.txtEmailRegister,.txtPassRegister").val("");
                        alert("Registrado,ahora puede iniciar sesion");

                    }else{
                        alert("Error..");
                    }
                },
                error: function(){
                    $(self).removeClass("loading");
                    alert("Error");

                }

            });
        }else{
            alert("Llene todos los campos.");
        }
    });

     $(".btnMarkFavorite").on("click", function(){
        var post_id = $(this).attr("data-postId");

        $(this).remove();

        $.ajax({
            type:"POST",
            url: root + "res/php/user_actions/favorite.php",
            data:{
                post_id: post_id
            },
            success: function(data){

                if(data == "true"){
                    alert("Articulo agregado a favoritos")
                }else{
                    alert("Error..");
                }

            }

        });


    });

      $(".btnDeleteFavorite").on("click", function(){

        var favorite_id = $(this).attr("data-favoriteId");
        console.log(favorite_id);

        $.ajax({
            type:"POST",
            url: root + "res/php/user_actions/delete_favorite.php",
            data:{
                favorite_id: favorite_id
            },
            success: function(data){
               
                if(data == "true"){
                    alert("Articulo eliminado")
                }else{
                    alert(data);
                }

            }

        });
    });
   
});