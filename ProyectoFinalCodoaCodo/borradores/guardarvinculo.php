<?php

require 'conexion.php';

echo '<pre>';

var_dump($_POST);

echo '</pre>';

$id_usuario = $_POST['hidden1'];
//echo 'Aqui va el: '. $nombre;

echo 'nombre de id tomado del form: '. $id_usuario.'<br>';

$insertar = "INSERT INTO vinculo_alumno_tutor (alumno_id,tutor_id)
VALUES ('$id_usuario','3')";

$insert=mysqli_query($conectar, $insertar);

if($insert){
   
    echo"se guardo";

}else{
    echo 'Error: '. mysqli_errno($conectar);
}




?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Sistema Orquesta</title>
  </head>
  <body>
    <div class="container">

    <div class="row">
        <div class="col ">
            <h1>Sistema Orquestas</h1>
           
        </div>
    </div>

        
    </div class="row">
    <div class="col">
    <a href="index.php"><button type="button" class="btn btn-primary btn-lg btn-block">Inicio</button></a>
    </div> 

</div class="row center">
<div class="col center">
    <?php
    
    $insert=mysqli_query($conectar, $insertar);

if($insert){
   

    ?>
    <div class="alert alert-success" role="alert">
  Datos ingresados Correctamente
</div>
<?php


}else{
    echo 'Error: '. mysqli_errno($conectar);
}


    ?>
    </div>
    </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>