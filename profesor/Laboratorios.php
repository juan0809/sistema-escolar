<?php
    require_once 'includes/header.php';
    require_once 'includes/modals/modal_laboratorio.php';
?>
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Lista de Laboratorios</h1>
         
          <button class="btn btn-success" type="button" onclick="openModalLa()">Nuevo Laboratorio</button>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">lista de laboratorios</a></li>
        </ul>
      </div>
      <body>
      <!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
        <meta name="description" content="Formulario de login con Bootstrap">
        <meta name="author" content="Parzibyte">
        <title>Enviar formulario AJAX con PHP</title>
        <!-- Cargar el CSS de Boostrap-->
        <link
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
    </head>
    <body>
        <main role="main" class="container my-auto">
            <div class="row">
                <div class="col-lg-5 col-12">
                    <form>
                        <div class="form-group">
                        <b> <label for="nombre">Titulo :</label></b>
                            <input id="titulo" name="titulo"
                                class="form-control" type="text"
                                placeholder="Titulo">
                        </div>
                        <div class="form-group">
                        <b> <label for="correo">Imagen :</label></b>
                            <input type="file" class="form-control" name="file" id="file">
                        </div>
                       
                    </form>
                </div>
                <div class="col-lg-8 col-12">
                <form>
                <div class="form-group">
                         <b><label for="edad">Descripcion :</label></b>
                            <textarea name="descripcion" class="form-control"id="descripcion" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                        <b> <label for="correo">Objetivos:</label></b>
                            <textarea name="Objetivos" class="form-control"id="Objetivos" rows="4"></textarea>
                        </div>
                        </div>
                  </div>
                  </form>
                  </div>
        </main>
        <script src="./script.js"></script>
    </body>
</html>

<form name="FormData" method="post" action="" >
    <div class="wrapper">
    </div>
    </form>  
    <link rel="stylesheet" href="path/to/styles/default.css">
    <script src="path/to/highlight.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script> 
      <script>
        //Add Input Fields
        $(document).ready(function() {
            var max_fields = 10; //Maximum allowed input fields 
            var wrapper    = $(".wrapper"); //Input fields wrapper
            var add_button = $(".add_fields"); //Add button class or ID
            var add_button2 = $(".add_field"); //Add button class or ID
            var add_button3 = $(".codigo"); //Add button class or ID
            var add_button4 = $(".codigou"); //Add button class or ID
            var x = 1; //Initial input field is set to 1
            document.addEventListener('DOMContentLoaded', () => {
            const codigoJS = document.querySelector('.codigo');
            hljs.highlightBlock(codigoJS);
           });
           
          //When user click on add input button
          $(add_button).click(function(e){
                e.preventDefault();
            //Check maximum allowed input fields
                if(x < max_fields){ 
                    x++; //input field increment
               //add input field
                    $(wrapper).append('<div class="col-lg-5 col-12"><form> <div class="form-group"><input type="text" name="input_array_name[]" cols="40" placeholder="Agregue Titulo" /> <a href="javascript:void(0);" class="remove_field">Remove</a></div> </form></div>');
                }
            });

            $(add_button2).click(function(e){
                e.preventDefault();
            //Check maximum allowed input fields
                if(x < max_fields){ 
                    x++; //input field increment
               //add input field
                    $(wrapper).append('<div class="col-lg-28 col-12"><form> <div class="form-group"><textarea name="input_array_names[]" rows="4" cols="78" placeholder="Agregue la descripcion" /> <a href="javascript:void(0);" class="remove_field">Remove</a></div> </form></div>');
                }
            });

            $(add_button3).click(function(e){
                e.preventDefault();
            //Check maximum allowed input fields
                if(x < max_fields){ 
                    x++; //input field increment
               //add input field
                    $(wrapper).append('<div class="col-lg-28 col-12"><form> <div class="form-group"><textarea  class="codigo" name="input_array_names[]" rows="4" cols="78" placeholder="Agregue la descripcion" /> <a href="javascript:void(0);" class="remove_field">Remove</a></div> </form></div>');
                }
            });

            $(add_button4).click(function(e){
                e.preventDefault();
            //Check maximum allowed input fields
                if(x < max_fields){ 
                    x++; //input field increment
               //add input field
                    $(wrapper).append('<div class="col-lg-28 col-12"><form> <div class="form-group"><textarea name="input_array_names[]" rows="4" cols="78" placeholder="Agregue la descripcion" /> <a href="javascript:void(0);" class="remove_field">Remove</a></div> </form></div>');
                }
            });
          
            //when user click on remove button
            $(wrapper).on("click",".remove_field", function(e){ 
                e.preventDefault();
            $(this).parent('div').remove(); //remove inout field
            x--; //inout field decrement
            })
        });
        </script>
    </form>  
         <button  class="btn btn-success add_fields" name="agregar" type="submit">Agregar Titulo</button>
        <button  class="btn btn-info add_field">Agregar Descripcion</button>
        <button  class="btn btn-warning codigo" name="area" type="submit">Agregar codigo</button>
        <button  class="btn btn-success codigou" name="agregar" type="submit">Agregar Codigo U</button>
        <button  class="btn btn-info " name="area" type="submit">Agregar Imagen</button>
        <button  class="btn btn-danger icon-btn" name="guardar" type="submit">Guardar</button>
        <button  class="btn btn-warning " name="area" type="submit">Actualizar</button>
    </form>
</body>

    </main>

<?php
    require_once 'includes/footer.php';
?>

