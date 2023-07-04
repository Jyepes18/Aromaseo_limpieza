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
    $this->Cell(50,10,'Reportes de Proveedores',0,0,'c');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(32, 10, 'Documento', 1, 0, 'c', 0);
    $this->Cell(15,10, 'T.D', 1, 0, 'c', 0);
    $this->Cell(35,10, 'Nombre', 1, 0, 'c', 0);
    $this->Cell(35,10, 'Apellido', 1, 0, 'c', 0);
    $this->Cell(25,10, 'Telefono', 1, 0, 'c', 0);
    $this->Cell(46,10, 'Correo', 1, 1, 'c', 0);
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
$consulta = "SELECT * FROM  proveedor ";
$resultado = $mysqli->query($consulta);


//Esta haciendo el pdf
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
//ciclo while para traer los datos permanentemente
while($row = $resultado->fetch_assoc()){
    $pdf->Cell(32,10, $row['documento'], 1, 0, 'c', 0);
    $pdf->Cell(15,10, $row['tipo_doc'], 1, 0, 'c', 0);
    $pdf->Cell(35,10, $row['nombre'], 1, 0, 'c', 0);
    $pdf->Cell(35,10, $row['apellido'], 1, 0, 'c', 0);
    $pdf->Cell(25,10, $row['telefono'], 1, 0, 'c', 0);
    $pdf->Cell(46,10, $row['correo'], 1, 1, 'c', 0);
}
$pdf->Output();
?>