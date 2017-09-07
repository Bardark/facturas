<!DOCTYPE html>
<html lang="es">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="utf8" content="">
    <title>Formulario de Registro</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font-Awesome -->
    <link type="text/css" rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
    <link type="text/css" rel="stylesheet" href="font-awesome/css/font-awesome.css"/>

    <!-- Para el campo de fecha -->
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <script Language=Javascript src="js/jquery-1.12.4.js"></script>
		<script Language=Javascript src="js/jquery-ui.js"></script>
    <script Language=Javascript src="js/jquery.maskedinput.js"></script>
    <script>
		$( function() {
			$( "#datepicker" ).datepicker();
		} );
  </script>
  </head>

  <body>
    <div class="container-fluid">
      <div class="Estilo1 row">
        <form name="form" method="post" action="php/enviar.php">
          <div class="col-md-12 span">
            <span class="Estilo1">Registro de facturas</span>
          </div>
          <div class="col-md-6">
            <label for="">Número de cliente</label>
            <input name="numCliente" type="text" id="numCliente" required />
          </div>
          <div class="col-md-6">
            <label for="">Nombre de cliente</label>
            <input name="nomCliente" type="text" id="nomCliente" required />
          </div>
          <div class="col-md-6">
            <label for="">Factura</label>
            <input name="nombreFac" type="text" id="nombreFac" required />
          </div>
          <div class="col-md-6">
            <label for="">Monto antes de IVA</label>
            <input name="importe" type="text" id="importe" required />
          </div>
          <div class="col-md-6">
            <label for="">Monto total</label>
            <input name="importeTotal" type="text" id="importeTotal" required />
          </div>
          <div class="col-md-6">
            <label for="">Fecha</label>
            <input name="datepicker" type="text" id="datepicker" required />
          </div>
          <div class="col-md-12">
            <input id="enviar" type="submit" name="enviar" value="enviar">
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
