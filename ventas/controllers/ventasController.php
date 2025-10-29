<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// // die($ruta); 
// require_once($ruta.'/productos/models/ProductoModel.php');
// require_once($ruta.'/itemsCuentas/models/ItemCuentaModel.php');
// require_once($ruta.'/billetes/models/BilleteModel.php');
// require_once($ruta.'/calculadora/views/calculadoraView.php');

class ventasController
{
//   protected $productoModel;
//   protected $itemModel;
//   protected $billeteModel;
//   protected $calculadoraView;
  
  public function __construct()
  {

    //   $this->productoModel = new ProductoModel();
    //   $this->itemModel = new ItemCuentaModel();
    //   $this->billeteModel = new BilleteModel();
    //   $this->calculadoraView = new calculadoraView();
  }

  public function registrarVenta($idCuenta)
  {
    echo 'registro venta';
  }


}