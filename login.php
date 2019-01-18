<?php
  // Estos son tus datos enviados por AJAX desde JS
  $usuarios = $_POST["usuario"];
  $clave = $_POST["contra"];
  //Variables para simplificar la conexion con la base de datos
  $dsn = 'mysql:dbname=prueba;host=localhost';
  $usuario = 'root';
  $contraseña = '';
  //METODO PDO para realizar la conexion con la base
  $gbd = new PDO($dsn, $usuario, $contraseña);
  $gbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //TU SQL
  $sql = $gbd->query("SELECT * FROM usuarios WHERE usuarios = '$usuarios' AND clave='$clave' LIMIT 1;");
  $resultado = $sql->fetchAll(PDO::FETCH_BOTH);
  if(count($resultado)!=0){
       session_start();
       $_SESSION['usuario'] = array(
         'nombre'=>$resultado[0]['usuarios'],
        'tipo'=>$resultado[0]['tipo']
       );
      echo "Listo!";
    }else{
      echo "No";
    }
 ?>
