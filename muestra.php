<?php


  $dsn = 'mysql:dbname=prueba;host=localhost';
  $usuario = 'root';
  $contraseña = '';
  $gbd = new PDO($dsn, $usuario, $contraseña);
  $gbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = $gbd->query("SELECT * FROM propiedades");
  $resultado = $sql->fetchAll(PDO::FETCH_BOTH);
  $html="";
  if(count($resultado)!=0){
    foreach($resultado as $valor){
      $id = $valor['id'];
      $propidad = $valor['propiedad'];
      $estado = $valor['estado'];
      $info = $valor['info'];
      $html = $html."$id   $propidad    $estado       $info <br>";
    }
    echo $html;
  }
 ?>
