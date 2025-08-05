<?php

$ruta = dirname(dirname(dirname(__FILE__)));
// die('llego a opciones'.$ruta);
require_once($ruta.'/sucursales/views/sucursalesView.php');
// require_once($ruta.'/grupos/models/GrupoModel.php');


class sucursalesController
{
    protected $view;
    // protected $model;
    public function __construct()
    {
        // echo 'controlador de sucursales';
        $this->view = new sucursalesView();
        // $this->model = new GrupoModel();
        // $this->view->menuOpcionesGrupos();
        if($_REQUEST['opcion']=='mostrarSucursales')
        {
              $this->view->mostrarSucursales(); 
        }
    }


}    