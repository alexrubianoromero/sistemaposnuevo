<?php
$ruta = dirname(dirname(__FILE__));
// die('llego a opciones'.$ruta);
require_once($ruta.'/cuentas/controllers/cuentasController.php');
$controller = new cuentasController();


?>