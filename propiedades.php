<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>
    <h1>Propiedades en venta y renta</h1>
    <div class="" id="tabla">

    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $.ajax({
        type: "POST",
        url: 'muestra.php',
        success: function(mensaje){
          //El mensaje que te llega de php a JS se va imprimir en el div con el id tabla
          $("#tabla").html(mensaje);
        }
      });
    });
  </script>
</html>
