<?php
  // Conectando, seleccionando la base de datos
  include 'php/conexion.php';

  // Realizar una consulta MySQL
  $query = 'SELECT * FROM registro_fac';
  $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
?>
<!DOCTYPE html>
<html>
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
  <body>
    <button id="btnMostrar" type="submit" name="btnMostrar">Mostrar</button>
    <div class="container-fluid">
      <div class="Estilo2 row hidden" id="tblMostrar">
        <div class="col-md-12">
          <table class="table table-striped Estilo2">
      		    <thead>
      		        <tr>
      			           <th>ID</th>
      			           <th>Número cliente</th>
      			           <th>Nombre cliente</th>
                       <th>Nombre factura</th>
                       <th>Importe sin IVA</th>
                       <th>Importe total</th>
                       <th>Fecha de pago</th>
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
              <?php
      	       }
              ?>
          </table>
        </div>
      </div>
    </div>
    <!-- Llamar js -->
    <script src="js/mostrar.js"></script>
  </body>
</html>
