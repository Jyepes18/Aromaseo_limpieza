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
    $this->Cell(50,10,'Reportes de vehiculo',0,0,'c');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(95, 10, 'placa', 1, 0, 'c', 0);
    $this->Cell(95,10, 'tipo de vehiculo', 1, 1, 'c', 0);
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
$consulta = "SELECT * FROM vehiculo ";
$resultado = $mysqli->query($consulta);


//Esta haciendo el pdf
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
//ciclo while para traer los datos permanentemente
while($row = $resultado->fetch_assoc()){
    $pdf->Cell(95,10, $row['placa'], 1, 0, 'c', 0);
    $pdf->Cell(95,10, $row['tipo_vehiculo'], 1, 1, 'c', 0);
}
$pdf->Output();
?>