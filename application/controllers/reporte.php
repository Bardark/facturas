<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reporte extends CI_Controller {

  function index ()
  {
    // Se carga el modelo alumno
    $this -> load -> model('model_reporte');
    // Se carga la libreria fpdf
    $this -> load -> library('pdf');

    // Se obtienen los alumnos de la base de datos
    $registro = $this->model_reporte->obtenerRegistros();

    // Creacion del PDF

    /*
     * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
     * heredó todos las variables y métodos de fpdf
     */
    $this->pdf = new Pdf();
    // Agregamos una página
    $this->pdf->AddPage();
    // Define el alias para el número de página que se imprimirá en el pie
    $this->pdf->AliasNbPages();

    /* Se define el titulo, márgenes izquierdo, derecho y
     * el color de relleno predeterminado
     */
    $this->pdf->SetTitle("Reporte de facturas");
    $this->pdf->SetLeftMargin(15);
    $this->pdf->SetRightMargin(15);
    $this->pdf->SetFillColor(200,200,200);

    // Se define el formato de fuente: Arial, negritas, tamaño 9
    $this->pdf->SetFont('Arial', 'B', 9);
    /*
     * TITULOS DE COLUMNAS
     *
     * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
     */

    $this->pdf->Cell(15,6,'Número cliente','TBL',0,'C','1');
    $this->pdf->Cell(25,6,'Nombre cliente','TB',0,'L','1');
    $this->pdf->Cell(25,6,'Factura','TB',0,'L','1');
    $this->pdf->Cell(25,6,'Importe sin IVA','TB',0,'L','1');
    $this->pdf->Cell(40,6,'Importe total','TB',0,'C','1');
    $this->pdf->Cell(25,6,'Fecha de pago','TB',0,'L','1');
    $this->pdf->Ln(6);
    // La variable $x se utiliza para mostrar un número consecutivo
    $x = 1;
    //foreach ($alumnos as $alumno) {
    foreach ($registro as $registros){ // aca puedes hacer la consulta e iterarla con each
      // se imprime el numero actual y despues se incrementa el valor de $x en uno
      $this->pdf->Cell(15,6,$x++,'BL',0,'C',0);
      // Se imprimen los datos de cada alumno
      //echo $row -> idFac</td>-->
      $this->pdf->Cell(25,6,$registros->numCliente,'B',0,'C',0);
      $this->pdf->Cell(25,6,$registros->nomCliente,'B',0,'L',0);
      $this->pdf->Cell(25,6,$registros->nomFac,'B',0,'L',0);
      $this->pdf->Cell(25,6,$registros->importeSinIVA,'B',0,'L',0);
      $this->pdf->Cell(25,6,$registros->importeTotal,'B',0,'L',0);
      $this->pdf->Cell(25,6,$registros->fechaPago,'B',0,'L',0);

      //Se agrega un salto de linea
      $this->pdf->Ln(6);
    }
    /*
     * Se manda el pdf al navegador
     *
     * $this->pdf->Output(nombredelarchivo, destino);
     *
     * I = Muestra el pdf en el navegador
     * D = Envia el pdf para descarga
     *
     */
    //$this->pdf->Output("Reporte_Facturas.pdf", 'I');
  }
}
