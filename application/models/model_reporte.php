<?php
class model_reporte extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    /* Devuelve la lista de alumnos que se encuentran en la tabla tblalumno */
    function obtenerRegistros()
    {
      $this->load->database();
        $registro = $this->db->get('registro');
        return $registro->result();
    }
}
?>;
