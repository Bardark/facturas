<?php
// Recibimos por POST los datos procedentes del formulario
$numCliente = ($_POST["txtNumC"]);
$nomCliente = ($_POST["txtNomC"]);
$nombreFac = ($_POST["txtFactura"]);
$importe = ($_POST["txtImporte"]);
$importeTotal = ($_POST["txtImporteT"]);
$fechaPago = ($_POST["txtFechaP"]);

		// Abrimos la conexion a la base de datos
		include 'conexion.php';
		mysql_query("INSERT INTO registro (numCliente, nomCliente, nomFac, importeSinIVA, importeTotal, fechaPago) VALUES ('$numCliente', '$nomCliente', '$nombreFac', '$importe', '$importeTotal', '$fechaPago')");

		// Confirmamos que el registro ha sido insertado con exito
		echo "<script>
	       alert('Los datos han sido guardados con exito');
		     location.href='../index.php'
				 </script>";
		/*echo "
			<p>Los datos han sido guardados con exito.</p>
		 	<p><a href='../index.php'>VOLVER ATRÁS</a></p>
		";*/
?>
