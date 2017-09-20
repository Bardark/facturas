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

    /*function reporte()
    {
      $data['titulo'] = 'Reporte de facturas';

      $this -> load -> view('plantilla/header', $data);
      $this -> load -> view('plantilla/footer');

      //$query = "SELECT e.estado, m.id_municipio, m.municipio FROM t_municipio AS m INNER JOIN t_estado AS e ON m.id_estado=e.id_estado";
      $query = "SELECT numCliente, nomCliente, nomFac, importeSinIVA, importeTotal, fechaPago FROM registro";
      $resultado = $mysqli->query($query);

      $pdf = new PDF();
      $pdf->AliasNbPages();
      $pdf->AddPage();

      $pdf->SetFillColor(232,232,232);
      $pdf->SetFont('Arial','B',12);
      $pdf->Cell(30,6,'ESTADO',1,0,'C',1);
      $pdf->Cell(20,6,'ID',1,0,'C',1);
      $pdf->Cell(30,6,'MUNICIPIO',1,1,'C',1);

      $pdf->SetFont('Arial','',10);

      while($row = $resultado->fetch_assoc())
      {
        $pdf->Cell(70,6,utf8_decode($row['estado']),1,0,'C');
        $pdf->Cell(20,6,$row['id_municipio'],1,0,'C');
        $pdf->Cell(70,6,utf8_decode($row['municipio']),1,1,'C');
      }
      $pdf->Output();
    }*/
  }

?>
