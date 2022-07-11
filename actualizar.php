<?php
include 'db/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<body>
     <?php
        $id=$_REQUEST['id'];
        $mostrar = "SELECT * FROM actividades where id_actividades = $id";
        $resul = mysqli_query(conexion(), $mostrar) or die(mysql_error());    
        $row=$resul ->fetch_assoc();
     ?>
        <center><br><br>
        <form action="controller/update.php?id=<?php echo $row['id_actividades'];?>" method="post" enctype="multipart/form-data">
            Nombre:<br><br>
            <input type="text" name="res" required placeholder="res...." value="<?php echo $row['respuesta'];?>"/></br><br><!-- comment -->
            <img height="80px" src='data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>'><br>
            Seleccionar imagen:</br><br>
            <input type="file" name="image" required/></br><br>
            Categoria:
            <select name="categoria" required>
                <option value="1"> Occupation</option>
                <option value="2"> About people</option>
                <option value="3">Place and how to get there</option>
                <option value="4"> Family</option>
            </select>
            <input type="submit" name="submit" value="UPDATE"/>
        </form>
        </center>

</body>
</html>