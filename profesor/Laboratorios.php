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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"/>
<div class="form-inline" >
  <div id="field_wrapper" class="col-lg-8 col-12">
    <div>
      <input type="text" class="form-control mr-2 mb-2" name="field_name[]"
       placeholder="Correo"/><a href="javascript:void(0);" class="btn btn-info" id="add_button"><i class="fas fa-plus"></i></a>
       <script>
        $(document).ready(function(){
    var maxField = 10; 
    var addButton = $('#add_button');
    var wrapper = $('#field_wrapper'); 
    var fieldHTML = '<div><input type="text" class="form-control mr-2 mb-2" name="field_name[]" placeholder="Correo"/><a href="javascript:void(0);" class="btn btn-danger" id="remove_button"><i class="fas fa-minus"></i></a></div>';
    var x = 1; 
    $(addButton).click(function(){ 
        if(x < maxField){ 
            x++; 
            $(wrapper).append(fieldHTML); 
        }
    });
    $(wrapper).on('click', '#remove_button', function(e){ 
        e.preventDefault();
        $(this).parent('div').remove(); 
        x--;
    });
});
       </script>
    </div>
   </div>
</div>
    
    <?php
    
    # La lista de nombres; por defecto vacía
    $nombres = [];
    # Si hay nombres enviados por el formulario; entonces
    # la lista es el formulario.
    # Cada que lo envíen, se agrega un elemento a la lista
    if (isset($_POST["nombres"])) {
        $nombres = $_POST["nombres"];
    }
    if (isset($_POST["guardar"])) {
        # Quieren guardar; no quieren agregar campos
        echo "OK se guarda lo siguiente:<br>";
        print_r($nombres);
        exit;
    }
    ?>
    <form method="post" action="Laboratorios.php">
        <!--Comienza el ciclo que dibuja los campos dinámicos-->
        <?php foreach ($nombres as $nombre) { ?>
          <div class="col-lg-5 col-12">
             <h3 class="title"><label for="control-label">Titulo de la tarea </label> </h3>
            <input value="<?php echo $nombre ?>" type="text" name="nombres[]">
            </div>
            <br><br>
        <?php } ?>

        
        <!--Termina el ciclo que dibuja los campos dinámicos-->

        <!--Fuera de la lista tenemos siempre este campo, es el primero-->
        <div class="col-lg-5 col-12">
        <h3 class="title"><label for="control-label">Titulo de la tarea </label> </h3>
        <input autocomplete="off" autofocus value="" type="text" name="nombres[]">
        <br><br>
        </div>
        <button  class="btn btn-success" name="agregar" type="submit">Agregar titulo</button>
        <button  class="btn btn-info " name="area" type="submit">Agregar Descripcion</button>
        <button  class="btn btn-warning " name="area" type="submit">Agregar codigo</button>
        <button  class="btn btn-success" name="agregar" type="submit">Agregar Codigo U</button>
        <button  class="btn btn-info " name="area" type="submit">Agregar Imagen</button>
        <button  class="btn btn-danger icon-btn" name="guardar" type="submit">Guardar</button>
        <button  class="btn btn-warning " name="area" type="submit">Actualizar</button>
    </form>
</body>

    </main>

<?php
    require_once 'includes/footer.php';
?>

