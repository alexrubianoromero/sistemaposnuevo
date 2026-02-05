<?php



class ventasView
{
    public function listarVentas($ventas)
    {
        // echo 'listado de ventas ';
        ?>
         <div class="mt-2 col-lg-4" >
            <h3>VENTAS</h3>
             
            <table class="table table-striped table-hover">
                 <thead>
                    <tr>
                        <th scope="col">IdVenta</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Pdf</th>
               
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
                    echo '</tr>';
                }
               ?> 
               </tbody>
            </table>
        </div>
        <?php
    }
}

?>