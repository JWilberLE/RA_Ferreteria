<?php

//declaramos la variable el cual llamara a nuestra bd $conexion y la igualamos a mysqli_connect
$conexion=mysqli_connect("localhost","root", "","ferreteria_ra") or die("conexion erronea");
// dentro de () va nuestro servidor, el usuario, contraseña y nombre de la bd or die es si en caso que falle la conexion, marque error

?>
<!-- fin del php -->