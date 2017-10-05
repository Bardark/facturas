<!DOCTYPE html>
<html lang="es">
<?php
  include 'plantilla/header.php';
  include 'php/mostrar.php';
?>
<body>
  <?php
    include 'plantilla/menu.php';
  ?>
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
  <center>&copy 2017 - Todos los derechos reservados</center>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-1.12.4.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
