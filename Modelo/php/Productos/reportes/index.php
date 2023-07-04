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
    $this->Cell(50,10,'Reportes de Productos',0,0,'c');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(40, 10, 'Tipo producto', 1, 0, 'c', 0);
    $this->Cell(35,10, 'Categoria ', 1, 0, 'c', 0);
    $this->Cell(30,10, 'Nombre', 1, 0, 'c', 0);
    $this->Cell(20,10, 'Valor', 1, 0, 'c', 0);
    $this->Cell(35,10, 'Descripcion', 1, 0, 'c', 0);
    $this->Cell(32,10, 'Cod_pedido', 1, 1, 'c', 0);
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
$consulta = "SELECT * FROM producto ";
$resultado = $mysqli->query($consulta);


//Esta haciendo el pdf
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
//ciclo while para traer los datos permanentemente
while($row = $resultado->fetch_assoc()){
    $pdf->Cell(40,10, $row['Tipo_producto'], 1, 0, 'c', 0);
    $pdf->Cell(35,10, $row['Categoria'], 1, 0, 'c', 0);
    $pdf->Cell(30,10, $row['Nombre'], 1, 0, 'c', 0);
    $pdf->Cell(20,10, $row['Valor'], 1, 0, 'c', 0);
    $pdf->Cell(35,10, $row['Descripción'], 1, 0, 'c', 0);
    $pdf->Cell(32,10, $row['codigo_pedido'], 1, 1, 'c', 0);
}
$pdf->Output();
?>