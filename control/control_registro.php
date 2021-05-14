<?php
    require_once '../app/conexion.php';

    function registrar(){
      $conexion = conexion();

      $datos_recibidos = array(

          $_POST['user_name'],
          $_POST['user_mail'],
          $_POST['user_pass']
          

      );

      $query_insert = "INSERT INTO usuario(name_user, 
                                  email_user,  
                                  pass_user)
                                  values(?, ?, ?)";

      $insert_preparado = $conexion->prepare($query_insert);

      $insert_preparado->bind_param(
        'sss', 
        $datos_recibidos[0], 
        $datos_recibidos[1],
        $datos_recibidos[2], 
      );

      $resultado_insert = $insert_preparado->execute();

      $conexion->close();
    }
?>