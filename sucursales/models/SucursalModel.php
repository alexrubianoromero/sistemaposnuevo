<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die('llego a opciones'.$ruta);
require_once($ruta.'/conexion/Conexion.php');

class SucursalModel extends Conexion
{
    public function traerSucursales()
    {
        $sql = "select * from sucursales ";
        $consulta = mysql_query($sql,$this->connectMysql()); 
         $sucursales = $this->get_table_assoc($consulta);
         return $sucursales;
    }


}




?>