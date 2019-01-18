////////////////////////////////////EL ARCHIVO ESTA LISTO
$(document).ready(function(){
  //Cuando se pulse el boton con el ID enviar se actica otra funcion
  $("#enviar").on("click",function(){
    //La variable texto y contra van extraer el valor de los input id "usuario y clave"
    var texto = $("#usuario").val();
    var contra = $("#clave").val();
    //AJAX hace la conexion entre JavaScript y PHP
    $.ajax({
      //type el el metodo por el que llegan tus datos a PHP
        type: "POST",
        //URL es tu archivo PHP a donde llegan tus datos
        url: 'login.php',
        //DATA son tus datos
        data: {
          usuario: texto,
          contra: contra
        },
        //success es cuando php finalizp y mensaje es el contenido que te envia php
        success: function(mensaje) {
          alert(mensaje);
        }
      });
  });
});
