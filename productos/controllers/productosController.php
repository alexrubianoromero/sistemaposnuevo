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
        if($_REQUEST['opcion']='traerProductosIdGrupo')
        {
            $productosIdGrupo = $this->model->traerProductosIdGrupo($_REQUEST['idGrupo']);
            $this->view->mostrarProductos($productosIdGrupo);
        }
    }


}


?>