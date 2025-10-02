<?php

$ruta = dirname(dirname(dirname(__FILE__)));
// die('llego a opciones'.$ruta);
require_once($ruta.'/productos/models/ProductoModel.php');
// require_once($ruta.'/productos/models/ItemCuentaModel.php');
require_once($ruta.'/productos/views/productoView.php');


class productosController
{
    protected $model;
    protected $view;
    // protected $itemModel;
    public function __construct()
    {
        // echo 'controlador de opciones';
        $this->model = new ProductoModel();
        $this->view = new productoView();
        // $this->itemModel = new ItemCuentaModel();
        // $this->view->menuOpciones();
        if($_REQUEST['opcion']=='mostrarSoloLosProductos')
        {
            // $productosIdGrupo = $this->model->traerProductosIdGrupo($_REQUEST['idGrupo']);
            $this->view->mostrarSoloLosProductos();
        }
        if($_REQUEST['opcion']=='formuAgregarProducto')
        {
            // $productosIdGrupo = $this->model->traerProductosIdGrupo($_REQUEST['idGrupo']);
            $this->view->formuAgregarProducto();
        }
        if($_REQUEST['opcion']=='traerProductosIdGrupo')
        {
            $productosIdGrupo = $this->model->traerProductosIdGrupo($_REQUEST['idGrupo']);
            $this->view->mostrarProductos($productosIdGrupo);
        }
        if($_REQUEST['opcion']=='mostrarMenuProductos')
        {
            // $productos = $this->model->traerProductos();
            $this->view->mostrarMenuProductos();
        }
        if($_REQUEST['opcion']=='grabarNuevoProducto')
        {
            $this->grabarNuevoProducto($_REQUEST);
             $this->view->mostrarSoloLosProductos();

        }
    }

    public function grabarNuevoProducto($request)
    {
        $this->model->grabarNuevoProducto($request);
    }


}


?>