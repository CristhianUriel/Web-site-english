<?php
include 'db/db.php';
$unidad = $_GET['unidad'];
if (isset($_REQUEST['correctas']) && isset($_REQUEST['incorrectas'])) {
    $aciertos = $_REQUEST['correctas'];
    $errores = $_REQUEST['incorrectas'];
} else {
    $aciertos = 0;
    $errores = 0;
}
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="shortcut icon" href="favicon.ico">
        <link
            href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
            rel='stylesheet' type='text/css'>
        <!-- FontAwesome JS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
              integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- Global CSS -->
        <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
        <!-- Theme CSS -->
        <link id="theme-style" rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/respuestas.css">
        <title> About the people</title>

    </head>

    <body>
        <header id="header1" class="header">
            <nav class="navbar navbar-dark bg-primary">

                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <h1 class="text-light float-left">Unit 1 Relationship</h1>
                    </li>
                </ul>
                <!--//nav-->
                <ul class="nav navbar-nav navbar-expand-md">
                    <li class="nav-item"><h2><a class="text-light" href="pagina.php">Regresar </a></h2></li>
                </ul>
                <!--//nav-->
                </div>
                <!--//navabr-collapse-->
            </nav>
            <!--//main-nav-->
        </div>
        <!--//container-->
    </nav>
</header>
<!--//header-->
</br></br></br></br>


<form action="controller/Evaluar.php" method="post">
    <div class="container" >
        <?php
        if ($aciertos != 0 && $errores != 0) {
            echo "<div  style='color:green'><h3>Número de Correctos: $aciertos</h3> </div>";
            echo "<div  style='color:red'><h3>Numero de incorrectos $errores</h3> </div>";
        } else {
            echo "<div  style='display: none;'><h3>Número de Correctos: $aciertos</h3> </div>";
            echo "<div  style='display: none;'><h3>Numero de incorrectos $errores</h3> </div>";
        }
        ?>
        <h3 class="text-dark font-weight-bold">Look the pictures and write the occupation. Use a or an</h3>
        <br>
        <div class="row">
            <?php
            $mostrar = "SELECT * FROM actividades WHERE id_categoria = $unidad  ";
            $resul = mysqli_query(conexion(), $mostrar) or die(mysql_error());
            $cont = 1;
            while ($row = $resul->fetch_assoc()) {
                ?>
                <div class="col-sm-6 col-md-5 col-lg-4">
                    <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" alt="" height="250px" width="250px">
                    <div class="input-group mb-3">
                        <input type="hidden" class="respuesta col-xs-2 col-md-11 col-lg-8" name="<?php echo 'repuesta' . $row['id_actividades'] ?>" value="<?php echo $row['respuesta']; ?>" aria-label="Username" aria-describedby="basic-addon1">
                        <input type="text" class="respuesta col-xs-2 col-md-11 col-lg-8"required name="<?php echo 'answer' . $cont++ ?>" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <?php
            }
            ?>
            <input type="hidden" value="<?php echo $unidad ?>" name="unidad">
        </div>
    </div>

    <div class="container  d-flex justify-content-center">
        <div class="form-group">
            <button type="submit" class=" calificar btn btn-success btn-lg btn-block">Calificar</button>
        </div>
    </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>