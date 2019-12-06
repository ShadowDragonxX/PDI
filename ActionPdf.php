<?php
require('WriteHtml.php');
$nombre=$_POST['Nombre'];
$edad=$_POST['Edad'];
$mide=$_POST['Estatura'];
$tez=$_POST['Tez'];
$iris=$_POST['Iris'];
$contextura=$_POST['Contextura'];
$cabello=$_POST['Cabello'];
$ropa=$_POST['Vestimenta'];
$fecha=$_POST['Fecha'];
$lugar=$_POST['Lugar'];
$pdf=new PDF_HTML('L','mm','letter');
$pdf->AliasNbPages();

$pdf->AddPage();

$pdf->SetFont('Arial','',15); 
$pdf->SetTitle($nombre);
$pdf->Image('pdi.jpg',20,5,45,38,'JPG');

$pdf->SetTextColor(2,71,93);
$pdf->SetFillColor(228,223,62);
$pdf->SetFont('Arial','B',60);
$pdf->SetXY(75,0); 
$pdf->Cell(210,20,"Persona Extraviada",0,0,'C',True);

$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(6,72,93);
$pdf->SetFont('Arial','B',45);
$pdf->SetXY(75,21); 
$pdf->Cell(210,20,$nombre,0,0,'C',True);

$pdf->SetTextColor(2,71,93);
//se crean las tablas
$pdf->SetFillColor(180,202,226);
$pdf->SetXY(95,54);
$pdf->Cell(190,141,"",0,0,'',True);
$pdf->SetXY(95,58);
$pdf->SetFont('Arial','B',15); 
$pdf->SetFillColor(6,72,93);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(105,7,"Descripcion Fisica y Morfologica",0,0,'C',True);

$pdf->SetXY(95,65);
$pdf->SetFillColor(180,202,226);
$pdf->SetTextColor(2,71,93);
$pdf->Cell(60,10,"Nombre Completo:",0,0,'',True);
$pdf->SetFont('Arial','',13); 
$pdf->Cell(60,10,$nombre,0,0,'',True);

$pdf->SetXY(95,73);
$pdf->SetFont('Arial','B',13); 
$pdf->Cell(60,10,"Edad: ",0,0,'',True);
$pdf->SetFont('Arial','',13); 
$pdf->Cell(60,10,$edad,0,0,'',True);


$pdf->SetXY(95,80);
$pdf->SetFont('Arial','B',13); 
$pdf->Cell(60,10,"Estatura: ",0,0,'',True);
$pdf->SetFont('Arial','',13); 
$pdf->Cell(60,10,$mide,0,0,'',True);

$pdf->SetXY(95,87);
$pdf->SetFont('Arial','B',13); 
$pdf->Cell(60,10,"Tez: ",0,0,'',True);
$pdf->SetFont('Arial','',13); 
$pdf->Cell(60,9,$tez,0,0,'',True);

$pdf->SetXY(95,94);
$pdf->SetFont('Arial','B',13); 
$pdf->Cell(60,11,"Iris: ",0,0,'',True);
$pdf->SetFont('Arial','',13); 
$pdf->Cell(60,11,$iris,0,0,'',True);

$pdf->SetXY(95,101);
$pdf->SetFont('Arial','B',13); 
$pdf->Cell(60,10,"Contextura: ",0,0,'',True);
$pdf->SetFont('Arial','',13); 
$pdf->Cell(60,10,$contextura,0,0,'',True);

$pdf->SetXY(95,108);
$pdf->SetFont('Arial','B',13); 
$pdf->Cell(60,10,"Cabello: ",0,0,'',True);
$pdf->SetFont('Arial','',13); 
$pdf->Cell(60,10,$cabello,0,0,'',True);

$pdf->SetXY(95,115);
$pdf->SetFont('Arial','B',13); 
$pdf->Cell(60,10,"Vestimenta: ",0,0,'',True);
$pdf->SetFont('Arial','',13); 
$pdf->Cell(60,10,$ropa,0,0,'',True);

$pdf->SetXY(95,122);
$pdf->SetFont('Arial','B',13); 
$pdf->Cell(60,10,"Fecha: ",0,0,'',True);
$pdf->SetFont('Arial','',13); 
$pdf->Cell(60,10,$fecha,0,0,'',True);

$pdf->SetXY(95,129);
$pdf->SetFont('Arial','B',13); 
$pdf->Cell(60,10,"Lugar: ",0,0,'',True);
$pdf->SetFont('Arial','',13); 
$pdf->Cell(60,10,$lugar,0,0,'',True);

$pdf->SetXY(160,140);
$pdf->SetFont('Arial','B',13); 
$pdf->SetTextColor(2,71,93);
$pdf->Cell(60,10,"Brigada de Ubicacion de Personas Metropolitana",0,0,'',false);
$pdf->SetXY(189,145);
$pdf->Cell(60,10,"Telefono: 22 708 21 78",0,0,'',false);
$pdf->SetXY(163,150);
$pdf->Cell(60,10,"Correo electronico: ",0,0,'',false);
$pdf->SetXY(208,150);
$pdf->SetFont('Arial','U',13);
$pdf->SetTextColor(0,0,255);
$pdf->Cell(60,10,"briup@investigaciones.cl",0,0,'',false);




$pdf->Output(); 
?> 