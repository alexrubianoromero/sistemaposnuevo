<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die('llego a opciones'.$ruta);
require_once($ruta.'/conexion/Conexion.php');

class ProductoModel extends Conexion
{
    public function traerProductosIdGrupo($idGrupo)
    {
        $sql = "select * from productos where idGrupo = '".$idGrupo."'  ";
        $consulta = mysql_query($sql,$this->connectMysql()); 
        $productos = $this->get_table_assoc($consulta);
        return $productos;
    }
    
    public function traerProductoId($idProducto)
    {
        $sql = "select * from productos where id = '".$idProducto."'   "; 
        $consulta = mysql_query($sql,$this->connectMysql()); 
        $producto = mysql_fetch_assoc($consulta);
        return $producto; 

    }


}




?>