<?php date_default_timezone_set("America/Bogota"); ?>
<?php
ob_start();
include('../includes/conexionlista.php');
$servidor='localhost';	
$basededatos='colcentr_notas';	
$usuario='colcentr_iariza';	
$clave='ia2127374';	
$cn = new mysqli($servidor, $usuario, $clave, $basededatos);
$codigo= $_GET['codigo'];
$jornada= $_GET['jornada'];
$colegio= $_GET['colegio'];
$ano=$_GET['ano'];
if($ano == '2014' || $ano == '2015' || $ano == '2016'){
    $nombre='nombre';
    $apellido='apellido';
}else{
    $nombre='nombre_estudiante';
    $apellido='apellido_estudiante';
}

$k=1;

$usuariosgrupo=  mysqli_query($cn,"SELECT consecutivo, documento_estudiante, estado_estudiante, $nombre, $apellido, grupo, nombre_jornada, nombre_sede
                                FROM usuarios_$ano, jornada, sedes
                                WHERE jornada.id_jornada=$jornada AND
                                usuarios_$ano.grado_cod= $codigo AND sedes.sede_cod = $colegio AND usuarios_$ano.jornada=$jornada AND estado_estudiante=1
                                ORDER BY $apellido, $nombre ASC");

while($usuariosgrupos= mysqli_fetch_array($usuariosgrupo)){
$documento=$usuariosgrupos['documento_estudiante'];

?>  
<style type="text/css">
table{width:  100%;}
th{text-align: center;}
td{text-align: left;}
td.col1{text-align: left;}
p {margin: 2px 0;}
</style>

<page  backcolor="#FEFEFE"  footer="date;heure;page">
<p style="font-weight: bold; font-size: 16pt;">
   INSTITUCIÓN EDUCATIVA CENTRAL DE BACHILLERATO INTEGRADO</p>

<div>
&nbsp;
</div>
<p style="font-weight: bold; font-size: 16pt;">
   LIBRO DE REGISTRO ESCOLAR</p>

<div>
&nbsp;
</div>
<!-- tablee -->
<table>
 <col style="width: 10%" class="col1">
    <col style="width: 25%">
    <col style="width: 30%">
    <col style="width: 15%">
    <col style="width: 20%">
 <tr>
  <th style="border: solid 0.5px #000;" bgcolor="#CCCCCC" colspan="2">
    JORNADA: 

    <?php echo utf8_encode($usuariosgrupos['nombre_jornada']); ?>
</th>    
 <!--<th style="border: none" rowspan="2" align="center" background="#FEFEFE"><img  src="../imagenes/4.png" height="80"> 
  </th>-->
     <th style="border: none; align: center;" colspan="2" ><p align="center" style="font-weight: bold; font-size: 14pt;">
   </p> 
   <!-- <p style="font-weight: bold; font-size: 12px"><span style="font-size: 12px">(Artículo 16 Decreto 1290 de 2009)</span></p> --></th>

<th style="border: solid 0.5px #000;" bgcolor="#CCCCCC">
    FOLIO: 

    <?php echo $k; ?>
</th> 
</tr>
<tr>
<th style="border: none" align="center"><span style="font-weight: bold; font-size:10pt">
NIT</span></th>
<th style="border: none" align="center" ><span style="font-weight: bold; font-size:10pt">
890306586-8</span></th>

<th rowspan="3" style="border: none;" align="center" background="#FEFEFE">
    <img  src="../imagenes/4.jpg" height="90"> 
  </th>
  
  <th style="border: none" align="center">
      <span style="font-weight: bold; font-size:10pt">
GRADO
      </span>
  </th>
  <th style="border: none" align="center">
      <span style="font-weight: bold; font-size:10pt">
      <?php echo utf8_encode($usuariosgrupos['grupo']); ?>
      </span>
  </th>
</tr>

<tr>

<th style="border: none" align="center">
      <span style="font-weight: bold; font-size:10pt">
 SEDE</span> 
</th>
<th style="border: none" align="center">
      <span style="font-weight: bold; font-size:10pt">
      <?php echo utf8_encode($usuariosgrupos['nombre_sede']); ?> </span>
</th>
<th style="border: none" align="left" colspan="1" ><span style="font-weight: bold; font-size:10pt">
 MODALIDAD</span>
</th>
<th style="border: none" align="left" colspan="1" ><span style="font-weight: bold; font-size:10pt">
 Académico</span>
</th>
</tr>
<tr>
<th style="border: none" align="center">
      <span style="font-weight: bold; font-size:10pt">
DANE </span>
</th>
<th style="border: none" align="left" colspan="1"><span style="font-weight: normal; font-size:10pt"> 
<?php echo $colegio?> </span>
</th>
<th style="border: none" align="left" colspan="1" ><span style="font-weight: bold; font-size:10pt">
 AÑO LECTIVO</span>
</th>
<th style="border: none" align="left" colspan="1" ><span style="font-weight: bold; font-size:10pt">
 <?php echo $ano ?></span>
</th>
</tr>
</table>
<div>
&nbsp;
</div>
<div>
&nbsp;
</div>

<p align="center" style="font-weight: bold; font-size: 16pt;">
   <?php echo $usuariosgrupos['consecutivo']." - ".utf8_encode($usuariosgrupos[$nombre]." ".$usuariosgrupos[$apellido])." - ".$usuariosgrupos['documento_estudiante'] ?> </p>
 <div>
&nbsp;
</div>
<div>
&nbsp;
</div>
<table>
    <col style="width: 5%" class="col1">
    <col style="width: 40%">
    <col style="width: 5%">
    <col style="width: 5%">
    <col style="width: 10%">
    <col style="width: 10%">
    <col style="width: 11%">
    <col style="width: 7%">
    <col style="width: 7%">
    
<thead> <tr>
      <th bgcolor="#CCCCCC"><span style="font-weight: bold; font-size:
12px">No</span></th>
     <th bgcolor="#CCCCCC"><span style="font-weight: bold; font-size:
12px">AREAS Y ASIGNATURAS</span></th>
     <th bgcolor="#CCCCCC"><span style="font-weight: bold; font-size:
12px">Horas</span></th>
     <th bgcolor="#CCCCCC"><span style="font-weight: bold; font-size:
12px">Faltas</span></th><th bgcolor="#CCCCCC"><span style="font-weight: bold; font-size:
12px">Calificación</span></th>
<th bgcolor="#CCCCCC"><span style="font-weight: bold; font-size:
12px">Desempeño</span></th>
     <th bgcolor="#CCCCCC"><span style="font-weight: bold; font-size:
12px">Plan de Mejoramiento</span></th><th bgcolor="#CCCCCC"><span style="font-weight: bold; font-size:
12px">Acta</span></th>
     <th bgcolor="#CCCCCC"><span style="font-weight: bold; font-size:
12px">Fecha</span></th>
     
        </tr>
    </thead>
<?php
if($ano == 2012){
    
    $anoasig=2014;
}else{
    $anoasig=$ano;
}
$mensaje=0;
$areascarga=  mysqli_query($cn,"SELECT t.area AS numarea, n.area AS nomarea, AVG(g.final) AS prom 
                                FROM notas_$ano AS g 
                                JOIN asignacion AS t ON t.area = g.area
                                JOIN areas AS n ON n.id = g.area 
                                WHERE g.documento_estudiante_estudiantes=$documento 
                                GROUP BY t.area 
                                ORDER BY t.area ASC");
while($areascargas= mysqli_fetch_array($areascarga)){ 
    $numero1decimall=substr($areascargas['prom'],0,1);
    $numero2decimall=substr($areascargas['prom'],2,1);
    $notff=$numero1decimall.".".$numero2decimall;
  
if($notff == 2.9){    
    $promedio_notaarea=3.0;    
}else{   
    $promedio_notaarea=$notff;
}
?>
<tr>
<td bgcolor="#CCCCCC" style="font-weight: bold; border: solid 0.5px #000; text-align:center;">
    <?php echo $areascargas['numarea'] ?>&nbsp;
</td>
<td bgcolor="#CCCCCC"  style="font-weight: bold; border: solid 0.5px #000;">
    <?php echo utf8_encode($areascargas['nomarea']) ?>&nbsp;
</td>
<td bgcolor="#CCCCCC" bgcolor="#CCCCCC" style="font-weight: bold; border: solid 0.5px #000; text-align:center;">
    &nbsp;
</td>
<td bgcolor="#CCCCCC"  style="border: solid 0.5px #000;">&nbsp;
    
</td>
<td  bgcolor="#CCCCCC" style="font-weight: bold; border: solid 0.5px #000; text-align:center;">
    <?php echo number_format((float)$promedio_notaarea, 1, ",",".");  ?>&nbsp;
</td>
<td bgcolor="#CCCCCC"  style="border: solid 0.5px #000;">&nbsp;
    
</td>
<td bgcolor="#CCCCCC" style="font-weight: bold; border: solid 0.5px #000; text-align:center;">&nbsp;
    
</td>
<td bgcolor="#CCCCCC"  style="border: solid 0.5px #000;">&nbsp;
    
</td>
<td bgcolor="#CCCCCC"  style="border: solid 0.5px #000;">&nbsp;
    
</td>
        
</tr>
<?php
$nota_final_area=  mysqli_query($cn,"SELECT t.area AS Narea, t.materia AS Nmateria, t.ih, t.nombreMateria, g.recuperacion, AVG(g.final) AS prom
                                    FROM notas_$ano as g
                                    JOIN asignacion AS t ON t.materia = g.id_materia_materia
                                    WHERE g.documento_estudiante_estudiantes= $documento and t.area= '".$areascargas['numarea']."'
                                    GROUP BY g.id_materia_materia");
while($nota_final_are= mysqli_fetch_array($nota_final_area, MYSQLI_BOTH)){ 
//
$numero1decimal=substr($nota_final_are['prom'],0,1);
$numero2decimal=substr($nota_final_are['prom'],2,1);
$notf=$numero1decimal.".".$numero2decimal;
if($notf == 2.9){    
    $notf=3.0;    
}else{    
    $notf=$notf;
}
if($notf <= 2.8 and $nota_final_are['recuperacion'] <= 2.9){    
   $mensaje++;
}

$desempeno="";
if ($notf >= 4.6) {
$desempeno="SUPERIOR";
} else if ($notf >= 4 AND $notf <= 4.5) {
$desempeno="ALTO";
} else if ($notf >= 3 AND $notf <= 3.9) {
$desempeno="BASICO";
} else {
$desempeno="BAJO";
}
//
?>
<tr>
<td style="border: solid 0.5px #000; text-align:right;">
    <?php echo $nota_final_are['Nmateria'] ?>&nbsp;
</td>
<td  style="border: solid 0.5px #000;">
<?php echo $nota_final_are['nombreMateria'] ?>
    &nbsp;
</td>
<td style="border: solid 0.5px #000; text-align:center;">
    <?php echo $nota_final_are['ih'] ?>&nbsp;
</td>
<td  style="border: solid 0.5px #000;">&nbsp;
    
</td>
<td style="border: solid 0.5px #000; text-align:right;">
    <?php echo number_format((float)$notf,1, ",","."); ?>&nbsp;
</td>
<td  style="border: solid 0.5px #000; text-align:center;">
    <?php echo utf8_encode($desempeno)?>&nbsp;
</td>
<td  style="border: solid 0.5px #000; text-align:center;">
    <?php echo $nota_final_are['recuperacion'] ?>&nbsp;
</td>
<td style="border: solid 0.5px #000; text-align:center;">
    <?php //echo $k ?>&nbsp;
</td>
<td  style="border: solid 0.5px #000;">
    <?php //echo utf8_encode($nom." ".$ape)?>&nbsp;
</td>        
</tr>
<?php } }?>
</table>
<?php

if($mensaje >= 3){    
    $mensajee= "El estudiante NO fue promovido";   
}elseif($mensaje == 0){    
    $mensajee= "El estudiante fue promovido";
}else{    
   $mensajee= "El estudiante tiene pendiente asignaturas";     
}
?>
<div>
&nbsp;
</div>
<table>
    <col style="width: 50%" class="col1">
    <col style="width: 50%">
    	<tr>
<td colspan="2"><span style="font-weight: bold; font-size:16px; text-align:left">

<p align="left"><?php echo $mensajee ?></p></span>
<p align="center">&nbsp;</p>
</td>
</tr>
	
<tr>
<td ><span style="font-weight: bold; font-size:12px; text-align:left">
<p align="left">Observaciones:______________________________________________________________________________________________________</p>
<p align="center">&nbsp;</p>
<p align="left">____________________________________________________________________________________________________________________</p></span>
</td>
</tr>
	
	
</table>
</page>  





 <?php
}
    $content = ob_get_clean();

    // convert to PDF
    require_once(dirname(__FILE__).'/../html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'Letter', 'es');
		$html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('libros.pdf', 'D');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
?>