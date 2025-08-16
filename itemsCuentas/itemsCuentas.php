<?php
$ruta = dirname(dirname(__FILE__));
// die('llego a opciones'.$ruta);
require_once($ruta.'/itemsCuentas/controllers/itemsCuentasController.php');
$controller = new itemsCuentasController();


?>