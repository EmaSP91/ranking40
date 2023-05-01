<?php

//Conexión a la base de datos
//Se guardan los datos ingresados en la tabla "Votacion" de nuestra base de datos 

include "conexion/conexion.php";

header("location: votar.php");

$nombre =  $_POST['nombre'];
$cancion1 =  $_POST['cancion1'];
$voto1 =  $_POST['voto1'];
$cancion2 =  $_POST['cancion2'];
$voto2 =  $_POST['voto2'];

$votar = "INSERT INTO votacion(id_usuario, Nombre, cancion_1, voto_1, cancion_2, voto_2) 
VALUES (null, '$nombre', '$cancion1', '$voto1', '$cancion2', '$voto2')" ;



$vote = mysqli_query($conexion, $votar) or die (mysqli_error($conexion));

?>