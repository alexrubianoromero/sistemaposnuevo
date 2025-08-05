<?php
$ruta = dirname(dirname(dirname(__FILE__)));
require_once($ruta.'/mesas/models/MesaModel.php');

class mesasView
{
    protected $model;

    public function __construct()
    {
            // echo 'controlador de opciones';
        $this->model = new MesaModel();
    }

    // public function menuOpcionesGrupos()
    // {
    // }
    
    public function mostrarMesas()
    {
        $sucursales =$this->model->traerMesas(); 
        
        foreach($mesas as $mesa)
        {
         echo '<div>';
        //  echo '<button class="btn btn-secondary mt-2 "   onclick="traerProductosIdGrupo('.$grupo["id"].')" > '; 
         echo '<button class="btn btn-secondary mt-2 " > '; 
         echo '<button onclick="mostrarMesasIdSUc('.$mesa['id'].');">'.$mesa['descripcion'].'</button>';
         echo '</div>';    
         echo '</button>'; 
        } 
     
    }


    public function mostrarMesasIdSUc($idSuc)
    {
        $mesas=$this->model->treaerMesasIdSUc($idSuc); 
        
        echo '<div>';
        foreach($mesas as $mesa)
        {
        //  echo '<button class="btn btn-secondary mt-2 "   onclick="traerProductosIdGrupo('.$grupo["id"].')" > '; 
         echo '<button 
                class="btn btn-secondary mt-2 me-2" 
                onclick="mostrarMesasIdSUc12321('.$mesa['id'].');"
                >'.$mesa['descripcion'].'</button>';

            } 
            
        echo '</div>';    

    }





}


?>