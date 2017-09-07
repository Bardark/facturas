<?php
// Recibimos por POST los datos procedentes del formulario
$numCliente = ($_POST["numCliente"]);
$nomCliente = ($_POST["nomCliente"]);
$nombreFac = ($_POST["nombreFac"]);
$importe = ($_POST["importe"]);
$importeTotal = ($_POST["importeTotal"]);
$fechaPago = ($_POST["fechaPago"]);

		// Abrimos la conexion a la base de datos
		include 'conexion.php';
		mysql_query("INSERT INTO registro_fac (numCliente, nomCliente, nomFactura, importeSinIVA, importeTotal, fechaPago) VALUES ('$numCliente', '$nomCliente', '$nombreFac', '$importe', '$importeTotal', '$fechaPago')");

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
