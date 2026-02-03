<?php
$ruta = dirname(dirname(__FILE__));
// die('llego a opciones'.$ruta);
require_once($ruta.'/formasdepago/controllers/formasDePagoController.php');
$controller = new formasDePagoController();


?>