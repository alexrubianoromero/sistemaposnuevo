<?php

$ruta = dirname(dirname(dirname(__FILE__)));
// die('llego a opciones'.$ruta);
require_once($ruta.'/itemsCuentas/models/ItemCuentaModel.php');
require_once($ruta.'/itemsCuentas/views/itemsCuentasView.php');
// require_once($ruta.'/productos/models/ItemCuentaModel.php');
// require_once($ruta.'/productos/views/productoView.php');


class itemsCuentasController
{
    protected $itemMOdel;
    protected $view; 

    public function __construct()
    {
        $this->itemMOdel = new ItemCuentaModel();
        $this->view = new itemsCuentasView();



        if($_REQUEST['opcion']='agregarItemACuenta123456')
        {
            // echo '<pre>'; 
            // print_r($_REQUEST); 
            // echo '</pre>';
            $this->itemMOdel->crearItemCuenta($_REQUEST);
            // die('productoagregado');
           
        }

        if($_REQUEST['opcion']='listarItemsCuentaExistente')
        {
           $items =  $this->itemMOdel->listarItemsIdCuenta($_REQUEST['idCuenta']);
           $this->view->listarItemsIdCuenta($items); 
        }

        if($_REQUEST['opcion']='eliminarItemCuenta')
        {
           $items =  $this->itemMOdel->eliminarItemCuenta($_REQUEST['idItem']);
        }

        
        if($_REQUEST['opcion']='listarItemsIdCuenta')
        {
            $items =  $this->itemMOdel->listarItemsIdCuenta($_REQUEST['idCuenta']);
            $this->view->listarItemsIdCuenta($items);

        }

    }

}