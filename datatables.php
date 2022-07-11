<?php
include 'db/db.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Web-site english</title>
    <!-- Metae -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap 4 landing page template for developers and startups">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Global CSS -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"></link>
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/respuestas.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    
    
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Global CSS -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Theme CSS -->  
   
</head> 
<body>

    <div class="container">
    <table id="example" class="display" style="width:70%">
        <thead>
            <tr>
                <th colspan="4" class="justify-content-center"><center><a class="text-center" href="insertar.php">Insertar imagenes</a></center></th>
                <th colspan="1" class="justify-content-center"><form action="controller/logout.php" method="post"><button type="submit" class="btn btn-dark btn-link text-light btn-logut nav-item"><i class="fa-solid fa-right-from-bracket"></i></button></form></th>
            </tr>
            <tr>
               <th>ID</th>
                <th>IMAGEN</th>
                <th>RESPUESTAS</th>
                <th>TEMAS</th>
                <th>ACTUALIZAR</th>
            </tr>
        </thead>
        <tbody>
             <?php
            
                $mostrar = "SELECT a.id_actividades,a.imagen,a.respuesta,c.categoria FROM actividades a inner join categoria c on a.id_categoria = c.id_categoria  ";
                $resul = mysqli_query(conexion(), $mostrar) or die(mysql_error());
            
                while ($row=$resul ->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $row['id_actividades']?></td>
                <td><img height="80px" src='data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>'></td>
                <td><?php echo $row['respuesta']?></td>
                <td><?php echo $row['categoria']?></td>
                <td><a href="actualizar.php?id=<?php echo $row['id_actividades'];?>">Actualizar</a></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>IMAGEN</th>
                <th>RESPUESTAS</th>
                <th>TEMAS</th>
                <th>ACTUALIZAR</th>
            </tr>
        </tfoot>
    </table>
    
</div>
<script type="text/javascript" src="plugins/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>     
    <script type="text/javascript" src="js/main.js"></script> 
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script type="text/javascript"> 
        $(document).ready(function () {
    $('#example').DataTable({
        "language": {
"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
}
    });
});
    </script>
</body>
</html>