<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die($ruta); 
require_once($ruta.'/productos/models/ProductoModel.php');
require_once($ruta.'/itemsCuentas/models/ItemCuentaModel.php');
require_once($ruta.'/billetes/models/BilleteModel.php');
require_once($ruta.'/calculadora/views/calculadoraView.php');

class itemsCuentasView
{
  protected $productoModel;
  protected $itemModel;
  protected $billeteModel;
  protected $calculadoraView;
  
  public function __construct()
  {
      $this->productoModel = new ProductoModel();
      $this->itemModel = new ItemCuentaModel();
      $this->billeteModel = new BilleteModel();
      $this->calculadoraView = new calculadoraView();
  }


    public function modalCuentas()
    {
                ?>
            <div class="modal fade modal-lg" id="modalCuentas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cobro</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modalCuentasBody">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>
        <?php
      }
  public function listarItemsIdCuenta($items,$idCuenta)
  {
    $totalItems =  $this->itemModel->sumarItemsIdCuenta($idCuenta);
    $total  = 0;
    $noItem= 1;
    echo '<div  style="font-size: 18px;" class="mt-2">Cuenta No '.$idCuenta.'</div>';
    echo '<div class="row">'; 
        echo '<div class="col-lg-6" style="font-size: 35px;">Total: '. number_format($totalItems,0,",",".").'</div>';
        echo '<div class="col-lg-6">
                <button class="btn btn-primary" 
                        onclick="formuCobroCuenta('.$idCuenta.');"
                        data-bs-toggle="modal" data-bs-target="#modalCuentas"
                >Cobrar
                </button></div>';
    echo '</div>';

    echo '</div>';
     echo '<table class="table table-striped">'; 
     foreach($items as $item)
     {
       $infoProducto  =  $this->productoModel->traerProductoId($item['idProducto']); 
        echo '<tr>'; 
        // echo '<td>'.$noItem.'</td>';
        echo '<td>'.$infoProducto['descripcion'].'</td>';
        echo '<td align="right">'.$infoProducto['precio'].'</td>';
        echo '<td><button 
                  class="btn btn-secondary btn-sm"
                  onclick="eliminarItemCuenta('.$item['id'].');"
                  > 
        <i class="fas fa-trash"></i>
        </button></td>';
        echo '</tr>';
        $noItem++;
        $total += $infoProducto['precio'];
      }  
      // <i class="bi bi-trash"></i>
      echo '<tr>'; 
      // echo '<td></td>'; 
      echo '<td>Total:</td>'; 
      echo '<td align="right">'.number_format($total,0,",",".").'</td>'; 
      echo '</tr>';
      echo '</table>';
      $this->modalCuentas();
    }

    public function formuCobroCuenta($idCuenta)
    {
      $totalItems =  $this->itemModel->sumarItemsIdCuenta($idCuenta);
      $billetes =    $this->billeteModel->traerBilletes(); 
        ?>
      <div class="row">
          

            <div class="col-lg-9 row">
                          

                            <div class="col-lg-2  me-1 text-center">
                              <span>Cuenta_No</span>
                              <label class=" fs-3"><?php  echo $idCuenta; ?></label>
                            </div>
                              <div class="col-lg-3">
                                <label>Valor:</label>
                                <input class="form-control fs-3" id="totalItems"  value="<?php  echo $totalItems; ?>" onfocus="blur();">
                              </div>
                              <div class="col-lg-3">
                                <label>Pago:</label>
                                <input class="form-control fs-3" type="text" id="valorPagado" onkeyup="calculeDevolucion();">
                              </div>
                              <div class="col-lg-3">
                                <label>Devolver:</label>
                                <input class="form-control fs-3" type="text" id="valorDevuelto" onfocus="blur();">
                              </div>

                   
                    <div class="">
                      <?php  $this->calculadoraView->mostrarCalculadora();?>
                    </div>
             </div>

               <div class="row col-lg-3">
                    <div class="col-lg-12">
                      <button 
                            class="btn btn-secondary fs-3 w-100 btn-lg"   
                            onclick="registrarVenta(<?php  echo $idCuenta; ?>);"
                            >Registrar</button>
                    </div>

                    <div class="col-lg-3">
                                  <?php
                                  foreach($billetes as $billete)
                                  {
                                    ?>
                                      <div class="col-lg-2  me-1 mt-3">
                                          <img  width="130px;"  
                                                src="<?php  echo $billete['rutaBillete'] ?>"
                                                onclick="sumarValorPagado(<?php echo $billete['valor'];  ?>);"    
                                            >
                                      </div>
                                    <?php
                                  }
                                  ?>

                    </div>
             </div>


      </div>
        <script>
            function otroMensaje(){
              alert('este es otro mensaje ');
            }
        </script>

        <?php
    }

}