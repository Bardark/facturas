<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    // Incluimos el archivo fpdf
    require_once APPPATH."/third_party/fpdf/fpdf.php";

    //Extendemos la clase Pdf de la clase fpdf para que herede todas sus variables y funciones
    class Pdf extends FPDF {
        function __construct() {
            parent::__construct();
        }
        // El encabezado del PDF
        function Header()
        {
          //$this->Image('images/logo.png', 5, 5, 30 );
          $this->SetFont('Arial','B',15);
          $this->Cell(30);
          $this->Cell(120,10, 'Reporte de facturas',0,0,'C');
          $this->Ln(20);
        }

        function Footer()
        {
          $this->SetY(-15);
          $this->SetFont('Arial','I', 8);
          $this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
        }
    }
?>;
