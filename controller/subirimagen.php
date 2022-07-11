<?php

include '../db/db.php';
if (isset($_POST["submit"]) && isset($_POST["res"]) && isset($_POST["categoria"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        $res = stripslashes($_POST["res"]);
        $res = mysqli_real_escape_string(conexion(), $res);
        $categoria = $_POST['categoria'];
        $query1 = "SELECT * FROM actividades WHERE id_categoria ='$categoria'";
        $resultado = mysqli_query(conexion(), $query1) or die(mysql_error());
        $rows = mysqli_num_rows($resultado);
        if ($rows == 9) {
            header("location:../insertar.php?fallo=true");
        } else {
            $query = "INSERT into actividades (imagen,respuesta,id_categoria) VALUES ('$imgContent','$res','$categoria')";
            $insert = mysqli_query(conexion(), $query);
            if ($insert) {
                header("location:../datatables.php");
            } else {
                echo "File upload failed, please try again+.";
            }
        }
    } else {
        echo "Please select an image file to upload.";
    }
}
?>

