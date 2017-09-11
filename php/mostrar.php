<?php
  // Conectando, seleccionando la base de datos
  include 'conexion.php';

  // Realizar una consulta MySQL
  $query = 'SELECT * FROM registro_fac';
  $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
?>
