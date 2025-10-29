<?php
$ruta = dirname(dirname(__FILE__));
// die('llego a opciones'.$ruta);
require_once($ruta.'/ventas/controllers/ventasController.php');
$controller = new ventasController();


?>