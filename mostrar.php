<?php
  // Conectando, seleccionando la base de datos
  include 'php/mostrar.php';
?>
<!DOCTYPE html>
<html xml:lang="es" lang="es">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="utf8" content="">
    <title>Mostrar</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font-Awesome -->
    <link type="text/css" rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
    <link type="text/css" rel="stylesheet" href="font-awesome/css/font-awesome.css"/>
    <title></title>

  </head>
  <body style="background-color:#000000;">
    <?php include "secciones/menu.php"; ?>
    <div class="container-fluid">
      <div class="Estilo2 row">
        <div class="col-md-12">
          <table id="tblMostrar" class="table table-striped Estilo2" style="background-color:#fff;">
      		    <thead>
      		        <tr>
      			           <th>ID</th>
      			           <th>Número cliente</th>
      			           <th>Nombre cliente</th>
                       <th>Nombre factura</th>
                       <th>Importe sin IVA</th>
                       <th>Importe total</th>
                       <th>Fecha de pago</th>
                       <!--<th>Estado</th>-->
      		        </tr>
      		    </thead>
              <?php while ($row = mysql_fetch_array($result)){ // aca puedes hacer la consulta e iterarla con each. ?>
                <tr>
              	  <td><?php echo $row['idFac'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
                  <td><?php echo $row['numCliente'] ?></td>
                  <td><?php echo $row['nomCliente'] ?></td>
                  <td><?php echo $row['nomFactura'] ?></td>
                  <td><?php echo $row['importeSinIVA'] ?></td>
                  <td><?php echo $row['importeTotal'] ?></td>
                  <td><?php echo $row['fechaPago'] ?></td>
                </tr>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
