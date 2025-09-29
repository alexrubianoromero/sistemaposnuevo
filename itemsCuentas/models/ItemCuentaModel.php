<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die('llego a opciones'.$ruta);
require_once($ruta.'/conexion/Conexion.php');
require_once($ruta.'/productos/models/ProductoModel.php');

class ItemCuentaModel extends Conexion
{
    protected $productoModel;

    public function __construct()
    {
        $this->productoModel = new ProductoModel();
    }

    public function crearItemCuenta($request)
    {
        $infoProducto = $this->productoModel->traerProductoId($request['idProducto']);
        $sql = "insert into items_cuentas (idCuenta,idProducto,cantidad,precio,total)   
        values('".$request['idCuenta']."','".$request['idProducto']."','1','".$infoProducto['precio']."','".$infoProducto['precio']."')  ";
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
        // die($sql);
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