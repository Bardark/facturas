<?php
  /**
   *
   */
  class Facturas extends CI_Controller
  {
    function __construct()
    {
      parent::__construct($this);
      $this -> load -> model('model_facturas');
    }

    function index ()
    {
      # code...
      $data['titulo'] = 'Página pricipal';
      $data['query'] = $this -> model_facturas -> getAll();

      $this -> load -> view('plantilla/header', $data);
      $this -> load -> view('facturas/index');
      $this -> load -> view('plantilla/footer');
    }

    function agregar ()
    {
      $data['titulo'] = 'Agregar factura';

      $this -> load -> view('plantilla/header', $data);
      $this -> load -> view('facturas/agregar');
      $this -> load -> view('plantilla/footer');
    }

    function agregarFactura ()
    {
      $this -> form_validation -> set_rules('txtNumC','nombre','required');
      $this -> form_validation -> set_rules('txtNomC','direccion','required');
      $this -> form_validation -> set_rules('txtFactura','telefono','required');
      $this -> form_validation -> set_rules('txtImporte','telefono','required');
      $this -> form_validation -> set_rules('txtImporteT','telefono','required');
      $this -> form_validation -> set_rules('txtFechaP','telefono','required');

      if ($this -> form_validation -> run() == FALSE) {
        # code...
        //ERROR
        $data['titulo'] = 'Agregar factura';

        $this -> load -> view('plantilla/header', $data);
        $this -> load -> view('facturas/agregar');
        $this -> load -> view('plantilla/footer');
      } else {
        # code...
        //OK
        $data = array(
          'numCliente' => $this -> input -> post('txtNumC'),
          'nomCliente' => $this -> input -> post('txtNomC'),
          'nomFac' => $this -> input -> post('txtFactura'),
          'importeSinIVA' => $this -> input -> post('txtImporte'),
          'importeTotal' => $this -> input -> post('txtImporteT'),
          'fechaPago' => $this -> input -> post('txtFechaP')
        );

        $this -> model_facturas -> insert($data);

        redirect(base_url() . 'facturas/');
      }
    }
  }

?>
