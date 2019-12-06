<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$algo= $_POST['Nombre'];
}

?>
<html>
<head>
<link rel="stylesheet" href="pdf.css" />
</head>
	<body>
		<table class="centered">
            <tr>
                <td>Nombre Completo: </td>
                <td><?php echo $_POST['Nombre'];?></td>
            </tr>
            <tr>
                <td>Edad: </td>
                <td>  </td>
            </tr>
            <tr>
                <td>Estatura: </td>
                <td>  </td>
            </tr>
            <tr>
                <td>Tez: </td>
                <td>  </td>
            </tr>
            <tr>
                <td>Iris </td>
                <td>  </td>
            </tr>
            <tr>
                <td>Contextura: </td>
                <td>  </td>
            </tr>
            <tr>
                <td>Cabello: </td>
                <td>  </td>
            </tr>
            <tr>
                <td>Vestimenta:  </td>
                <td>  </td>
            </tr>
            <tr>
                <td>Fecha de extravio </td>
                <td>  </td>
            </tr>
            <tr>
                <td>Lugar de extravio: </td>
                <td>  </td>
            </tr>

        </table>
	</body>
</html>