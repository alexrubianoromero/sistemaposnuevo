<?php
$ruta = dirname(dirname(dirname(__FILE__)));
require_once($ruta.'/calculadora/views/calculadoraView.php');



class calculadoraController
{
    protected $vista;

        public function __construct()
        {
            $this->vista = new calculadoraView();
            // $this->view->menuOpcionesGrupos();
            if($_REQUEST['opcion']=='mostrarCalculadora')
            {
                // echo 'llego a controlador';
                  $this->vista->mostrarCalculadora(); 
            }

        }
}


?>