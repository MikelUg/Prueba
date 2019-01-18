<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Propiedades en venta y renta SUPER USUARIO</h1>
    <div class="" id="tabla">
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $.ajax({
        type: "POST",
        url: 'muestraS.php',
        success: function(mensaje){
          $("#tabla").html(mensaje);
        }
      });
      $(document).on("click",".bottonS",function(){
        var valor = $( this ).siblings(".valordato").val();
        var id =  $( this ).siblings(".valordato").attr("id");
        $.ajax({
          type: "POST",
          url: 'modifica.php',
          data: {
            info: valor,
            id: id
          },
          success: function(mensaje){
          }
        });
      });
    });
  </script>
</html>
