<?php

include '../db/db.php';

if (isset($_POST["nombre"]) && isset($_POST["apaterno"]) &&
        isset($_POST["amaterno"]) && isset($_POST["email"]) &&
        isset($_POST["password"])) {

    $nombre = stripslashes($_POST["nombre"]);
    $nombre = mysqli_real_escape_string(conexion(), $nombre);
    $apaterno = stripslashes($_POST["apaterno"]);
    $apaterno = mysqli_real_escape_string(conexion(), $apaterno);
    $amaterno = stripslashes($_POST["amaterno"]);
    $amaterno = mysqli_real_escape_string(conexion(), $amaterno);
    $email = stripslashes($_POST["email"]);
    $email = mysqli_real_escape_string(conexion(), $email);
    $password = stripslashes($_POST["password"]);
    $password = mysqli_real_escape_string(conexion(), $password);
    $query = "SELECT * FROM usuario WHERE email='$email'";
    $result = mysqli_query(conexion(), $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if ($rows >= 1) {
        header("location:../registro.php?usuarioExist=true");
    } else {
        $queryregistro = "INSERT into `usuario` (nombre, apaterno,amaterno, email, password,rol_id )
VALUES ('$nombre', '$apaterno','$amaterno', '$email', '$password','1')";
        $result = mysqli_query(conexion(), $queryregistro);
        if ($result) {
            header("location:../registro.php?exito=true");
        }
    }
}
