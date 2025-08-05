<?php
$ruta = dirname(dirname(__FILE__));
// die('llego a opciones'.$ruta);
require_once($ruta.'/sucursales/controllers/sucursalesController.php');
$controller = new sucursalesController();


?>