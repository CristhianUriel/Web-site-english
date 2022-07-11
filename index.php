<?php
    include "db/db.php";
    $conexion = conexion();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <form action="controller/autenticate.php" method="post">
        <div class="text-dark ">
            <br>
            <header class="  text-dark">
                <div class="container"> 
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <form role="form">
                                <section class="form-group">
                                    <img src="images/English.png" alt="" class="img-thumbnail" >
                                     <?php
                                          if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
                                            {
                                                echo "<div style='color:red'>Usuario o contraseña invalido </div>";
                                            }
                                      ?>
                                    <label for="usuario">Correo electrónico:</label>
                                    <input type="email" class="form-control" id="email" name="usuario" placeholder="Correo electronico" required="required">
                                </section>
                                <section class="form-group">
                                    <label for="pwd">Contraseña:</label>
                                    <input type="password" class="form-control" id="pwd" name="password" placeholder="Contraseña" required="required">
                                </section>
                                <p><h5 class="text-dark">¿No tienes cuenta? <a href="registro.php" class="text-primary">Resgístrate</h5></a></p>
                                <button type="submit" class="btn btn-success center-block" >Iniciar sesión</button>  
                            </form>       
                        </div>
                    </div>
            </header>
        </div>
    </form>

      
    <!-- Javascript -->          
     <script type="text/javascript" src="assets/plugins/jquery-3.4.1.min.js"></script>
     <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>     
     <script type="text/javascript" src="assets/js/main.js"></script>     
</body>
</html>