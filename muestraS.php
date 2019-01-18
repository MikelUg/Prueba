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
      $html = $html.'<div>'.$id.'   '.$propidad.'    '.$estado.'       '.$info.' <input type="text" name="" class="valordato" value="" id="'.$id.'"><button type="button" class="bottonS" name="button">Cambiar Info</button></div>  <br>';
    }
    echo $html;
  }
 ?>
