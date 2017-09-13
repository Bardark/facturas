<?php
  /**
   *
   */
  class Home extends CI_Controller
  {
    function index(){
      # code...
      $data['titulo'] = 'Registro facturas';

      $this -> load -> view('plantilla/header', $data);
      $this -> load -> view('home/index');
      $this -> load -> view('plantilla/footer');
    }
  }

?>
