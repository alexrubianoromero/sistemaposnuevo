<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die($ruta); 
require_once($ruta.'/grupos/views/gruposView.php');
require_once($ruta.'/productos/models/ProductoModel.php');

class productoView
{
    protected $grupoView;
    protected $model;

    public function __construct()
    {
        $this->grupoView = new gruposView();
        $this->model = new ProductoModel();
    }

    public function mostrarProductos($productos)
    {
            // echo ' llego a menu opcionesview';
            echo '<div class="row"style="padding:10px;">'; 
                foreach($productos  as $producto)
                {
                    echo '<div class="col-lg-2 ms-2">'; 
                        echo '<button 
                        onclick="agregarItemACuenta123456('.$producto['id'].');"
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
      public function mostrarMenuProductos($productos)
      {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
       
        <?php
        echo '<div class="row" style="padding:5px;">'; 
              echo '<div class="col-lg-3">'; 
                    echo '<button class="btn btn-primary"
                        data-bs-toggle="modal" data-bs-target="#modalProductos"
                        onclick ="formuAgregarProducto();"
                    >Agregar Producto</button>';
                echo '</div>';   
        echo '</div>';   

        echo '<div class="row" id="divResultadosProductos">'; 
            $this->mostrarSoloLosProductos();
        echo '</div>';    
        $this->modalProductos() ;   
        ?>
             
            </body>
            </html>
            <?php
      }
      
      public function mostrarSoloLosProductos()
      {
        $productos =$this->model->traerProductos();
          foreach($productos as $producto)
          {
          echo '<div class="col-lg-2 mt-2">';
              echo '<button class="btn btn-secondary">';
                  echo $producto['descripcion'];
              echo'</button>';
          echo '</div>';    
          } 

      }


      public function modalProductos()
      {
        ?>
            <div class="modal fade" id="modalProductos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Productos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modalProductosBody">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
                </div>
            </div>
            </div>
        <?php
      }

      public function formuAgregarProducto()
      {
        // echo 'formu agregar producto';
         ?>
         <div class="mt-3 row" >
            <div class="col-lg-4">
               <?php   $this->grupoView->mostrarSelectGrupos();      ?>
            </div>
            <div class="col-lg-4">
                <label>Descripcion:</label>
                <input type="text" id="descripcionProducto" class="form-control mt-2">
            </div>
            <div class="col-lg-4">
                <label>Valor:</label>
                <input type="text" id="precioProducto" class="form-control mt-2">
            </div>

         </div>
         <div class="mt-3 " > 
            <button class="btn btn-primary" onclick="grabarNuevoProducto();">Grabar</button>
         </div>
         <?php
      }
      


}    