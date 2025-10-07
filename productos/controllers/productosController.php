<?php

$ruta = dirname(dirname(dirname(__FILE__)));
// die('llego a opciones'.$ruta);
require_once($ruta.'/productos/models/ProductoModel.php');
// require_once($ruta.'/productos/models/ItemCuentaModel.php');
require_once($ruta.'/productos/views/productoView.php');


class productosController
{
    protected $model;
    protected $view;
    // protected $itemModel;
    public function __construct()
    {
        // echo 'controlador de opciones';
        $this->model = new ProductoModel();
        $this->view = new productoView();
        // $this->itemModel = new ItemCuentaModel();
        // $this->view->menuOpciones();
        if($_REQUEST['opcion']=='mostrarSoloLosProductos')
        {
            // $productosIdGrupo = $this->model->traerProductosIdGrupo($_REQUEST['idGrupo']);
            $this->view->mostrarSoloLosProductos();
        }
        if($_REQUEST['opcion']=='formuAgregarProducto')
        {
            // $productosIdGrupo = $this->model->traerProductosIdGrupo($_REQUEST['idGrupo']);
            $this->view->formuAgregarProducto();
        }
        if($_REQUEST['opcion']=='traerProductosIdGrupo')
        {
            $productosIdGrupo = $this->model->traerProductosIdGrupo($_REQUEST['idGrupo']);
            $this->view->mostrarProductos($productosIdGrupo);
        }
        if($_REQUEST['opcion']=='mostrarMenuProductos')
        {
            // $productos = $this->model->traerProductos();
            $this->view->mostrarMenuProductos();
        }
        if($_REQUEST['opcion']=='grabarNuevoProducto')
        {
            $this->grabarNuevoProducto($_REQUEST);
             $this->view->mostrarSoloLosProductos();

        }
        if($_REQUEST['opcion']=='editarProducto')
        {
            // $this->grabarNuevoProducto($_REQUEST);
             $this->view->editarProducto($_REQUEST['idProducto']);

        }
           if($_REQUEST['opcion']=='realizarCargaArchivo')
        {
            $this->realizarCargaArchivo($_REQUEST);
        }
           if($_REQUEST['opcion']=='actualizarProducto')
        {
            $this->model->actualizarProducto($_REQUEST);
            echo 'Producto actaualizado';
        }


    }

    public function grabarNuevoProducto($request)
    {
        $this->model->grabarNuevoProducto($request);
    }

    public function realizarCargaArchivo($request)
    {

        //  echo '<pre>';  
        // print_r($_FILES);
        // echo '</pre>';
        //  echo '<pre>';  
        // print_r($_REQUEST);
        // echo '</pre>';
        // die(); 
        $producto = $this->model->traerProductoId($request['idProducto']);
        $nombre_archivo =$producto['descripcion'].'-'.$_FILES['archivo']['name'];;
        // $infoOrden = $this->modeloOrden->traerInfoOrdenIdOrden($request['idOrden']); 
        // $noSigImagen = $infoOrden['numeroImagenes'] + 1; 
        // //crear el nombre del archivo
        // $nombreArchivo =  $request['idOrden'].'-'.$noSigImagen.'-'.$_FILES['archivo']['name'];
        // //actualizar el numero de imagenes en Ordenes
        // $this->modeloOrden->actualizarNumeroImagenesOrden($request['idOrden'],$noSigImagen);
        // //insertar en  la tabla de imagenes
        // //subir el archivo
        $this->model->actImagenProducto($request['idProducto'],$nombre_archivo);
        $this->subirArchivoDevolucion($nombre_archivo);
   

    }



    public function subirArchivoDevolucion($nombre_archivo)
    {

        //  $this->printR($_FILES);
        //  $nombre_archivo = $_FILES['archivo']['name'];
            // if (move_uploaded_file($_FILES['archivo']['tmp_name'],  'archivos/'.$nombre_archivo)){
            if (move_uploaded_file($_FILES['archivo']['tmp_name'],  '../productos/imagenes/'.$nombre_archivo)){
                echo "El archivo ha sido cargado correctamente.";
            }else{
                echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
            }
            // die('Archivo subido');

    }


}


?>