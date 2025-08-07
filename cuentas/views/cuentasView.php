<?php
$ruta = dirname(dirname(dirname(__FILE__)));
require_once($ruta.'/cuentas/models/CuentaModel.php');

class cuentasView
{
    protected $model;

    public function __construct()
    {
            // echo 'controlador de opciones';
        $this->model = new CuentaModel();
    }



    // public function mostrarCuentas()
    // {
    //     $sucursales =$this->model->traerMesas(); 
        
    //     foreach($mesas as $mesa)
    //     {
    //      echo '<div>';
    //     //  echo '<button class="btn btn-secondary mt-2 "   onclick="traerProductosIdGrupo('.$grupo["id"].')" > '; 
    //      echo '<button class="btn btn-secondary mt-2 " > '; 
    //      echo '<button onclick="mostrarMesasIdSUc('.$mesa['id'].');">'.$mesa['descripcion'].'</button>';
    //      echo '</div>';    
    //      echo '</button>'; 
    //     } 
     
    // }

    public function listarCuentas()
    {
        $cuentasPen = $this->model->traerCuentasPendientes()

        ?>
        <div>
            CUENTAS 
            <table class="table table-striped">
              <?php
                foreach($cuentasPen as $cuenta)
                {
                    echo '<tr>'; 
                    echo '<td>'.$cuenta['id'].'</td>'; 
                    echo '<td>'.$cuenta['fecha'].'</td>'; 
                    echo '</tr>';
                }
               ?> 
            </table>
        </div>
        <?php
    }


}


?>