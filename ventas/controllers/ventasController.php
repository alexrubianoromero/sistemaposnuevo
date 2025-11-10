<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// // die($ruta); 
require_once($ruta.'/ventas/models/VentaModel.php');
// require_once($ruta.'/itemsCuentas/models/ItemCuentaModel.php');
// require_once($ruta.'/billetes/models/BilleteModel.php');
// require_once($ruta.'/calculadora/views/calculadoraView.php');

class ventasController
{
  protected $model;
//   protected $itemModel;
//   protected $billeteModel;
//   protected $calculadoraView;
  
  public function __construct()
  {

      $this->model = new VentaModel();
    //   $this->itemModel = new ItemCuentaModel();
    //   $this->billeteModel = new BilleteModel();
    //   $this->calculadoraView = new calculadoraView();
      if($_REQUEST['opcion']=='registrarVenta')
        {
            $this->registrarVenta($_REQUEST);
        }
  }

  public function registrarVenta($request)
  {
    // echo 'registro venta';
    // echo '<pre>';
    // print_r($request);
    // echo '</pre>';
    // die();
     $idVenta =$this->model->registrarVenta($request);
     $this->model->actualizarIdVentaEnCuenta($request['idCuenta'],$idVenta);
    echo 'venta grabada';

  }


}