<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die('llego a opciones'.$ruta);
require_once($ruta.'/conexion/Conexion.php');

class MesaModel extends Conexion
{
    public function traerMesas()
    {
        $sql = "select * from mesas ";
        $consulta = mysql_query($sql,$this->connectMysql()); 
         $sucursales = $this->get_table_assoc($consulta);
         return $sucursales;
    }
    public function treaerMesasIdSUc($idSuc)
    {
        $sql = "select * from mesas where idSucursal = '".$idSuc."'    ";
        $consulta = mysql_query($sql,$this->connectMysql()); 
         $sucursales = $this->get_table_assoc($consulta);
         return $sucursales;
    }


}

