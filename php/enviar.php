<html lang="es">
	<head>
		<meta charset="utf-8">
	</head>
</html>

<?php
// Recibimos por POST los datos procedentes del formulario
$numCliente = ($_POST["numCliente"]);
$nomCliente = ($_POST["nomCliente"]);
$nombreFac = ($_POST["nombreFac"]);
$importe = ($_POST["importe"]);
$importeTotal = ($_POST["importeTotal"]);
$datepicker = ($_POST["datepicker"]);

		// Abrimos la conexion a la base de datos
		$link = mysql_connect("localhost","root","");
		mysql_select_db("facturas") OR DIE ("Error: No es posible establecer la conexión");
		$tildes = $link->query("SET NAMES 'utf8'");
		mysql_query($link, "INSERT INTO registro_fac (numCliente, nomCliente, nomFactura, importeSinIVA, importeTotal, fechaPago,) VALUES ('$numCliente', '$nomCliente', '$nombreFac', '$importe', '$importeTotal', '$datepicker')");
		//mysql_query('INSERT INTO registro_fac (numCliente, nomCliente, nombreFactura, importeSinIVA, importeTotal, fechaPago,) VALUES ("'.$numCliente'", "'.$nomCliente'", "'.$nombreFac'", "'.$importe'", "'.$importeTotal'", "'.$datepicker'")');

		// Confirmamos que el registro ha sido insertado con exito
		/*echo "<script>
	       alert('Los datos han sido guardados con exito');
		     location.href='../index.php'
				 </script>";*/
				 echo "
		 					<p>Los datos han sido guardados con exito.</p>
		 					<p><a href='../index.php'>VOLVER ATRÁS</a></p>
		 		";
?>
