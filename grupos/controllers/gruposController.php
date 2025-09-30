<?php

$ruta = dirname(dirname(dirname(__FILE__)));
// die('llego a opciones'.$ruta);
require_once($ruta.'/grupos/views/gruposView.php');
require_once($ruta.'/grupos/models/GrupoModel.php');


class gruposController
{
    protected $view;
    protected $model;
    public function __construct()
    {
        // echo 'controlador de opciones';
        $this->view = new gruposView();
        $this->model = new GrupoModel();
        // $this->view->menuOpcionesGrupos();
        if($_REQUEST['opcion']=='mostrarGrupos')
        {
              $this->view->mostrarGrupos(); 
        }
        if($_REQUEST['opcion']=='muestreFormuNuevoGrupo')
        {
              $this->view->muestreFormuNuevoGrupo(); 
        }
        if($_REQUEST['opcion']=='grabarInfoNuevoGrupo')
        {
              $this->model->grabarInfoNuevoGrupo($_REQUEST['nombreGrupo']); 
        }

    

        

    }

    public function traerGrupos()
    {
        $grupos = $this->model->traerGrupos();
    }

    
}


?>