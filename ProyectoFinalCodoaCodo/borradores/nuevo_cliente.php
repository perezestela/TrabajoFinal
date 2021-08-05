<?php include 'menu.php';?>    

<div class='tablainicio'>
    
    <form action="guardar_tutor.php" method="POST">
        <div class="form-row">
            <div class="form-group col-12">
                <label for="inputName">nombre</label>
                <input type="text" name="nombre" class="form-control" id="inputName" placeholder="nombre" required>
             </div>
            <div class="form-group col-12">
                <label for="inputName">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="inputSecondName" placeholder="nombre">
            </div>

            <div class="form-group col-md-6">
                <label for="inputEmail4">D.N.I</label>
                <input type="text" name="dni"class="form-control" id="inputEmail4">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Direccion</label>
            <input type="text" name="direccion" class="form-control" id="inputDireccion" placeholder="1234 Main St">
        </div>
   
        <button type="submit" class="btn btn-primary">Enviar</button>
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