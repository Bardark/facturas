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
  </head>

  <body>
    <div class="container-fluid">
      <div class="Estilo1 row">
        <form role="form" name="form" method="post" action="php/enviar.php" enctype="multipart/form-data" id="formGen">
          <div class="col-md-12 span">
            <span class="Estilo1">Registro de facturas</span>
          </div>
          <div class="col-md-6">
            <label for="">Número de cliente</label>
            <input name="numCliente" type="text" id="numCliente" required placeholder="000001" autofocus="" />
          </div>
          <div class="col-md-6">
            <label for="">Nombre de cliente</label>
            <input name="nomCliente" type="text" id="nomCliente" required placeholder="Juan Peréz" />
          </div>
          <div class="col-md-6">
            <label for="">Factura</label>
            <input name="nombreFac" type="text" id="nombreFac" required placeholder="Nombre de la factura" />
          </div>
          <div class="col-md-6">
            <label for="">Monto antes de IVA</label>
            <input name="importe" type="text" id="importe" required placeholder="$123456.99" />
          </div>
          <div class="col-md-6">
            <label for="">Monto total</label>
            <input name="importeTotal" type="text" id="importeTotal" required placeholder="$123456.99" />
          </div>
          <div class="col-md-6">
            <label for="">Fecha</label>
            <input name="fechaPago" type="date" id="fechaPago" required />
          </div>
          <div class="col-md-12" id="divenviar">
            <input id="enviar" type="submit" class="btn-primary" name="enviar" value="Enviar">
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
