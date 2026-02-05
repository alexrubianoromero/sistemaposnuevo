<?php
// echo '<pre>';
//     print_r($_REQUEST);
//     echo '</pre>';
//     die();
$raiz= $_SERVER['DOCUMENT_ROOT'];
date_default_timezone_set('America/Bogota');
require_once($raiz.'/fpdf/fpdf.php');
$ruta = dirname(dirname(__FILE__));
// die($ruta);

require_once($ruta .'/models/VentaModel.php');
require_once($ruta.'/itemsCuentas/models/ItemCuentaModel.php');
require_once($ruta.'/formasdepago/models/FormaPagoModel.php');
require_once($ruta.'/productos/models/ProductoModel.php');

$ventaModel = new VentaModel();
$itemModel = new ItemCuentaModel();
$formaPagoModel = new FormaPagoModel();
$productoModel = new ProductoModel();
// die('paso11');
$infoVenta = $ventaModel->traerVentaId($_REQUEST['idVenta']);
$items = $itemModel->listarItemsIdCuenta($infoVenta['idCuenta']);
$infoFormaPago = $formaPagoModel->traerFormaPagoId($infoVenta['idFormaPago']);

$pdf=new FPDF();

$pdf->AddPage();
    $pdf->Ln(20);
   
    // $pdf->Image('../../logos/logokaymo.png',15,20,50);

    $pdf->SetFont('Arial','B',15);
    // Movernos a la derecha
    $pdf->Cell(5);
    // T�tulo
    $pdf->Cell(40,10,'VENTA No ',1,0,'');
    $pdf->Cell(30,10,$infoVenta['id'],1,1,'C');

    $pdf->SetFont('Arial','',10);
    // $pdf->Ln(2);
    $pdf->Cell(5);
    $pdf->Cell(40,6,'FECHA ',0,0,'');
    $pdf->Cell(30,6,substr($infoVenta['fecha'],0,10),0,1,'');

    $pdf->Cell(5);
    $pdf->Cell(40,6,'FORMA DE PAGO ',0,0,'');
    $pdf->Cell(30,6,$infoFormaPago['descripcion'],0,1,'');

    $pdf->Ln(5);
    $pdf->Cell(5);
    $pdf->Cell(23,6,'PROD',0,0,'L');
    $pdf->Cell(7,6,'CANT',0,0,'C');
    $pdf->Cell(20,6,'PRECIO',0,0,'R');
    $pdf->Cell(20,6,'TOTAL',0,1,'R');

    foreach($items as $item)
    {
        $infoProducto = $productoModel->traerProductoId($item['idProducto']);
        $pdf->Cell(5);
        $pdf->Cell(23,6,$infoProducto['nombre'],0,0,'');
        $pdf->Cell(7,6,$item['cantidad'],0,0,'');
        $pdf->Cell(20,6,number_format($item['precio'], 0, ',', '.'),0,0,'R');
        $pdf->Cell(20,6,number_format($item['total'], 0, ',', '.'),0,1,'R');

    }

        $pdf->Cell(5);
        $pdf->Cell(23,6,'',0,0,'');
        $pdf->Cell(7,6,'',0,0,'');
        $pdf->Cell(20,6,'TOTAL',0,0,'R');
        $pdf->Cell(20,6,number_format($infoVenta['valorPagado'], 0, ',', '.'),0,1,'R');

    $pdf->Ln(5);
    $pdf->Cell(5);
    $pdf->Cell(40,6,'VALOR PAGADO ',0,0,'');
    $pdf->Cell(30,6,number_format($infoVenta['valorPagado'], 0, ',', '.'),0,1,'R');

    $pdf->Cell(5);
    $pdf->Cell(40,6,'VALOR DEVUELTO ',0,0,'');
    $pdf->Cell(30,6,number_format($infoVenta['valorPagado'], 0, ',', '.'),0,1,'R');

$pdf->Cell(5);
$pdf->MultiCell(70,6,'',0,1,'');
$pdf->Output();
?>