<center><h1>Página principal del registro de facturas</h1></center>
<div class="container">
  <?php echo open(base_url() . 'reporte/index'); ?>
  <div class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-success">
        <i class="fa fa-floppy-o" aria-hidden="true"></i>
        <span class="glyphicons glyphicons-floppy-disk"></span>
        Generar Reportes
      </button>
       <table class="table table-striped Estilo2" style="">
           <thead>
               <tr>
                    <!--<th>ID</th>-->
                    <th>Número de cliente</th>
                    <th>Nombre de cliente</th>
                    <th>Factura</th>
                    <th>Importe sin IVA</th>
                    <th>Importet total</th>
                    <th>Fecha de Pago</th>
               </tr>
           </thead>
           <?php foreach ($query as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
             <tr>
               <!--<td> //echo $row -> idFac</td>-->
               <td><?php echo $row -> numCliente ?></td>
               <td><?php echo $row -> nomCliente ?></td>
               <td><?php echo $row -> nomFac ?></td>
               <td><?php echo $row -> importeSinIVA ?></td>
               <td><?php echo $row -> importeTotal ?></td>
               <td><?php echo $row -> fechaPago ?></td>
             </tr>
           <?php
            }
           ?>
       </table>
    </div>
  </div>
</div>
