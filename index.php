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
        <form name="form" method="post" action="enviar.php">
          <div class="col-md-12 span">
            <span class="Estilo1">Registro de facturas</span>
          </div>
          <div class="col-md-6">
            <label for="">Factura</label>
            <input name="nombres" type="text" id="nombres" />
          </div>
          <div class="col-md-6">
            <label for="">Monto antes de IVA</label>
            <input name="apellidopaterno" type="text"/>
          </div>
          <div class="col-md-6">
            <label for="">Monto total</label>
            <input name="apellidomaterno" type="text" />
          </div>
          <div class="col-md-6">
            <label for="">Fecha</label>
            <input name="dni" type="text" size="40" maxlength="8" />
          </div>
          <div class="col-md-12">
            <input id="enviar" type="submit" name="enviar" value="enviar" class="fa fa-paper-plane btn-primary">
          </div>
        </form>
      </div>
    </div>
    <!-- Bootstrsp JS 
    <script src="bootstrap/js/bootstrap.min.js"></script-->
  </body>
</html>
