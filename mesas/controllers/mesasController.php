<?php

$ruta = dirname(dirname(dirname(__FILE__)));
// die('llego a opciones'.$ruta);
require_once($ruta.'/mesas/views/mesasView.php');
// require_once($ruta.'/grupos/models/GrupoModel.php');


class mesasController
{
    protected $view;
    // protected $model;
    public function __construct()
    {
        // echo 'controlador de sucursales';
        $this->view = new mesasView();
        // $this->model = new GrupoModel();
        // $this->view->menuOpcionesGrupos();
        if($_REQUEST['opcion']=='mostrarMesasIdSUc')
        {
              $this->view->mostrarMesasIdSUc($_REQUEST['idSuc']); 
        }
    }


}    