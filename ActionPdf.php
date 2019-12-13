<?php
require('WriteHtml.php');
$nombre=utf8_decode($_POST['Nombre']);
$edad=$_POST['Edad'];
$metros=$_POST['estaturaUno'];
$cm=$_POST['estaturaDos'];
$mide=$metros.".".$cm." "."Mts";
$extra=utf8_decode($_POST['extras']);
$tez=utf8_decode($_POST['Tez']);
$iris=utf8_decode($_POST['Iris']);
$contextura=utf8_decode($_POST['Contextura']);
$cabello=utf8_decode($_POST['Cabello']);
$ropa=utf8_decode($_POST['Vestimenta']);
$fecha=$_POST['Fecha'];
$lugar=utf8_decode($_POST['Lugar']);
$texto=utf8_decode("Años");

$nombreFoto=$_FILES['Foto']['name'];
$guardado=$_FILES['Foto']['tmp_name'];
$todo='fotos/'.$nombreFoto;

//Esto es para poder subir una foto
if($_FILES['Foto']['error']>0)
{
	echo "malo";
}
else
{
	$permitido = array('image/png','image/jpeg');
	$limite=3000;
	if(in_array($_FILES['Foto']['type'],$permitido) && $_FILES['Foto']['size']<=$limite*1024)
	{
		if (!file_exists('fotos')) {
		    mkdir('fotos',0777,true);
		    if (file_exists('fotos')) {
		        if(move_uploaded_file($guardado,'fotos/'.$nombreFoto))
		        {
		            
		        }
		        else
		        {
		            
		        }
		            # code...
		    }
		        # code...
		}
		else
		{
		    if(move_uploaded_file($guardado,'fotos/'.$nombreFoto))
		    {
		        
		    }
		    else
		    {
		       
		    }
		}
	}
}

$pdf=new PDF_HTML('L','mm','letter');
$pdf->AliasNbPages();

$pdf->AddPage();
$pdf->SetXY(3,54); 
$pdf->Cell( 60, 20, $pdf->Image($todo, $pdf->GetX(), $pdf->GetY(),90,130), 0, 0, 'L', false);
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
$pdf->SetFont('Arial','B',30);
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


$pdf->SetFillColor(180,202,226);
$pdf->SetTextColor(2,71,93);

$pdf->SetXY(95,63);
$pdf->SetFont('Arial','B',11); 
$pdf->Cell(60,10,"Edad: ",0,0,'',False);
$pdf->SetFont('Arial','',11); 
$pdf->Cell(60,10,$edad,0,0,'',False);
$pdf->SetXY(162,63);
$pdf->Cell(60,10,$texto,0,0,'',False);
$pdf->SetFont('Arial','B',11); 
$pdf->SetXY(190,63);
$pdf->Cell(60,10,"Extras: ",0,0,'',false);
$pdf->SetFont('Arial','',11); 
$pdf->SetXY(210,63);
$pdf->MultiCell(40,4,$extra,0,0,'',false);


$pdf->SetXY(95,68);
$pdf->SetFont('Arial','B',11); 
$pdf->Cell(60,10,"Estatura: ",0,0,'',False);
$pdf->SetFont('Arial','',11); 
$pdf->Cell(60,10,$mide,0,0,'',False);

$pdf->SetXY(95,73);
$pdf->SetFont('Arial','B',11); 
$pdf->Cell(60,10,"Tez: ",0,0,'',False);
$pdf->SetFont('Arial','',11); 
$pdf->Cell(60,9,$tez,0,0,'',False);

$pdf->SetXY(95,78);
$pdf->SetFont('Arial','B',11); 
$pdf->Cell(60,11,"Iris: ",0,0,'',False);
$pdf->SetFont('Arial','',11); 
$pdf->Cell(60,11,$iris,0,0,'',False);

$pdf->SetXY(95,83);
$pdf->SetFont('Arial','B',11); 
$pdf->Cell(60,10,"Contextura: ",0,0,'',False);
$pdf->SetFont('Arial','',11); 
$pdf->Cell(60,10,$contextura,0,0,'',False);

$pdf->SetXY(95,88);
$pdf->SetFont('Arial','B',11); 
$pdf->Cell(60,10,"Cabello: ",0,0,'',False);
$pdf->SetFont('Arial','',11); 
$pdf->Cell(60,10,$cabello,0,0,'',False);

$pdf->SetXY(95,95);
$pdf->SetFont('Arial','B',11); 
$pdf->Cell(60,10,"Vestimenta: ",0,0,'',False);
$pdf->SetFont('Arial','',11);
$pdf->MultiCell(40,4,$ropa,0,0,'',False);

$pdf->SetXY(95,114);
$pdf->SetFont('Arial','B',11); 
$pdf->Cell(60,10,"Fecha de desaparicion: ",0,0,'',False);
$pdf->SetFont('Arial','',11); 
$pdf->Cell(60,10,utf8_decode($fecha),0,0,'',False);

$pdf->SetXY(95,119);
$pdf->SetFont('Arial','B',11); 
$pdf->Cell(60,10,"Lugar de desaparicion: ",0,0,'',False);
$pdf->SetFont('Arial','',11); 
$pdf->Cell(60,10,$lugar,0,0,'',False);

$pdf->SetXY(160,140);
$pdf->SetFont('Arial','B',10); 
$pdf->SetTextColor(2,71,93);
$pdf->Cell(60,10,"Brigada de Ubicacion de Personas Metropolitana",0,0,'',false);
$pdf->SetXY(189,145);
$pdf->Cell(60,10,"Telefono: 22 708 21 78",0,0,'',false);
$pdf->SetXY(163,150);
$pdf->Cell(60,10,"Correo electronico: ",0,0,'',false);
$pdf->SetXY(208,150);
$pdf->SetFont('Arial','U',10);
$pdf->SetTextColor(0,0,255);
$pdf->Cell(60,10,"briup@investigaciones.cl",0,0,'',false);

$pdf->Image('pdfi134.jpeg',155,162,75,30,'JPG');



$pdf->Output(); 
?>
