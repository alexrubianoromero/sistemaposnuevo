<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die($ruta); 
// require_once($ruta.'/grupos/models/GrupoModel.php');

class itemsCuentasView
{

  public function listarItemsIdCuenta($items)
  {
      foreach($items as $item)
      {
         echo '<br>**'.$item['idProducto'];   
      }  
  }

}