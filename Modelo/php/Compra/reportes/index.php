<?php
require('documento/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('logo.png',75,5,60);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    //Mover el titulo hacia abajo
    $this->Ln(40);
    // Movernos a la derecha
    $this->Cell(70);
    // Título
    $this->Cell(50,10,'Reportes de Domicilios',0,0,'c');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(25, 10, 'Nombre', 1, 0, 'c', 0);
    $this->Cell(25,10, 'Telefono', 1, 0, 'c', 0);
    $this->Cell(32,10, 'Documento', 1, 0, 'c', 0);
    $this->Cell(20,10, 'Fecha', 1, 0, 'c', 0);
    $this->Cell(25,10, 'Producto', 1, 0, 'c', 0);
    $this->Cell(25,10, 'Cantidad', 1, 0, 'c', 0);
    $this->Cell(18,10, 'V_uni', 1, 0, 'c', 0);
    $this->Cell(20,10, 'V_total', 1, 1, 'c', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

//llamar a la bd
require 'cn.php';
$consulta = "SELECT * FROM compra";
$resultado = $mysqli->query($consulta);


//Esta haciendo el pdf
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
//ciclo while para traer los datos permanentemente
while($row = $resultado->fetch_assoc()){
    $pdf->Cell(25,10, $row['nombre_proveedor'], 1, 0, 'c', 0);
    $pdf->Cell(25,10, $row['tel_proveedor'], 1, 0, 'c', 0);
    $pdf->Cell(32,10, $row['doc_proveedor'], 1, 0, 'c', 0);
    $pdf->Cell(20,10, $row['fecha_compra'], 1, 0, 'c', 0);
    $pdf->Cell(25,10, $row['producto'], 1, 0, 'c', 0);
    $pdf->Cell(25,10, $row['cantidad'], 1, 0, 'c', 0);
    $pdf->Cell(18,10, $row['valor_unitario'], 1, 0, 'c', 0);
    $pdf->Cell(20,10, $row['valor_total'], 1, 1, 'c', 0);
}
$pdf->Output();
?>