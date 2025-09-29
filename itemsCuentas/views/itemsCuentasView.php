<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die($ruta); 
require_once($ruta.'/productos/models/ProductoModel.php');

class itemsCuentasView
{
  protected $productoModel;
  
  public function __construct()
  {
      $this->productoModel = new ProductoModel();
  }

  public function listarItemsIdCuenta($items)
  {
    $total  = 0;
    $noItem= 1;
     echo '<table>'; 
     foreach($items as $item)
     {
       $infoProducto  =  $this->productoModel->traerProductoId($item['idProducto']); 
        echo '<tr>'; 
        // echo '<td>'.$noItem.'</td>';
        echo '<td>'.$infoProducto['descripcion'].'</td>';
        echo '<td>'.$infoProducto['precio'].'</td>';
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
      echo '<td></td>'; 
      echo '<td>Total:</td>'; 
      echo '<td>'.$total.'</td>'; 
      echo '</tr>';
      echo '</table>';
    }

}