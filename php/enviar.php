<html lang="es">
	<head>
		<meta charset="utf-8">
	</head>
</html>

<?php
// Recibimos por POST los datos procedentes del formulario
$numCliente = utf8_decode($_POST["numCliente"]);
$nomCliente = utf8_decode($_POST["nomCliente"]);
$nombreFac = utf8_decode($_POST["nombreFac"]);
$importe = utf8_decode($_POST["importe"]);
$importeTotal = utf8_decode($_POST["importeTotal"]);
$datepicker = utf8_decode($_POST["datepicker"]);

  //Verificamos que ningun campo vaya vacio
	if(isset($_POST['numCliente']) && !empty($_POST['numCliente']) &&
	isset($_POST['nomCliente']) && !empty($_POST['nomCliente'])&&
	isset($_POST['nombreFac']) && !empty($_POST['nombreFac']) &&
	isset($_POST['importe']) && !empty($_POST['importe']) &&
	isset($_POST['importeTotal']) && !empty($_POST['importeTotal'])&&
	isset($_POST['datepicker']) && !empty($_POST['datepicker'])) {

		// Abrimos la conexion a la base de datos
		mysql_connect("localhost","root","");
		mysql_select_db("facturas") OR DIE ("Error: No es posible establecer la conexión");
		mysql_query("INSERT INTO registro_fac (numCliente, nomCliente, nombreFactura, importeSinIVA, importeTotal, fechaPago,) VALUES ('$numCliente','$nomCliente','$nombreFac','$importe','$importeTotal','$datepicker')");

		// Confirmamos que el registro ha sido insertado con exito
		echo "<script>
	       alert('Los datos han sido guardados con exito');
		     window.location = 'javascript:history.go(-1)';
				 </script>";
	 } else {

 			echo "<script>
		       alert('Error, no ha introducido todos los datos');
			     window.location = 'javascript:history.go(-1)';
					 </script>";
 	}
?>
