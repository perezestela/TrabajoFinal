<?php

include 'conexion.php';

$consulta = "SELECT * FROM automotor";

$listado=mysqli_query($conectar, $consulta);

?>


<?php include 'menu.php';?>

    <br>
    <div class="rotulo">
        <h2>AUTOMOTORES</h2> 
    </div>
    <br>
    <div class="tablainicio">
              
        <a href="" class="btn btn-success" role="button" data-bs-toggle="button">INGRESAR UN NUEVO AUTOMOTOR</a>
        <br>
        <div class="row table-responsive">
            <table class="table table-responsive">
            <?php include 'conexion.php';?>
             <tr>
                <th>
                ID
                </th>
                <th>
                Foto
                </th> 
                <th>
                Matrícula
                </th> 
                <th>
                Marca
                </th> 
                <th>
                Tipo
                </th> 
                <th>
                Modelo
                </th> 
                <th>
                Equipamiento
                </th>
                <th>
                Consultar
                </th> 
                <th>
                Editar
                </th> 
                <th>
                Eliminar
                </th> 
                        
                </tr>
                <?php
                while($tabla = mysqli_fetch_array($listado))
                {?>
                
                    <tr>
                    <td><?php echo $tabla['id_automotor'];?></td>
                    <td><?php echo $tabla['imagen'];?></td>
                    <td><?php echo $tabla['matricula'];?></td>
                    <td><?php echo $tabla['marca'];?></td>
                    <td><?php echo $tabla['tipo'];?></td>
                    <td><?php echo $tabla['modelo'];?></td>
                    <td><?php echo $tabla['equipamiento'];?></td>
                    <td><?php echo $tabla['precio_ofrecido'];?></td>
                    <td><a href="modificar.php?id=<?php echo $tabla['id_automotor'];?>"><i class="fas fa-pencil-alt"></i></a></td>
                    <td><a href="vincular.php?id=<?php echo $tabla['id_automotor'];?>"><i class="fas fa-address-card"></i></a></td>
                    <td><a href="eliminar.php?id=<?php echo $tabla['id_automotor'];?>"><i class="fas fa-trash-alt"></i></a></td>
                   
                    
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