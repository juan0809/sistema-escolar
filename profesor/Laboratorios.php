<?php
require_once 'includes/header.php';
require_once 'includes/modals/modal_laboratorio.php';
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>Nuevo Laboratorio</h1>

            <button class="btn btn-success" type="button" onclick="location.href='Lista laboratorios.php'">
                << Volver Atras</button>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">lista de laboratorios</a></li>
        </ul>
    </div>

    <head>
        <!-- Cargar el CSS de Boostrap-->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://jmblog.github.io/color-themes-for-highlightjs/css/themes/hemisu-light.css">
    </head>

    <body>
        <main role="main" class="container my-auto">
            <div class="row">
                <div class="col-10">
                    <form name="FormData" method="post" action="" class="wrapper">

                        <div class="form-group col-6">
                            <b> <label for="nombre">Título :</label></b>
                            <input id="titulo" name="titulo" class="form-control" type="text" placeholder="Título">
                        </div>

                        <div class="form-group col-6">
                            <b> <label for="correo">Imagen :</label></b>
                            <input type="file" class="form-control" name="file" id="file">
                        </div>

                        <div class="form-group col-12">
                        
                        <b> <label for="correo">Descripcion:</label></b>
                        <textarea name="Descripcion" class="form-control" id="Descripcion" rows="4"></textarea>
                        </div>
                        <div class="form-group col-12">
                            <b> <label for="correo">Objetivos:</label></b>
                            <textarea name="Objetivos" class="form-control" id="Objetivos" rows="4"></textarea>
                        </div>

                    </form>
                </div>
            </div>
        </main>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            //Add Input Fields
            $(document).ready(function() {
                var max_fields = 10; //Maximum allowed input fields 
                var wrapper = $(".wrapper"); //Input fields wrapper
                var x = 1; //Initial input field is set to 1
                document.addEventListener('DOMContentLoaded', () => {
                    hljs.highlightBlock(codigoJS);
                    const codigoJS = document.querySelector('.codigo');
                });
                //When user click on add input button
                $("#btn_titulo").click(function(e) {
                    if (x < max_fields) {
                        x++; //input field increment
                        $(wrapper).append('<div class="form-group col-6"><b><label for="nombre">Título Tarea:</label></b><br/><input class="form-control" type="text" name="input_array_name[]" cols="40" placeholder="Agregue Título" /> <a href="javascript:void(0);" class="remove_field">Remove</a></div>');
                    }
                });

                $("#btn_descripcion").click(function(e) {
                    if (x < max_fields) {
                        x++; //input field increment
                        $(wrapper).append('<div class="form-group col-12"><b> <label for="correo">Descripción :</label></b><br/><textarea class="form-control" name="input_array_names[]" rows="4" cols="78" placeholder="Agregue la descripción" /> <a href="javascript:void(0);" class="remove_field">Remove</a></div>');
                    }
                });

                $("#btn_codigo").click(function(e) {
                    if (x < max_fields) {
                        x++; //input field increment
                        //add input field
                        $(wrapper).append('<div class="form-group col-12"><b><label for="edad">Codigo :</label></b><br/><textarea spellcheck="false" oninput="update(this.value); sync_scroll(this);" onscroll="sync_scroll(this);" onkeydown="check_tab(this, event);" class="codigo form-control" name="input_array_names[]" rows="4" cols="78" placeholder="Agregue la código" /> <a href="javascript:void(0);" class="remove_field">Remove</a></div>');
                    }
                });

                $("#btn_codigou").click(function(e) {
                    if (x < max_fields) {
                        x++; //input field increment
                        //add input field
                        $(wrapper).append('<div class="form-group col-12"><b><label for="edad">Codigo Unitario :</label></b><br/><textarea class="form-control" name="input_array_names[]" rows="4" cols="78" placeholder="Agregue el código U" /> <a href="javascript:void(0);" class="remove_field">Remove</a></div>');
                    }
                });

                $("#btn_imagen").click(function(e) {
                    if (x < max_fields) {
                        x++; //input field increment
                        //add input field
                        $(wrapper).append('<div class="form-group col-6"><b> <label for="correo">Imagen :</label></b><input type="file" class="form-control" name="file" id="file"><a href="javascript:void(0);" class="remove_field">Remove</a></div>');
                    }
                });

                //when user click on remove button
                $(wrapper).on("click", ".remove_field", function(e) {
                    e.preventDefault();
                    $(this).parent('div').remove(); //remove inout field
                    x--; //inout field decrement
                })
            });
        </script>
        <button id="btn_titulo" class="btn btn-success ">Agregar Titulo</button>
        <button id="btn_descripcion" class="btn btn-info ">Agregar Descripcion</button>
        <button id="btn_codigo" class="btn btn-warning ">Agregar codigo</button>
        <button id="btn_codigou" class="btn btn-success ">Agregar Codigo U</button>
        <button id="btn_imagen" class="btn btn-info ">Agregar Imagen</button>
        <button class="btn btn-danger icon-btn" type="submit">Guardar</button>
    </body>
</main>

<?php
require_once 'includes/footer.php';
?>