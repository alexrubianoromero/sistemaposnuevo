<?php
$ruta = dirname(dirname(dirname(__FILE__)));
require_once($ruta.'/grupos/models/GrupoModel.php');

class gruposView
{
    protected $model;

    public function __construct()
    {
            // echo 'controlador de opciones';
        $this->model = new GrupoModel();
    }

    public function menuOpcionesGrupos()
    {
    }
    
    public function mostrarGrupos()
    {
        echo '<div class ="mt-2 text-center" style="border:2px solid black;padding:5px;border-radius:5px;">
            <button 
                class="btn btn-primary"
                onclick="muestreFormuNuevoGrupo();"
            >Nuevo Grupo</button></div>';
        $grupos =$this->model->traerGrupos(); 
        
        foreach($grupos as $grupo)
        {
         echo '<div>';
         echo '<button class="btn btn-secondary mt-2 "   onclick="traerProductosIdGrupo('.$grupo["id"].')" > '; 
         echo $grupo['nombre'];
         echo '</div>';    
         echo '</button>'; 
        } 
     

    }

    public function muestreFormuNuevoGrupo()
    {
        ?>
        <div class="mt-2 row">
            <div class="col-lg-4 text-center">
                <label>Nombre Grupo:</label>
                <input class="form-control mt-2" type="text" id="nombreNuevoGrupo">
                <button class="btn btn-primary mt-2" onclick="grabarInfoNuevoGrupo();">Grabar</button>
            </div>
            <div class="col-lg-3">
                <label> </label>
              
            </div>
        </div>
        <?php
    }


}


?>