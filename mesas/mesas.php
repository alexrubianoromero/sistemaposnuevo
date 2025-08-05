<?php
$ruta = dirname(dirname(__FILE__));
// die('llego a opciones'.$ruta);
require_once($ruta.'/mesas/controllers/mesasController.php');
$controller = new mesasController();


?>