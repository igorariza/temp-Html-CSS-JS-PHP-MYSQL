<?php date_default_timezone_set("America/Bogota"); ?>
<?php     ob_start();     ?>
<style type="text/css">
.post-container {
    margin: 5px 5px 0 0;  
    border: 1px solid #333;
    overflow: auto
}
.post-thumb {
    float: left
}
.post-thumb img {
    display: block
}
.post-content {
    margin-left: 10px
}
</style>
<page  backcolor="#FEFEFE"  footer="date;heure;page">
<table style="width:50%" height = "350" align="center" class="post-container">
  <tr class="post-container">
    <td class="post-thumb"><img src="https://colcentral.edu.co/assets/img/LColcentral.png"  height="100" alt="" /></td>
    <td>
      <table>
        <tr><td class="post-content"><p align="center" style="font-weight: bold; font-size: 14pt;">
                INSTITUCIÓN EDUCATIVA CENTRAL DE BACHILLERATO INTEGRADO</p>
        </td></tr>
        <tr><td ><p align="center" style="font-weight: bold; font-size: 10pt;">
                NIVEL DE EDUCACIÓN: PREESCOLAR –BÁSICA PRIMARIA, BÀSICA SECUNDARIA 
                </p>
        </td></tr>
        <tr><td><p align="center" style="font-weight: bold; font-size: 10pt;">
 AUTORIZADO POR LA SECRETARIA DE EDUCACIÓN MUNICIPAL 
</p></td></tr>
        <tr><td><p align="center" style="font-weight: bold; font-size: 10pt;"> 
SEGÚN RESOLUCIÓN  DE RECONOCIMIENTO  OFICIAL N º 0522 DE DICIEMBRE  05 DEL 2019   
</p></td></tr>
        <tr><td><p align="center" style="font-weight: bold; font-size: 10pt;">  
NIT   : 890306586-8. DANE: 176364000015</p></td></tr>
      </table>
     </td>
   </tr>
</table>
<br>
<br>
<div align="center">
<p align="center" style="font-weight: bold; font-size: 16pt;"> CERTIFICA: </p>
</div>
<br>
<br>
<div>
<p style="font-size: 13pt; text-align: justify;">
Que el (la) estudiante, ARTEAGA SANCHEZ DANIELA con T.I. 1110292851, 
se encuentra matriculado (a) en esta institución en el grado NOVENO (09-01). 
De Educación básica secundaria.
</p>
</div>
<br>
<div>
<p style="font-size: 13pt;">
<b>Jornada Única </b>
<br>
CON UNA INTENSIDAD HORARIA DE  35 HORAS SEMANALES.
<br>
<br>
PERIODO LECTIVO 2021	
<br>
<br>			
<b>DANE:</b> 176364000015
<br>
<br>
<b>CALENDARIO</b> A.
<br>
<br>
<br>
</p>
</div>
<p style="font-size: 13pt; text-align: justify;">
Para constancia de lo anterior se firma la presenten en Jamundí a los diez (10) días del mes de agosto del año dos mil veintiuno (2021).
</p>
 <div>
 <br>
 <br>
 <br>
 <p style="font-size: 13pt;">
 <img src="https://colcentral.edu.co/assets/img/firma.png"  height="100" alt="" /><br>
 <b>RICARDO ZUÑIGA ORTEGA <br>
 Auxiliar Administrativo <br>
 Grado 05 </b>
</p>
</div>
<div>
<br>
<br>
<br>
<br>
<br>
<p align="center" style="font-size: 13pt;">
Sede Principal: Carrera 14  N° 12-11 Tel: 5191541 <br>
Sede N° 2: Calle 11 N° 13-142 Jamundí – Valle <br>
E-MAIL: ie.central@jamundi.gov.co <br>
</p>
</div>

</page> 
<?php
    require __DIR__.'/vendor/autoload.php';

    use Spipu\Html2Pdf\Html2Pdf;
    $content = ob_get_clean();
    try
    {
        $html2pdf = new HTML2PDF('P', 'Letter', 'es');
		$html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('boletin.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
    
?>