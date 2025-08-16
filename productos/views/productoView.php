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
            // echo ' llego a menu opcionesview';
            echo '<div class="row"style="padding:10px;">'; 
                foreach($productos  as $producto)
                {
                    echo '<div class="col-lg-2 ms-2">'; 
                        echo '<button 
                        onclick="agregarItemACuenta('.$producto['id'].');"
                        class="btn btn-secondary btn-lg mt-2"
                        >'.$producto["descripcion"].'</button>';
                        echo '</div>';     
                        // data-bs-toggle="modal" data-bs-target="#modalProducto"
                        // onclick="pantallaAgregarProducto('.$producto['id'].');"
                }
      }

      public function pantallaAgregarProducto($request)
      {
        ?>


        <?php

      }


}    