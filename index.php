<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    include_once "index.html";
  }else{
    if($_SESSION['usuario']['tipo']=="normal"){
      include_once "propiedades.php";
    }elseif($_SESSION['usuario']['tipo']=="super"){
      include_once "superU.php";
    }
  }



 ?>
