<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die($ruta); 
require_once($ruta.'/formasdepago/models/FormaPagoModel.php');


class formasDePagoView
{
  protected $model;

  
  public function __construct()
  {
      $this->model = new FormaPagoModel();

  }

  public function mostrarFormasDePago()
  {
    $formasPago =  $this->model->traerFormasPago();
    ?>
    <label>Forma de Pago:</label>
    <select id="idFormaPago" class="form-control">
        <option value="">Seleccione...</option>
        <?php 
        foreach($formasPago as $formaPago)
        {
            echo ' <option value="'.$formaPago['id'].'">'.$formaPago['descripcion'].'</option>';
        }
        ?>
    </select>
    <?php
  }


}