<?php
$ruta = dirname(dirname(__FILE__));
// die('llego a opciones'.$ruta);
require_once($ruta.'/productos/controllers/productosController.php');
$controller = new productosController();


?>