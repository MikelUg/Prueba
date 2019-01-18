<?php

  $info = $_POST["info"];
  $id = $_POST["id"];

  $dsn = 'mysql:dbname=prueba;host=localhost';
  $usuario = 'root';
  $contraseña = '';
  $gbd = new PDO($dsn, $usuario, $contraseña);
  $gbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = $gbd->query("UPDATE propiedades SET info='$info' WHERE id='$id';");


 ?>
