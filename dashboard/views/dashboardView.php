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
            <body class="container div_principal_dashboard">
                    <div id="div_barra_superior" class="row  bordeLinea">
                        <div class="col-12">
                            Sistema Pos V1
                        </div>
                    </div>

                    <div class="row " > 
                        <div class="col-lg-2 bordeLinea" id="columna1Dashboard">
                            productos
                           
                            
                        </div>
                        
                        <div class="col-lg-7 bordeLinea" id="columncentral" >
                            Contenido de la Columna Central
                        </div>

                        <div class="col-lg-3 bordeLinea">
                            Contenido de la Columna Derecha
                        </div>
                    </div>

                    <div class="row bordeLinea"  style="padding:10px;">
                        <?php  $this->botonesAbajo2(); ?>
                    </div>
                </div>
            </body>
            </html>
            <script src="../dashboard/js/dashboard.js"></script>
            <script src="../grupos/js/grupos.js"></script>
            <script src="../productos/js/productos.js"></script>
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
            <body>

                <div class="">
                    <button class="btn btn-primary me-2">
                        <span class="icon icon-system">⚙️</span>
                        Sistema
                    </button>
                    <button class="btn btn-primary me-2">
                        <span class="icon icon-ficheros">📄</span>
                        Ficheros
                    </button>
                    <button class="btn btn-primary me-2">
                        <span class="icon icon-list">📋</span>
                        List
                    </button>
                    <button class="btn btn-primary me-2">
                        <span class="icon icon-caja">💰</span>
                        Caja
                    </button>
                    <button class="btn btn-primary me-2" onclick="menuOpciones();">
                        <span class="icon icon-opciones">🔧</span>
                        Opciones
                    </button>
                </div>

            </body>
            </html>
        <?php
    }

}
?>