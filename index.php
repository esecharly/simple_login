<?php 
  require_once 'app/config.php';  
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        require_once 'app/dependencias.php';
        
    ?>
</head>
<body>
    <div class="container">
        <div class="row justify-content-around py-4">
            <div class="col-sm-4 text-center">
                <form action="" method="POST" class="form-group" id="frm_registro">
                    <label for="" class="form-control">Nombre de usuario</label>
                    <input type="text" class="form-control" id="user_name" name="user_name" required>
                    <label for="" class="form-control">Correo electronico</label>
                    <input type="email" class="form-control" id="user_mail" name="user_mail" required>
                    <label for="" class="form-control">Password</label>
                    <input type="password" class="form-control" id="user_pass" name="user_pass" required>
                </form>
                <div>
                    <span class="btn btn-primary" id="btn_registro">Registrarse</span>
                    <span class="btn btn-success" id="btn_login">Iniciar sesión</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>