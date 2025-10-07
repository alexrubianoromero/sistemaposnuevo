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

    public function mostrarProductos_ante($productos)
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
             echo '</div>';   
      }
    public function mostrarProductos($productos)
    {
            // echo ' llego a menu opcionesview';
            echo '<div class="row "style="padding:10px; ">'; 
                $ruta = '../productos/imagenes/';
                foreach($productos  as $producto)
                    {
                    $rutaCompleta = $ruta.$producto['rutaImagen'];
                    echo '<div 
                            class="col-lg-3 ms-2 mt-2 text-center h-80" 
                            style="border:1px solid black;padding:5px;border-radius:5px;"
                             onclick="agregarItemACuenta123456('.$producto['id'].');"
                         >'; 
                        echo '<img class="h-90" style="max-width: 80%;;" src="'.$rutaCompleta.'">';
                        echo '<label class="fs-4">'.$producto['nombre'].' </label>';
                        echo '<label class="fs-2">'.$producto['precio'].'</label>';
                        // echo '<button 
                        // class="btn btn-secondary btn-sm mt-2"
                        // >'.$producto["descripcion"].'</button>';
                    echo '</div>';     
                        // data-bs-toggle="modal" data-bs-target="#modalProducto"
                        // onclick="pantallaAgregarProducto('.$producto['id'].');"
                }
             echo '</div>';   
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
        echo '<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-2">';

            foreach($productos as $producto)
                {
                    $ruta = '../productos/imagenes/';
                    $rutaCompleta = $ruta.$producto['rutaImagen'];
                    ?>
                     <div class="col">
                        <div class="card h-80">
                            <img style="height: 200px;" src="<?php   echo $rutaCompleta;  ?>" class="card-img-top" alt="Pizza">
                            <div class="card-body">
                                <h5 class="card-title"><?php   echo $producto['nombre'];  ?></h5>
                                <p class="card-text"><?php   echo $producto['descripcion'];  ?></p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <h6 class="text-success mb-0"><?php   echo $producto['precio'];  ?></h6>
                                <a  class="btn btn-primary"
                                     data-bs-toggle="modal" data-bs-target="#modalProductos"
                                     onclick="editarProducto('<?php echo $producto['id']; ?>');"

                                >Editar</a>

                            </div>
                        </div>
                    </div>
                   <?php
                    // exit();
                } 
                
         echo '</div>';
    }
            
            // echo '<button
            // data-bs-toggle="modal" data-bs-target="#modalProductos"
            // onclick="editarProducto('.$producto['id'].');"
            // class="btn btn-secondary">';
            // echo $producto['descripcion'];
            // echo'</button>';
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
                <label>Nombre:</label>
                <input type="text" id="nombreProducto" class="form-control mt-2">
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

      public function editarProducto($idProducto)
      {
         $producto = $this->model->traerProductoId($idProducto);
         ?>
         <div class="mt-3 row" >
            <div class="col-lg-4">
               <?php   $this->grupoView->mostrarSelectGruposSelectActual($producto['idGrupo']);      ?>
            </div>
            <div class="col-lg-4">
                <label>Nombre:</label>
                <input type="text" id="nombreProducto" class="form-control mt-2" value ="<?php echo $producto['nombre'] ?>">
            </div>
            <div class="col-lg-4">
                <label>Descripcion:</label>
                <input type="text" id="descripcionProducto" class="form-control mt-2" value ="<?php echo $producto['descripcion'] ?>">
            </div>
            <div class="col-lg-4">
                <label>Valor:</label>
                <input type="text" id="precioProducto" class="form-control mt-2" value ="<?php echo $producto['precio'] ?>">
            </div>

            <div class="mt-3 " > 
               <button class="btn btn-primary" onclick="actualizarProducto('<?php echo $idProducto ; ?>');">Actualizar</button>
            </div>
         </div>
         <div class="mt-3 row" style="border:1px solid black;padding:10px;" >
            <?php $this->verImagenenProducto($idProducto);  ?>
         </div>
         <?php
      }
      
    public function verImagenenProducto($idProducto)
    {
        $producto = $this->model->traerProductoId($idProducto);
        ?><p>Imagen:</p>
                <div class="mt-3">
                    <form  enctype="multipart/form-data">
                        <input class="form-control"  name="archivo" id="archivo" type="file">
                        <div id="div_muestre_resultado"></div>
                        <span id="demo"></span>
                    </form>
                </div>  
                <br>
                <div class="mt-4">
                    <button  class ="btn btn-primary "    onclick="realizarCargaArchivo(<?php echo $idProducto; ?>);" >SubirImagen</button>
                </div>
            <?php
            ?>
            <div align="center" class="row mt-2">
                <div class="col-lg-12" >
                    <img src = "../productos/imagenes/<?php  echo $producto['rutaImagen'] ?>" width="90%;" >
                </div>
            </div>
            <?php

    }


}    