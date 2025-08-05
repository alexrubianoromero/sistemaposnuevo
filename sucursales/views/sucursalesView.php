<?php
$ruta = dirname(dirname(dirname(__FILE__)));
require_once($ruta.'/sucursales/models/SucursalModel.php');

class sucursalesView
{
    protected $model;

    public function __construct()
    {
            // echo 'controlador de opciones';
        $this->model = new SucursalModel();
    }

    // public function menuOpcionesGrupos()
    // {
    // }
    
    public function mostrarSucursales()
    {
        $sucursales =$this->model->traerSucursales(); 
        
        foreach($sucursales as $sucursal)
        {
         echo '<div>';
        //  echo '<button class="btn btn-secondary mt-2 "   onclick="traerProductosIdGrupo('.$grupo["id"].')" > '; 
         echo '<button class="btn btn-secondary mt-2 " 
                    onclick="mostrarMesasIdSUc('.$sucursal['id'].');"
                >'.$sucursal['descripcion'].' </button>';
         echo '</div>';    
         echo '</button>'; 
        } 
     

    }


}


?>