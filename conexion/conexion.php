<?php

//Conexión a la base de datos ranking40
//Webhost000

$host = "localhost";
$user = "id19515242_root";
$pass= "RFHINxa1SuT?K#py";
$database = "id19515242_ranking60_database";


$conexion = mysqli_connect("$host", "$user","$pass", "$database");

if (mysqli_connect_errno()){
    echo "falló";
    
}else {
    echo "conectado";

}
/*
if ($conexion->connect_error){
    die('Error de conexión: '. $conexion->connect_error);

}else {
    echo "conectado";
}

if(!$conexion){
   die("Error de conexión: " . mysqli_connect_error());
}*/
?>