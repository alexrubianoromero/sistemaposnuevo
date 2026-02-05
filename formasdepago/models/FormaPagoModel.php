<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die('llego a opciones'.$ruta);
require_once($ruta.'/conexion/Conexion.php');

class FormaPagoModel extends Conexion
{
    public function traerFormasPago()
    {
        $sql = "select * from formasDePago ";
        $consulta = mysql_query($sql,$this->connectMysql()); 
        $grupos = $this->get_table_assoc($consulta);
        return $grupos;
    }
    public function traerFormaPagoId($id)
    {
        $sql = "select * from formasDePago where id =  '".$id."'   ";
        $consulta = mysql_query($sql,$this->connectMysql()); 
        $grupos = mysql_fetch_assoc($consulta);
        return $grupos;
    }
    
    // public function registrarVenta($request)
    // {
    //     $sql ="insert into ventas (idCuenta)  values('".$request['idCuenta']."')";
    //     $consulta = mysql_query($sql,$this->connectMysql()); 
    // }

}




?>