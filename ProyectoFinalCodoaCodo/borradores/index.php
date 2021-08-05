<?php

include 'conexion.php';

$consulta = "SELECT * FROM usuarios2020";

$listado=mysqli_query($conectar, $consulta);



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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Sistema Orquesta</title>
  </head>
  <body>
    <div class="container">

    <div class="row">
        <div class="col ">
            <h1>Sistema Orquestas </h1>
            <ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">Index</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="nuevo.php">Nuevo Registro</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="nuevo_tutor.php">Nuevo Tutor</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="listado_tutores.php">Listado Tutores</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="vincular.php">Vinculacion A y T</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="alumnos_tutores.php">Vinculo A y T</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="asistencia.php">Asistencia</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="comentarios.php" tabindex="-1" aria-disabled="true">Informes</a>
  </li>
</ul>
        </div>
    </div>

    

    <div class="row table-responsive">
        <table class="table table-responsive">
            
            <tr>
      
                <th>
                ID
                </th> 
                <th>
                Nombre
                </th> 
                <th>
                Apellido
                </th> 
                <th>
                DNI
                </th> 
                <th>
                Direccion
                </th> 
                <th>
                editar
                </th> 
                <th>
                Agregar Vinculo
                </th> 
                <th>
                eliminar
                </th> 
               

           
            </tr>

            
            <?php

while($tabla = mysqli_fetch_array($listado))
{?>

    <tr>
    <td><?php echo $tabla['id_usuario'];?></td>
    <td><?php echo $tabla['nombre'];?></td>
    <td><?php echo $tabla['dni'];?></td>
    <td><?php echo $tabla['apellido'];?></td>
    <td><?php echo $tabla['email'];?></td>
    <td><a href="modificar.php?id=<?php echo $tabla['id_usuario'];?>"><i class="fas fa-pencil-alt"></i></a></td>
    <td><a href="vincular.php?id=<?php echo $tabla['id_usuario'];?>"><i class="fas fa-address-card"></i></a></td>
    <td><a href="eliminar.php?id=<?php echo $tabla['id_usuario'];?>"><i class="fas fa-trash-alt"></i></a></td>
   
    
    </tr>
<?php } ?>

     
   
        </table>
        
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