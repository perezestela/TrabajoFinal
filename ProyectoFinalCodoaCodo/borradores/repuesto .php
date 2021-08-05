<!-- va en el index.php al final -->
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