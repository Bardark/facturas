<!DOCTYPE html>
<html lang="es">
<?php
  include 'plantilla/header.php';
  include 'php/mostrar.php';
?>
<body>
  <!-- Static navbar -->
  <div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand">Registro de facturas</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Facturas</a></li>
          <li><a href="agregar.php">Agregar</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  <hr>
  <center><h1>Página principal del registro de facturas</h1></center>
  <div class="container">
    <form method="post" action="pdf.php" />
      <div class="row">
        <div class="col-md-12">
          <button id="create_pdf" type="submit" class="btn btn-success">
            <i class="fa fa-floppy-o" aria-hidden="true"></i>
            <span class="glyphicons glyphicons-floppy-disk"></span>
            Generar Reportes
          </button>
           <table class="table table-striped Estilo2" style="">
               <thead>
       		        <tr>
   			           <th>No. cliente</th>
   			           <th>Cliente</th>
                    <th>Factura</th>
                    <th>Importe sin IVA</th>
                    <th>Importe total</th>
                    <th>Fecha de pago</th>
                    <!--<th>Estado</th>-->
       		        </tr>
       		    </thead>
               <?php while ($row = mysql_fetch_array($result)){ // aca puedes hacer la consulta e iterarla con each. ?>
                 <tr>
               	   <td><?php echo $row['numCliente'] ?></td>
                   <td><?php echo utf8_encode($row['nomCliente']) ?></td>
                   <td><?php echo $row['nomFac'] ?></td>
                   <td><?php echo $row['importeSinIVA'] ?></td>
                   <td><?php echo $row['importeTotal'] ?></td>
                   <td><?php echo $row['fechaPago'] ?></td>
                 </tr>
               <?php }
               ?>
           </table>
        </div>
      </div>
    </form>
  </div>
  <hr>
  <center>&copy 2015 - Todos los derechos reservados</center>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-1.12.4.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
