<?php
include '../db/db.php';
session_start();
if (isset($_POST["usuario"]) && isset($_POST["password"])) {
    $username = stripslashes($_POST["usuario"]);
    $username = mysqli_real_escape_string(conexion(), $username);
    $password = stripslashes($_POST["password"]);
    $password = mysqli_real_escape_string(conexion(), $password);
    $query = "SELECT * FROM usuario WHERE email='$username' AND password='$password'";
    $rol = 'rol_id';
    $result = mysqli_query(conexion(), $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    $rows2 = $result->fetch_assoc();
    if ($rows == 1) {
      if( $rows2['email']==$username && $rows2['rol_id']== 2 ){
          $_SESSION['usuario'] = $username;
          header("Location:../datatables.php");
      }else{
        $_SESSION['usuario'] = $username;
        header("Location: ../pagina.php");
      }
    }else{
        header("location:../index.php?fallo=true");
    }
} else {
    header("location:../index.php?fallo=true");
}
?>



