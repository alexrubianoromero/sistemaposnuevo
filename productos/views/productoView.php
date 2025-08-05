<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die($ruta); 
// require_once($ruta.'/grupos/models/GrupoModel.php');

class productoView
{
    // protected $grupoModel;

    public function __construct()
    {
        // $this->grupoModel = new GrupoModel();
    }

    public function mostrarProductos($productos)
    {
           {
            // echo ' llego a menu opcionesview';
            echo '<div class="row"style="padding:10px;">'; 
            foreach($productos  as $producto)
            {
                echo '<div class="col-lg-2 ms-2">'; 
                    echo '<button 
                    class="btn btn-secondary btn-lg mt-2"
                    onclick="traerProductosIdGrupo('.$producto["id"].');"
                    >'.$producto["descripcion"].'</button>';
                echo '</div>';     
            }
        ?>


        <?php
    }

    }

}    