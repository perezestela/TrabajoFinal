<?php

$conectar = mysqli_connect("localhost","root","","id17081747_concesionaria_havanette");

if(mysqli_connect_errno()){

    echo 'Error de conexion Fijaaaa';
    header("location: automotor.php");
}else{
    echo 'se conecto correctamente <br>';
}

/*
$query=mysqli_query($conectar, "SELECT * FROM automotor");

var_dump($query);

$listadoArrayAsociativo = mysqli_fetch_assoc($query);


echo '<pre>';
var_dump($listadoArrayAsociativo);
echo '</pre>';

/*
while($notas = mysqli_fetch_assoc($query)){

    echo $notas['nombre'].'<br>';
}
*/


/*
$insertar = "INSERT INTO usuarios2020 (id_usuario,nombre,apellido,dni,nivel,email,password,direccion,ciudad,provincia,cp)
VALUES (null,'nombre','apellido',312569,1,'email','password','direccion','ciudad','provincia','1437')";

$insertar2 = "INSERT INTO usuarios2020 VALUES (null,'nombre','apellido',312569,1,'email','password','direccion','ciudad','provincia','1437')";
/*INSERT INTO usuario (numero_trabajador,dni,nombre,profesion,cargo,direccion,telefono,email,login,clave)
		VALUES ('$numero_trabajador','$dni','$nombre','$profesion','$cargo','$direccion','$telefono','$email','$login','$clave')";

*/

/*
$insert=mysqli_query($conectar, $insertar);
$insert2=mysqli_query($conectar, $insertar2);
if($insert){
    echo 'datos ingresados correctamente <br>';
}else{
    echo 'Error: '. mysqli_errno($conectar);
}

if($insert2){
    echo 'datos ingresados correctamente 2 <br>';
}else{
    echo 'Error: '. mysqli_errno($conectar);
}
*/

?>