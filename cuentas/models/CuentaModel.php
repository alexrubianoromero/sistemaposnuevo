<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die('llego a opciones'.$ruta);
require_once($ruta.'/conexion/Conexion.php');

class CuentaModel extends Conexion
{


    public function crearNuevaCuenta()
    {
        $fecha_y_hora = date('Y-m-d H:i:s');
// echo "La fecha y hora actuales son: " . $fecha_y_hora;
        $sql= "insert into cuentas (descripcion) values('".$fecha_y_hora."') ";
        $consulta = mysql_query($sql,$this->connectMysql()); 
        $maxId= $this->maximoIdCuentas();
        return $maxId;
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

    public function maximoIdCuentas()
    {
        $sql ="select max(id) as maxId from cuentas ";
        $consulta = mysql_query($sql,$this->connectMysql()); 
        $maxId = mysql_fetch_assoc($consulta);
        return $maxId['maxId'];
    }
    
    public function eliminarCuenta($idCuenta)
    {
        $sql = "delete from cuentas where id = '".$idCuenta."'   "; 
        $consulta = mysql_query($sql,$this->connectMysql()); 
    }
    

}

