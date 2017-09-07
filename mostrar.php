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
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-striped">
		    <thead>
		        <tr>
			           <th>ID</th>
			           <th>NÚMERO CLIENTE</th>
			           <th>NOMBRE CLIENTE</th>
                 <th>NOMBRE FACTURA</th>
                 <th>IMPORTE SIN IVA</th>
                 <th>IMPORTE TOTAL</th>
                 <th>FECHA DE PAGO</th>
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
  </body>
</html>
