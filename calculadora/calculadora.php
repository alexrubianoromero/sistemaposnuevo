<?php
$ruta = dirname(dirname(__FILE__));
// die('llego a opciones'.$ruta);
require_once($ruta.'/calculadora/controllers/calculadoraController.php');
$controller = new calculadoraController();


?>