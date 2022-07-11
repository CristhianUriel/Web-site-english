<?php
include 'db/db.php';
?>

<!DOCTYPE html>
<html lang="en">
    <body>


    <center>
        <form action="controller/subirimagen.php" method="post" enctype="multipart/form-data">
            <?php
            if (isset($_GET["fallo"]) && $_GET["fallo"] == 'true') {
                echo "<div style='color:red'>Se ha alcanzado el número maximo de 9 registros para este tema </div>";
            }
            ?>
            <br><br>Nombre<br><br>
            <input type="text" name="res" required/></br><br><!-- comment -->
            Seleccionar imagen:</br><br>
            <input type="file" name="image" required/></br><br>
            categoria
            <select name="categoria" required>
                <option value="1"> Occupation</option>
                <option value="2"> About people</option>
                <option value="3">Place and how to get there</option>
                <option value="4"> Family</option>
            </select>
            <input type="submit" name="submit" value="UPLOAD"/>
        </form>
    </center>

</body>
</html>