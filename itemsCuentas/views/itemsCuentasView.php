<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die($ruta); 
require_once($ruta.'/productos/models/ProductoModel.php');
require_once($ruta.'/itemsCuentas/models/ItemCuentaModel.php');

class itemsCuentasView
{
  protected $productoModel;
  protected $itemModel;
  
  public function __construct()
  {
      $this->productoModel = new ProductoModel();
      $this->itemModel = new ItemCuentaModel();
  }

  public function listarItemsIdCuenta($items,$idCuenta)
  {
    $totalItems =  $this->itemModel->sumarItemsIdCuenta($idCuenta);
    $total  = 0;
    $noItem= 1;
    echo '<div  style="font-size: 18px;" class="mt-2">Cuenta No '.$idCuenta.'</div>';
     echo '<div style="font-size: 35px;">Total: '. number_format($totalItems,0,",",".").'</div>';
     echo '<table class="table table-striped">'; 
     foreach($items as $item)
     {
       $infoProducto  =  $this->productoModel->traerProductoId($item['idProducto']); 
        echo '<tr>'; 
        // echo '<td>'.$noItem.'</td>';
        echo '<td>'.$infoProducto['descripcion'].'</td>';
        echo '<td align="right">'.$infoProducto['precio'].'</td>';
        echo '<td><button 
                  class="btn btn-secondary btn-sm"
                  onclick="eliminarItemCuenta('.$item['id'].');"
                  > 
        <i class="fas fa-trash"></i>
        </button></td>';
        echo '</tr>';
        $noItem++;
        $total += $infoProducto['precio'];
      }  
      // <i class="bi bi-trash"></i>
      echo '<tr>'; 
      // echo '<td></td>'; 
      echo '<td>Total:</td>'; 
      echo '<td align="right">'.number_format($total,0,",",".").'</td>'; 
      echo '</tr>';
      echo '</table>';
    }

}