<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die('llego a opciones'.$ruta);
require_once($ruta.'/conexion/Conexion.php');

class CuentaModel extends Conexion
{


    public function crearNuevaCuenta()
    {
        $sql= "insert into cuentas (descripcion) values('descrip') ";
        $consulta = mysql_query($sql,$this->connectMysql()); 
    }

    // public function traerCuentas()
    // {
    //     $sql = "select * from cuentas ";
    //     $consulta = mysql_query($sql,$this->connectMysql()); 
    //      $cuentas = $this->get_table_assoc($consulta);
    //      return $cuentas;
    // }
    public function traerCuentasPendientes()
    {
        $sql = "select * from cuentas where estado = '0'  ";
        $consulta = mysql_query($sql,$this->connectMysql()); 
         $cuentas = $this->get_table_assoc($consulta);
         return $cuentas;
    }

    

}

