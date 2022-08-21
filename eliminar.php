<?php

//llamada ala BD
include('conexionbd.php');

//eliminaremos mediante el codigo del producto
$id=$_GET['id'];

//consulta de eliminacion
$consulta="DELETE FROM ferrproductos WHERE id=$id";

// creamos una condicional para cumplir nuestra consulta
if (mysqli_query($conexion,$consulta)) {

    //regresar a la pagina anterior
    header("location: index.php");

// de lo contrario dara un error al tratar de eliminar
} else{
    echo "<br> Error al eliminar pruducto: " . mysqli_error($conexion);
}

mysqli_close($conexion); // fin de la conexion a la BD

?>
<!-- fin del php -->