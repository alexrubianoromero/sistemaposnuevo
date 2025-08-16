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
     echo '<table>'; 
     foreach($items as $item)
     {
       $infoProducto  =  $this->productoModel->traerProductoId($item['idProducto']); 
        echo '<tr>'; 
        echo '<td>'.$item['idProducto'].'</td>';
        echo '<td>'.$infoProducto['descripcion'].'</td>';
        echo '<td>'.$infoProducto['precio'].'</td>';
        echo '</tr>';
       $total += $infoProducto['precio'];
      }  
      echo '<tr>'; 
      echo '<td></td>'; 
      echo '<td>Total:</td>'; 
      echo '<td>'.$total.'</td>'; 
      echo '</tr>';
      echo '</table>';
  }

}