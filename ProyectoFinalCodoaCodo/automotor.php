
<?php

include 'includes/header.php';

include 'conexion.php';
?>

<br>
<br>
<br>
<br>

<?php
$consulta = "SELECT * FROM automotor";

$listado=mysqli_query($conectar, $consulta);

?>
<?php
    while($tabla = mysqli_fetch_array($listado)){
?>


<!--Con bootstrap uso tarjetas-->
<div class='container'>

  <div class="card mb-16">
    <div class="row g-0">
      <div class="col-md-5">
        <img src='<?php echo $tabla['imagen'];?>' class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-6">
        <div class="card-body">
          <h5 class="card-title"><?php echo $tabla['marca'];?></h5>
          <p class="card-text"><?php echo $tabla['condicion'];?></p>
          <p class="card-text"><?php echo $tabla['equipamiento'];?></p>
          <p class="card-text"><small class="text-muted"><h3>$<?php echo $tabla['precio_ofrecido'];?></h3></small></p>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<?php } ?>

<?php include 'includes/footer.php'; ?>