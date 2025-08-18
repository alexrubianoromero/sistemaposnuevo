<?php

$ruta = dirname(dirname(dirname(__FILE__)));
// die('llego a opciones'.$ruta);
require_once($ruta.'/cuentas/views/cuentasView.php');
require_once($ruta.'/cuentas/models/CuentaModel.php');
require_once($ruta.'/itemsCuentas/models/ItemCuentaModel.php');


class cuentasController
{
    protected $view;
    protected $model;
    protected $itemModel;

    public function __construct()
    {
        // echo 'controlador de sucursales';
        $this->view = new cuentasView();
        $this->model = new CuentaModel();
        $this->itemModel = new ItemCuentaModel();
        // $this->view->menuOpcionesGrupos();
        if($_REQUEST['opcion']=='listarCuentas')
        {
            //  die('llego a listar cuentas');
              $this->view->listarCuentas();
        }
        if($_REQUEST['opcion']=='crearNuevaCuenta')
        {
             $idCuentaNueva =  $this->model->crearNuevaCuenta();
            // //  $respu[0] = 
             echo json_encode($idCuentaNueva);
             exit();
        }
        if($_REQUEST['opcion']=='eliminarCuenta')
        {
            $this->model->eliminarCuenta($_REQUEST['idCuenta']);
            //eliminar los items de una cuenta 
              $this->itemModel->eliminarItemsIdCuenta($_REQUEST['idCuenta']);

        }

        

    }


}    