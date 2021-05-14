<?php

  session_start();

  require_once '../app/conexion.php';

  $conexion = conexion();

  $datos_login = array (

    $conexion->$_POST['user_mail'],
    $conexion->$_POST['user_pass']

  );

  $query_busqueda_usuario = 'SELECT * FROM usuario WHERE email_user = ? AND pass_user = ?';
  $busqueda_preparada_usuario = $conexion->prepare($query_busqueda_usuario);
  $busqueda_preparada_usuario->bind_param('ss', $datos_login[0], $datos_login[1]);
  $busqueda_preparada_usuario->execute();

  $resultado = $busqueda_preparada_usuario->get_result();

  $arreglo_resultante = $resultado->fetch_assoc();

  $conexion->close();

?>  