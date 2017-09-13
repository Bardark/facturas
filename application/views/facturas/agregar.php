<center><h1>Página de agregar contacto</h1></center>
<br>
<div class="container">
  <?php echo form_open(base_url() . 'facturas/agregarFactura'); ?>
  <div class="row">
    <div class="col-md-12">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Número de cliente:</span>
        <input type="text" class="form-control ancho" placeholder="Número del cliente" name="txtNumC" aria-describedby="basic-addon1" required>
      </div>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col-md-12">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Nombre de cliente:</span>
        <input type="text" class="form-control" placeholder="Nombre del cliente" name="txtNomC" aria-describedby="basic-addon1" required>
      </div>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col-md-12">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Factura:</span>
        <input type="text" class="form-control ancho" placeholder="Factura" name="txtFactura" aria-describedby="basic-addon1" required>
      </div>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col-md-12">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Importe sin IVA:</span>
        <input type="text" class="form-control" placeholder="Importe sin IVA" name="txtImporte" aria-describedby="basic-addon1" required>
      </div>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col-md-12">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Importe total:</span>
        <input type="text" class="form-control" placeholder="Importe total" name="txtImporteT" aria-describedby="basic-addon1" required>
      </div>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col-md-12">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon">Fecha de pago:</span>
        <input type="date" class="form-control" placeholder="Tu teléfono aquí" name="txtFechaP" aria-describedby="basic-addon1" required>
      </div>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col-md-12">
      <center>
        <button type="submit" class="btn btn-success">
          <span class="glyphicon glyphicon-floppy-disk"></span>
          Guardar
        </button>
      </center>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <?php echo validation_errors(); ?>
    </div>
  </div>
  <?php echo form_close(); ?>
</div>
