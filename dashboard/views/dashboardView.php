<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die($ruta); 
// require_once($ruta.'/grupos/views/gruposView.php');

class dashboardView{
    protected $vistaGrupos;

    public function __construct()
    {
        // $this->vistaGrupos = new gruposView();
        // echo 'dashboard view';

    }



    public function pantallaInicial3()
    {
        ?>
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Sistema pos nuevo</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
                <style>
                  .bordeLinea {
                    border: 1px solid black;
                  }

                </style>    
            </head>
            <body class="container-fluid  div_principal_dashboard" style="height:100vh;padding-left: 20px;padding-right: 20px; background-color: #C0C0C0;">

                    <div id="div_barra_superior" class="row  bordeLinea" style="height:5vh;">
                        <div class="col-12">
                            Sistema Pos  Kaymo V1
                        </div>
                    </div>

                    <div class="row "  style="height:80vh;"> 
                        <div class="col-lg-2 bordeLinea" id="columna1Dashboard">
                            productos
                           
                            
                        </div>
                        
                        <div class="col-lg-7 bordeLinea" id="columncentral" >
                            Contenido de la Columna Central
                        </div>

                        <div class="col-lg-3 bordeLinea">
                            <!-- Contenido de la Columna Derecha      -->
                            <?php   $this->menuCuenta();    ?>

                        </div>
                    </div>

                    <div class="row bordeLinea"  style="padding:10px;height:10vh;">
                        <?php  $this->botonesAbajo2(); ?>
                    </div>
                    <div class="row bordeLinea"  style="height:5vh; padding:2px;">
                        ultima linea
                    </div>
                </div>
                <?php   $this->modalProducto();  ?>
            </body>
            </html>
            <script src="../dashboard/js/dashboard.js"></script>
            <script src="../grupos/js/grupos.js"></script>
            <script src="../productos/js/productos.js"></script>
            <script src="../grupos/js/grupos.js"></script>
            <script src="../sucursales/js/sucursales.js"></script>
            <script src="../mesas/js/mesas.js"></script>
            <script src="../cuentas/js/cuentas.js"></script>
            <script src="../itemsCuentas/js/itemsCuentas.js"></script>
        <?php
    }

    public function menuCuenta ()
    {
       ?>
            <div id="cuenta" style="height:10hv;"  class=" row borderLinea">
                <input type="hidden" id="idCuentaActual" >
                <div class="d-grid gap-2">
                    <button class="btn btn-secondary btn-lg"
                    onclick ="crearNuevaCuenta();"
                    >Cuenta..</button>
                </div>
            </div>
            <div id="divItemsCuenta"  style="height:20hv;" class="borderLinea">
                    
            </div>
        
        <?php
    }

    public function botonesAbajo2()
    {
        ?>
            <!DOCTYPE html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Botones estilo ETPOS</title>
                <style>
                   
                </style>
            </head>
            <body style="background-color: #f0f0f0;">

                <div class="">
                    <button class="btn btn-secondary btn-sm me-2">
                        <span class="icon icon-system">⚙️</span>
                        Sistema
                    </button>
                    <button class="btn btn-secondary btn-sm me-2">
                        <span class="icon icon-ficheros">📄</span>
                        Ficheros
                    </button>
                    <button class="btn btn-secondary btn-sm me-2">
                        <span class="icon icon-list">📋</span>
                        List
                    </button>
                    <button class="btn btn-secondary btn-sm me-2">
                        <span class="icon icon-caja">💰</span>
                        Caja
                    </button>
                    <button class="btn btn-secondary btn-sm me-2" onclick="mostrarGrupos();">
                        <span class="icon icon-opciones">🔧</span>
                        Grupos
                    </button>
                    <button class="btn btn-secondary btn-sm me-2" onclick="mostrarSucursales();">
                        <span class="icon icon-opciones">M</span>
                        Sucursales
                    </button>
                    <button class="btn btn-secondary btn-sm me-2" onclick="menuMesas();">
                        <span class="icon icon-opciones">M</span>
                        Mesas
                    </button>
                    <button class="btn btn-secondary btn-sm me-2" onclick="listarCuentas();">
                        <span class="icon icon-opciones">C</span>
                        Cuentas
                    </button>
                </div>

            </body>
            </html>
        <?php
    }


    public function modalProducto()
    {
      ?>
      <div class="modal fade" id="modalProducto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalBodyProducto">
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
    

}
?>