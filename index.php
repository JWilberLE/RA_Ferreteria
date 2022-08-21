<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario   </title>
</head>

<body>
    <!-- se mada a llamar el encabezado de pagina -->
    <?php
    include("encabezado.php");
    ?>

    <!-- El buscador de productos -->
        <div class="container shadow rounded mt-2 bg-encabezado">
          <nav class="navbar">
            <form class="container-fluid" method="GET" action="#">
              <div class="input-group">
                <span class="input-group-text" id="basic-addon">Buscar Producto</span>
                <input type="search" class="form-control" name="busqueda" placeholder="Buscar Producto" aria-label="Username" aria-describedby="basic-addon1">
                <button class="btn btn-outline-info" type="submit" name="enviar">Buscar</button>
              </div>
            </form>
          </nav>
        </div>
    <section>
              <!-- Creamos un contenedor y una tabla para nuestros productos de inventariado -->
        <div class="container table-responsive bg-light shadow rounded mt-3 mb-3 bg-encabezado">
          <div class="col-lg-12">
            <h3 class="text-center text-muted mt-2"> Inventario de Productos</h3>
            <table class="table table-bordered table-striped text-center"> <!-- creamos la tabla  -->
              <thead class="table-dark">
                  <a class='btn btn-info mb-2' href='registrar.php'> Agregar </a>
                  <tr>
                  <th>ID</th>
                  <th>Código</th>
                  <th>Nombre</th>
                  <th>marca</th>
                  <th>stock</th>
                  <th>Precio Compra</th>
                  <th>Precio Venta</th>
                  <th>Fecha de registro</th>
                  <th>Opciones</th>
                  </tr>
              </thead>
                  <!-- Llmamos a la BD mediante php con un include -->
                <?php

                  include("conexionbd.php");

                  // creamos una condicion con if, para la busqueda de los productos por nombre, id, codigo, marca y stock

                  if(isset($_GET["busqueda"])){
                  $busqueda=$_GET["busqueda"];
                  $consulta="SELECT * FROM ferrproductos where nombre like '%$busqueda%' OR id like '%$busqueda%' OR codproducto like '%$busqueda%' OR marca like '%$busqueda%' OR stock like '%$busqueda%'";
                  }
                  else{
                      $consulta="SELECT * FROM ferrproductos"; // consulta a la BD por los productos de la tabla
                  }

                  $resultado=mysqli_query($conexion,$consulta); // llamos los datos de la BD mediante el else y lo imprimimos con las variables $fila
                  if(mysqli_num_rows($resultado)>0)
                    {
                      while($fila=mysqli_fetch_assoc($resultado)) // creamos un ciclo con while para que se actualize losdatos de la tabla 
                        {
                        echo "<tr>"; // se crea una tabla mediante php responsiva con la BD que se actualiza cada que se registra un nuevo producto
                        echo "<td>".$fila['id']."</td>";
                        echo "<td>".$fila['codproducto']."</td>";
                        echo "<td>".$fila['nombre']."</td>";
                        echo "<td>".$fila['marca']."</td>";
                        echo "<td>".$fila['stock']."</td>";
                        echo "<td>".$fila['precio_compra']."</td>";
                        echo "<td>".$fila['precio_venta']."</td>";
                        echo "<td>".$fila['fecha_registro']."</td>";
                        echo "<td> <a class='btn btn-danger' href='eliminar.php?id=".$fila['id']."'> Eliminar </a> <a class='btn btn-info' href='actualizarproducto.php?codproducto=".$fila['codproducto']."&nombre=".$fila['nombre']."&marca=".$fila['marca']."&stock=".$fila['stock']."&precio_compra=".$fila['precio_compra']."&precio_venta=".$fila['precio_venta']."&fecha_registro=".$fila['fecha_registro']."'> Modificar </a></td>"; // opcion para modificar un producto, llevando sus caracteristicas al la pagina donde se actualizara algun dato
                        echo "</tr>";
                          }
                    } else {
                        echo "Sin resultados"; // si la BD esta vacia nos dara el mensaje de resultado
                    }
                ?>
            </table> <!-- cerramos la tabla creada -->
        
      </section>
    
      <?php // llamamos con php mediante el include al pie de pagina
      include("piedepagina.php")
      ?>

</body>
</html>
