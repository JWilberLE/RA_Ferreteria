<!DOCTYPE html>
<html lang="es'MX">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificación de productos</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>
        <?php //parte de encabezado
        include("encabezado.php")
        ?>

<!-- Formulario de registro -->

        <section class="container xl-5 bg-light mt-3 rounded shadow bg-encabezado">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-center text-muted mt-2">Modificacion de Producto</h3>
                    <form method="POST" action="actualizarpro.php">
                        <!--Recibrir las variables para modificar los productos del inventario BD por php-->
                        <?php

                            $nombre=$_GET['nombre'];
                            $codigo=$_GET['codproducto'];
                            $marca=$_GET['marca'];
                            $stock=$_GET['stock'];
                            $preciocompra=$_GET['precio_compra'];
                            $precioventa=$_GET['precio_venta'];
                            $fecha=$_GET['fecha_registro'];

                        ?>
                        <!-- creamos las filas de los campos a editar -->
                        <div class="row mb-3">
                            <label class="col-sm-10">Codigo del producto</label>
                            <div class="col-sm-10">
                                <input type="number" name="codproducto" required class="form-control" readonly value="<?php echo $codigo ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Nombre del Producto</label>
                            <div class="col-sm-10">
                                <input type="text" name="nombre" required class="form-control" value="<?php echo $nombre ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Marca</label>
                            <div class="col-sm-10">
                                <input type="text   " name="marca" required class="form-control" value="<?php echo $marca ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Stock</label>
                            <div class="col-sm-10">
                                <input type="text" name="stock" required class="form-control" value="<?php echo $stock ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Precio Compra</label>
                            <div class="col-sm-10">
                                <input type="number" name="precio_compra" required class="form-control" value="<?php echo $preciocompra ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Precio Venta</label>
                            <div class="col-sm-10">
                                <input type="number" name="precio_venta" required class="form-control" value="<?php echo $precioventa ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Fecha de registro</label>
                            <div class="col-sm-10">
                                <input type="date" name="fecha" required class="form-control" value="<?php echo $fecha ?>">
                            </div>
                        </div>

                        <!-- creamos una division para crear un boton, para efectuar cambios o para cancelar -->
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-info mb-3">Actualizar</button>
                            <a type="button" class="btn btn-info" href="index.php">Cancelar</a>
                        </div>
                    </form>
                </div>
                <!-- agregamos una imagen dentro de una division para darle mas vista -->
                <div class="col-lg-6 d-none d-lg-block col-md-4 col-lg-5 col-lg-6 mt-5"> 
                    <img src="img/logoferre.png" width="450px" height="450px">
                </div>
            </div>
        </section> <!-- cerramos la seccion del formulario para actualizarlo --> 
        
    <?php //parte del pie de pagina
      include("piedepagina.php")
    ?>

    </body>
    
</html>
