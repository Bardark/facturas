<!DOCTYPE html>
<html xml:lang="es" lang="es">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="utf8" content="">
    <title>Formulario de Registro</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font-Awesome -->
    <link type="text/css" rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
    <link type="text/css" rel="stylesheet" href="font-awesome/css/font-awesome.css"/>
  </head>

  <body style="background-color:#000000;">
    <?php include "secciones/menu.php"; ?>
    <div class="container-fluid" style="background-color:#FFF;">
      <div class="Estilo1 row">
        <form role="form" name="form" method="post" action="php/enviar.php" enctype="multipart/form-data" id="formGen">
          <div class="col-md-12 span">
            <span class="Estilo1">Registro de facturas</span>
          </div>
          <div class="col-md-6">
            <label for="">Número de cliente</label>
            <span class="input-group-addon glyphicon"><i class="fa fa-hashtag"></i>
              <input name="numCliente" type="text" id="numCliente" required placeholder="000001" autofocus="" />
            </span>
          </div>
          <div class="col-md-6">
            <label for="">Nombre de cliente</label>
            <span class="input-group-addon glyphicon"><i class="fa fa-user"></i>
              <input name="nomCliente" type="text" id="nomCliente" required placeholder="Juan Peréz" />
            </span>
          </div>
          <div class="col-md-6">
            <label for="">Factura</label>
            <span class="input-group-addon glyphicon"><i class="fa fa-file"></i>
              <input name="nombreFac" type="text" id="nombreFac" required placeholder="Nombre de la factura" />
            </span>
          </div>
          <div class="col-md-6">
            <label for="">Monto antes de IVA</label>
            <span class="input-group-addon glyphicon"><i class="fa fa-usd"></i>
              <input name="importe" type="text" id="importe" required placeholder="$123456.99" />
            </span>
          </div>
          <div class="col-md-6">
            <label for="">Monto total</label>
            <span class="input-group-addon glyphicon"><i class="fa fa-usd"></i>
              <input name="importeTotal" type="text" id="importeTotal" required placeholder="$123456.99" />
            </span>
          </div>
          <div class="col-md-6">
            <label for="">Fecha</label>
            <span class="input-group-addon glyphicon"><i class="fa fa-calendar"></i>
              <input name="fechaPago" type="date" id="fechaPago" required placeholder="aaaa/mm/dd" />
            </span>
          </div><br>
          <div class="col-md-12" id="divenviar">
            <input id="enviar" type="submit" class="btn-primary" name="enviar" value="Enviar">
          </div><br>
        </form>
      </div>
    </div>
  </body>
</html>
