<?php
require('WriteHtml.php');

$pdf=new PDF_HTML();

$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(true, 15);

$pdf->AddPage();
$pdf->SetFont('Arial','B',14);


$pdf->SetFont('Arial','B',15); 
$htmlTable='<TABLE>
<TR>
<TD>Nombre Completo:</TD>
<TD>'.$_POST['Nombre'].'</TD>
</TR>

<TR>
	<TD>
	<TD>
</TR>

<TR>
	<TD>Edad:</TD>
	<TD>'.$_POST['Edad'].'</TD>
</TR>

<TR>
	<TD>
	<TD>
</TR>

<TR>
	<TD>Estatura:</TD>
	<TD>'.$_POST['Estatura'].'</TD>
</TR>

<TR>
	<TD>
	<TD>
</TR>

<TR>
	<TD>Tez:</TD>
	<TD>'.$_POST['Tez'].'</TD>
</TR>

<TR>
	<TD>
	<TD>
</TR>

<TR>
	<TD>Iris:</TD>
	<TD>'.$_POST['Iris'].'</TD>
</TR>

<TR>
	<TD>
	<TD>
</TR>

<TR>
	<TD>Contextura:</TD>
	<TD>'.$_POST['Contextura'].'</TD>
</TR>


<TR>
	<TD>
	<TD>
</TR>

<TR>
	<TD>Cabello:</TD>
	<TD>'.$_POST['Cabello'].'</TD>
</TR>

<TR>
	<TD>
	<TD>
</TR>

<TR>
	<TD>Vestimenta:</TD>
	<TD>'.$_POST['Vestimenta'].'</TD>
</TR>


<TR>
	<TD>
	<TD>
</TR>

<TR>
	<TD>Fecha de Extravio:</TD>
	<TD>'.$_POST['Fecha'].'</TD>
</TR>

<TR>
	<TD>
	<TD>
</TR>

<TR>
	<TD>Lugar de Extravio:</TD>
	<TD>'.$_POST['Lugar'].'</TD>
</TR>

<TR>
	<TD>
	<TD>
</TR>
</TABLE>';
$pdf->WriteHTML("<br><br><br>$htmlTable");
$pdf->SetFont('Arial','B',6);
$pdf->Output(); 
?>