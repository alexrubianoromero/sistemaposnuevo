<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die('llego a opciones'.$ruta);
require_once($ruta.'/conexion/Conexion.php');

class VentaModel extends Conexion
{
    public function traerVentas()
    {
        $sql = "select * from ventas ";
        $consulta = mysql_query($sql,$this->connectMysql()); 
        $grupos = $this->get_table_assoc($consulta);
        return $grupos;
    }
    
    public function registrarVenta($request)
    {
        $sql ="insert into ventas (idCuenta,valorPagado,valorDevuelto,idFormaPago)  
        values('".$request['idCuenta']."','".$request['valorPagado']."','".$request['valorDevuelto']."','".$request['idFormaPago']."')";
        $consulta = mysql_query($sql,$this->connectMysql()); 
        $maxId = $this->traerMaxidVenta();
        return $maxId;
    }

    public function traerMaxidVenta()
    {
        $sql="select max(id) as maxId  from ventas ";
         $consulta = mysql_query($sql,$this->connectMysql()); 
        $arrId = mysql_fetch_assoc($consulta);
        $idMax = $arrId['maxId'];
        return $idMax;

    }

    public function actualizarIdVentaEnCuenta($idCuenta,$idventa)
    {
        $sql ="update cuentas set idVenta = '".$idventa."'   where id = '".$idCuenta."'   ";
        $consulta = mysql_query($sql,$this->connectMysql()); 
    }


}




?>