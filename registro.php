<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/resgistro.css">
</head>
<body>
    <div class="signup-form">
        <form action="controller/registro.php" method="post">
            <h2 class="registro">Resgistrarse</h2>
            <p class="hint-text">Crea tu cuenta. Es gratis y solo toma un minuto.</p>
                <?php
                    if(isset($_GET["exito"]) && $_GET["exito"] == 'true')
                    {
                      echo "<div style='color:green'>Registro realizado.Ya puedes inciar sesión </div>";
                    }
                    if(isset($_GET["usuarioExist"]) && $_GET["usuarioExist"] == 'true')
                    {
                      echo "<div style='color:red'>El registro no puede ser completado. Email ya existes</div>";
                    }
                ?>
            <div class="form-group">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="apaterno" placeholder="Apellido Paterno" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="amaterno" placeholder="Apellido Materno" required="required">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">Resgistrarse ahora</button>
            </div>
        </form>
        <div class="text-center text-dark">¿Ya tienes una cuenta?
            <a href="index.php"class="text-info">Iniciar sesión</a>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>