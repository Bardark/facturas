<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- COMPATIBILIDAD CON INTERNET EXPLORER -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $titulo ?> | Agenda</title>
    <!-- Estilos porpios
    <link href="<?php echo base_url() ?>/assets/css/estilos.css" rel="stylesheet">-->

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font-Awesome -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>/assets/font-awesome/css/font-awesome.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>/assets/font-awesome/css/font-awesome.css"/>
  </head>
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
          <a class="navbar-brand" href="<?php echo base_url(); ?>">Registro de facturas</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>facturas/">Facturas</a></li>
            <li><a href="<?php echo base_url(); ?>facturas/agregar">Agregar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <hr>
