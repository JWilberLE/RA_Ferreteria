<?php
ini_set('display_errors', 1);
error_reporting(E_ALL); // en caso de que el servidor falle, es una forma de autoayuda por asi decir

include('conexionbd.php'); // llamamos la conexion de nuestra BD

// declaramos nuestras variables con los campos para registrar
 $nombre=$_POST['nombre'];
 $codigo=$_POST['codproducto'];
 $marca=$_POST['marca'];
 $stock=$_POST['stock'];
 $preciocompra=$_POST['precio_compra'];
 $precioventa=$_POST['precio_venta'];
 $fecha=$_POST['fecha'];

//  hacemos nuestra consulta para rellenar la BD mediante php y la pagina a la BD
$consulta= "INSERT INTO ferrproductos VALUES (id, '$nombre', $codigo, '$marca', $stock, $preciocompra, $precioventa, '$fecha')"; 

//  declaramos la variable para que nos de el resultado en caso contrario error al registar
$resultado=mysqli_query($conexion,$consulta) or die("error de registro");

// si la consulta y el registro es correcto mos redirecciona a la pagina declarada
header("location: index.php");

mysqli_close($conexion); // cerramos la conexion

?> 
<!-- fin del php -->