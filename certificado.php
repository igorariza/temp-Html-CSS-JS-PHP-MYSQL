<?php date_default_timezone_set("America/Bogota"); ?>
<?php
    $servername = "localhost";
    $database = "alfredob1_colcentral_edu";
    $username = "alfredob1_colcentral";
    $password = "colcentral*";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_close($conn);
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Institución educativa central de bachillerato integrado">
	<meta name="keywords" content="educacion">
	<meta name="author" content="groupar.co">
</head>
<page  backcolor="#FEFEFE"  footer="date;heure;page">
<p align="center">
INSTITUCIÓN EDUCATIVA CENTRAL DE BACHILLERATO INTEGRADO
NIVEL DE EDUCACIÓN: PREESCOLAR –BÁSICA PRIMARIA, BÀSICA SECUNDARIA 
Y AUTORIZADO POR LA SECRETARIA DE EDUCACIÓN MUNICIPAL SEGÚN RESOLUCIÓN  
DE RECONOCIMIENTO  OFICIAL N º 0522 DE DICIEMBRE  05 DEL 2019   
NIT   : 890306586-8. DANE: 176364000015 MEDIA 
</p>
<div>
&nbsp;
</div>

</page>  
</html>
<?php
    $content = ob_get_clean();
    // convert to PDF
    require('html2pdf.php');
    try
    {

	$pdf=new PDF_HTML();
	$pdf->SetFont('Arial','',12);
	$pdf->AddPage('P', 'Letter', 'es');
	$pdf->writeHTML($content, isset($_GET['vuehtml']));
	$pdf->Output();
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
?>