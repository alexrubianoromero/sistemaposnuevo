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



        if($_REQUEST['opcion']=='agregarItemACuenta123456')
        {
            $this->itemMOdel->crearItemCuenta($_REQUEST);
              $items =  $this->itemMOdel->listarItemsIdCuenta($_REQUEST['idCuenta']);
            $this->view->listarItemsIdCuenta($items,$_REQUEST['idCuenta']);
            die();
           
        }

        if($_REQUEST['opcion']=='listarItemsCuentaExistente')
        {
           $items =  $this->itemMOdel->listarItemsIdCuenta($_REQUEST['idCuenta']);
           $this->view->listarItemsIdCuenta($items,$_REQUEST['idCuenta']);
           die();
        }

        if($_REQUEST['opcion']=='eliminarItemCuenta')
        {
            // die('llego a eliminar cuebnta ');
           $items =  $this->itemMOdel->eliminarItemCuenta($_REQUEST['idItem']);
        }

        
        if($_REQUEST['opcion']=='listarItemsIdCuenta')
        {
            $items =  $this->itemMOdel->listarItemsIdCuenta($_REQUEST['idCuenta']);
            $this->view->listarItemsIdCuenta($items,$_REQUEST['idCuenta']);

        }
        if($_REQUEST['opcion']=='formuCobroCuenta')
        {
            $this->view->formuCobroCuenta($_REQUEST['idCuenta']);

        }

    }

}