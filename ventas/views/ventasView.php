<?php



class ventasView
{
    public function listarVentas($ventas)
    {
        // echo 'listado de ventas ';
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            
        
         <div class="mt-2 col-lg-4" >
            <h3>VENTAS</h3>
             
            <table class="table table-striped table-hover">
                 <thead>
                    <tr>
                        <th scope="col">IdVenta</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Pdf</th>
                        <!-- <th scope="col">Window</th> -->
               
                    </tr>
                </thead>
                <tbody>

              <?php
                foreach($ventas as $venta)
                {
                    echo '<tr>'; 
                    echo '<td><button 
                                onclick="listarVentaId('.$venta['id'].');"  
                                class="btn btn-secondary">'.$venta['id'].'</button></td>'; 
                    echo '<td>'.substr($venta['fecha'],0,10).'</td>'; 
                    echo '<td class="text-end">'.number_format($venta['valorPagado'], 0, ',', '.').'</td>'; 
                    echo '<td><a href="../ventas/views/pdfCuenta.php?idVenta='.$venta['id'].'" target="_blank">Pdf</a></td>';
                //     echo '<td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                //             Launch demo modal
                //           </button></td>';
                    echo '</tr>';
                }
               ?> 
               </tbody>
            </table>
        </div>
        <?php  $this->ventanaEmergenteVentas();  ?>
        </body>
        </html>
        <?php
    }

    public function ventanaEmergenteVentas()
    {
        ?>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                prueba de impresion de ventana emergente 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
        <?php
    }
}

?>