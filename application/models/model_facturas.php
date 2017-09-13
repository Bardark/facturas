<?php
  /**
   *
   */
  class model_facturas extends CI_Model
  {
    function insert($data){
      # code...
      $this -> db -> insert('registro', $data);
    }

    function getAll(){
      # code...
      $query = $this -> db -> get('registro');
      return $query -> result();
    }
  }
?>
