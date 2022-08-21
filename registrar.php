<!DOCTYPE html>
<html lang="es'MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferreteria™</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <!-- Encabezado de pagina mandado a llamar mediante un include por php -->
<?php
include("encabezado.php");
?>

<!-- Formulario para registrar los priductos -->

<section class="container bg-light shadow rounded mt-4 bg-encabezado">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block col-md-5 col-lg-5 col-lg-6 mt-5">
                    <h2 class="text-center mt-2">Ferretería Los Ing'S</h2>
                    <div id="centrado">
                        <img id="centrado" src="img/logoferre.png" width="400px">
                    </div>
                </div> <!-- cierre del primer div que es el nombre la empresa con el logo -->
                <div class="col-lg-5"> <!-- nombre del titulo del formulario -->
                    <h3 class="text-center text mt-2">Registro de Producto</h3>
                    <form method="POST" action="registro.php">
                        <div class="row mb-3"> <!-- inicia las filas de los productos a registrar -->
                            <label class="col-sm-10 ">Codigo del Producto</label>
                            <div class="col-sm-10">
                                <input type="number" name="codproducto" required class="form-control" placeholder="Escribe el código del producto" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Nombre del Producto</label>
                            <div class="col-sm-10">
                                <input type="text" name="nombre" required class="form-control" placeholder="Introduce el nombre del producto" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Marca</label>
                            <div class="col-sm-10">
                                <input type="text" name="marca" required class="form-control" placeholder="Introduce la marca del producto" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Stock</label>
                            <div class="col-sm-10">
                                <input type="number" name="stock"required class="form-control" placeholder="Introduce la cantidad de calzado">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Precio Compra</label>
                            <div class="col-sm-10">
                                <input type="number" step="any" name="precio_compra" required class="form-control" placeholder="Introduce el precio del calzado" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Precio Venta</label>
                            <div class="col-sm-10">
                                <input type="number" step="any" name="precio_venta" required class="form-control" placeholder="Introduce el precio del producto" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Fecha de registro</label>
                            <div class="col-sm-10">
                                <input type="date" name="fecha" required class="form-control">
                            </div>
                        </div> <!-- cierra las filas de nuestro formulario -->

                        <!-- creamos los botones dentro de una divivion para agregar el producto o cancelar -->
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-info mb-3">Registrar</button>
                            <a type="button" class="btn btn-info" href="index.php">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div> <!-- cierre de la divicion del contenedor principal del formulario -->
</section>

<!-- llamamos nuesto pie de pagina medainte un include con php -->
<?php
include('piedepagina.php')
?>

</body>
</html>