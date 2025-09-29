<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die('llego a opciones'.$ruta);
require_once($ruta.'/conexion/Conexion.php');

class ItemCuentaModel extends Conexion
{

    public function crearItemCuenta($request)
    {
        $sql = "insert into items_cuentas (idCuenta,idProducto)   
        values('".$request['idCuenta']."','".$request['idProducto']."')  ";
        // die($sql); 
        $consulta = mysql_query($sql,$this->connectMysql()); 
    
    }
    
    public function listarItemsIdCuenta($idCuenta)
    {
        $sql = "select * from items_cuentas   where idCuenta = '".$idCuenta."'     "; 
        $consulta = mysql_query($sql,$this->connectMysql()); 
        $items = $this->get_table_assoc($consulta);
        return $items;


    }

    public function sumarItemsIdCuenta($idCuenta)
    {
        $sql = "select sum(total) as total from items_cuentas where idCuenta = '".$idCuenta."'  ";
         $consulta = mysql_query($sql,$this->connectMysql());
         $arrSuma = mysql_fetch_assoc($consulta); 
         return $arrSuma['total'];
    }


    public function eliminarItemCuenta($idItem)
    {
        $sql = "delete from items_cuentas   where id =  '".$idItem."'  "; 
        // die($sql);
        $consulta = mysql_query($sql,$this->connectMysql()); 
    }
    
    public function eliminarItemsIdCuenta($idCuenta)
    {
        $sql = "delete from items_cuentas  where idCuenta = '".$idCuenta."'  ";
        $consulta = mysql_query($sql,$this->connectMysql()); 
    }
}