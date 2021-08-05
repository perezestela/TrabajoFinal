<?php

require 'conexion.php';

//echo 'Aqui es el Dump de post <br>';
//var_dump($_POST);
//echo 'termina el Dump <br>';

$id= $_POST['id_automotor'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$dni= $_POST['dni'];
$nivel= $_POST['nivel'];
$email= $_POST['email'];
$direccion= $_POST['direccion'];

$password= $_POST['password'];

echo 'Aqui va el: '. $nombre;

$actua = "UPDATE  usuarios2020 SET nombre='$nombre', apellido='apellido', dni=5, nivel=2, email='prueba@gmail', password='1111', direccion='siempre125', ciudad='viva', provincia='bs', cp=2 WHERE id_usuario ='$id'";


$insert=mysqli_query($conectar, $actua);

if($insert){
    echo 'Registro Modificado';
}else{
    echo 'Error: '. mysqli_errno($conectar);
}

?>

<a class="btn-primary" href="index.php">Inicio</a>