<?php

//recibir las variables del formulario para actualizar actualizar

$nombre=$_POST['nombre'];
$codigo=$_POST['codproducto'];
$marca=$_POST['marca'];                            
$stock=$_POST['stock'];
$preciocompra=$_POST['precio_compra'];
$precioventa=$_POST['precio_venta'];
$fecha=$_POST['fecha'];

//llamar al archivo conexión a nuestra BD
include("conexionbd.php");

// declaramos una variable y hacemos la consulta para actualizar nuestros productos cuando el id sea =
$sql = "UPDATE ferrproductos SET nombre='$nombre', codproducto=$codigo, marca='$marca',precio_compra=$preciocompra, precio_venta=$precioventa, stock=$stock WHERE codproducto=$codigo";

// leemos nuestra consulta
echo "consulta: ".$sql;

// creamos una condicional con IF 
if (mysqli_query($conexion,$sql)) {
  header("Location: index.php");
} else {
  echo "Error al modificar un campo: " . mysqli_error($conexion); // si la consulta esta mal, nos dara error al modificar el campo
}

mysqli_close($conexion); //cerramos conexion

?>
<!-- fin del php -->