<?php

require 'conexion.php';

$id = $_GET['id'];

$sql = "SELECT * FROM automotor WHERE id_automotor= '$id'";

$resultado = mysqli_query($conectar, $sql);

$row = mysqli_fetch_array($resultado);

?>


<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Modificar Automotor</title>
  </head>
  <body>
    <div class="container">

    <div class="row">
        <div class="col ">
            <h1>Automotor</h1>
        </div>
    </div>

    <div class="row">
        <div class="col ">
            <a class="btn-primary" href="nuevo.php">Modificar Registro</a>
        </div>
    </div>

    <form action="actualizar.php" method="POST">
  <div class="form-row">
  <div class="form-group col-3">
    <label for="inputName">Matricula</label>
    <input type="text" name="matricula" value="<?php echo $row['matricula'];?>" class="form-control" id="inputName" placeholder="matricula">
  </div>
  <div class="form-group col-6">
    <label for="inputMarca">Marca</label>
    <input type="text" name="marca" value="<?php echo $row['marca'];?>" class="form-control" id="inputMarca" placeholder="marca">
  </div>

  <div class="form-group col-md-6">
      <label for="inputTipo">Tipo</label>
      <input type="text" name="tipo" value="<?php echo $row['tipo'];?>" class="form-control" id="inputTipo" placeholder="tipo">
  </div>
  <div class="form-group col-md-2">
    <label for="inputModelo">Modelo</label>
    <input type="int" name="modelo" value="<?php echo $row['modelo'];?>" class="form-control" id="inputModelo" placeholder="modelo">
  </div>
  <div class="form-group col-md-12">
    <label for="inputEquip">Equipamiento</label>
    <input type="text" name="equipamiento"  value="<?php echo $row['equipamiento'];?>" class="form-control" id="inputEquip" placeholder="equipamiento">
  </div>
  <div class="form-group col-md-6">
    <label for="inputImagen">Imagen</label>
    <input type="text" name="imagen" value="<?php echo $row['imagen'];?>" class="form-control" id="inputImagen" placeholder="imagen">
  </div>
  <div class="form-group col-md-6">
    <label for="inputOfrecido">Precio_Ofrecido</label>
    <input type="text" name="precio_ofrecido" class="form-control" value="<?php echo $row['precio_ofrecido'];?>" id="inputOfrecido" placeholder="precio_ofrecido">
  </div>

  <input type="hidden" id="id" name="id" value="<?php echo $row['id_automotor'];?>" >
   
  <button type="submit" class="btn btn-primary">Enviar</button>
  <button type="reset" class="btn btn-primary">Cancelar</button>
</form>
    
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