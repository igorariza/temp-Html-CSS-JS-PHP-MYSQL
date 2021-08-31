<?php date_default_timezone_set("America/Bogota"); ?>
<?php
/**
 * HTML2PDF Librairy - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @author      Laurent MINGUET <webmaster@html2pdf.fr>
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */
    // get the HTML
    ob_start();
    ?>
    <?php include('../includes/conexionlista.php');
$cn=  Conectarse();
$codigo= $_GET['codigo'];
$jornada= $_GET['jornada'];
$colegio= $_GET['colegio'];
$documento=$_GET['documento'];
$ano=$_GET['ano'];
$k=1;
$jorn123=  mysql_query("SELECT nombre
FROM jornada
WHERE id_jornada =$jornada",$cn);
$jornada34=  mysql_fetch_array($jorn123); 
$nombre_sede=  mysql_query("SELECT nombre
FROM sedes
WHERE sede_cod =$colegio",$cn);
$nombre_sed=  mysql_fetch_array($nombre_sede);
$nombre_estudiante=  mysql_query("SELECT *
FROM usuarios_$ano
WHERE documento_estudiante=$documento",$cn);
$nombre_estudiant=  mysql_fetch_array($nombre_estudiante);
?>  
<style type="text/css">
<!--
table
{
	
	
    width:  100%;
	
	
}
th
{
    text-align: center;
	
   
	
   	
	
	
}
td
{
    text-align: left;
   
	
	
}
td.col1
{
    
    text-align: left;
	
}
p {margin: 2px 0;}
-->
</style>
<page  backcolor="#FEFEFE"  footer="date;heure;page">
<p align="center" style="font-weight: bold; font-size: 16pt;">
   INSTITUCIÓN EDUCATIVA CENTRAL DE BACHILLERATO INTEGRADO</p>
<div>
&nbsp;
</div>
<p align="center" style="font-weight: bold; font-size: 16pt;">
   LIBRO DE REGISTRO ESCOLAR</p>
<div>
&nbsp;
</div>
<table>
 <col style="width: 10%" class="col1">
    <col style="width: 25%">
    <col style="width: 30%">
    <col style="width: 15%">
    <col style="width: 20%">
 <tr>
  <th style="border: solid 0.5px #000;" bgcolor="#CCCCCC" colspan="2">
    JORNADA: 
    <?php echo utf8_encode($jornada34['nombre']); ?>
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
<?php echo $nombre_estudiant['grupo']?>
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
 <?php echo $nombre_sed['nombre']?> </span>
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
   <?php echo $nombre_estudiant['consecutivo']." - ".utf8_encode($nombre_estudiant['nombre']." ".$nombre_estudiant['apellido'])." - ".$nombre_estudiant['documento_estudiante'] ?> </p>
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
}else{$anoasig=$ano;}
$mensaje=0;
$areascarga=  mysql_query("SELECT distinct area
FROM asignacion WHERE jornada=$jornada AND grado=$codigo and ano=$anoasig order by area ASC",$cn);
while($areascargas= mysql_fetch_array($areascarga)){ 
    
$prome=  mysql_query("SELECT AVG(final) AS prom FROM notas_$ano where documento_estudiante_estudiantes=$documento and area='".$areascargas['area']."'",$cn);
$promedio= mysql_fetch_array($prome);
$areassnombre=  mysql_query("SELECT * from areas where id='".$areascargas['area']."'",$cn);
$areasnombre= mysql_fetch_array($areassnombre);
$numero1decimall=substr($promedio['prom'],0,1);
$numero2decimall=substr($promedio['prom'],2,1);
$notff=$numero1decimall.".".$numero2decimall;
  
if($notff == 2.9){
    
    $promedio_notaarea=3.0;
    
}else{
    
    $promedio_notaarea=$notff;
}
?>
<tr>
<td bgcolor="#CCCCCC" style="font-weight: bold; border: solid 0.5px #000; text-align:center;">
    <?php echo $areascargas['area'] ?>&nbsp;
</td>
<td bgcolor="#CCCCCC"  style="font-weight: bold; border: solid 0.5px #000;">
    <?php echo utf8_encode($areasnombre['area']) ?>&nbsp;
</td>
<td bgcolor="#CCCCCC" bgcolor="#CCCCCC" style="font-weight: bold; border: solid 0.5px #000; text-align:center;">
    &nbsp;
</td>
<td bgcolor="#CCCCCC"  style="border: solid 0.5px #000;">&nbsp;
    
</td>
<td  bgcolor="#CCCCCC" style="font-weight: bold; border: solid 0.5px #000; text-align:center;">
    <?php echo number_format($promedio_notaarea, 1, ",",".");  ?>&nbsp;
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
$nota_final_area=  mysql_query("SELECT *
FROM asignacion WHERE jornada=$jornada AND grado=$codigo and ano=$anoasig and area='".$areascargas['area']."' order by materia ASC",$cn);
while($nota_final_are= mysql_fetch_array($nota_final_area)){ 
 // promedio asignatura
$notafinalarea=  mysql_query("SELECT AVG(final) AS promfinal,id_materia_materia
FROM notas_$ano
WHERE documento_estudiante_estudiantes=$documento and id_materia_materia='".$nota_final_are['materia']."' ",$cn);
$notafinalare= mysql_fetch_array($notafinalarea);
//
// nota recuperacion
if($ano==2016){
$notarecuperacion=  mysql_query("SELECT recuperacion
FROM notas_$ano
WHERE documento_estudiante_estudiantes=$documento and id_materia_materia='".$nota_final_are['materia']."' and id_periodo_periodos=3 ",$cn);
$notarecuperacio= mysql_fetch_array($notarecuperacion);
}else{
$notarecuperacion=  mysql_query("SELECT recuperacion
FROM notas_$ano
WHERE documento_estudiante_estudiantes=$documento and id_materia_materia='".$nota_final_are['materia']."' and id_periodo_periodos=4 ",$cn);
$notarecuperacio= mysql_fetch_array($notarecuperacion);       
}
//
$numero1decimal=substr($notafinalare['promfinal'],0,1);
$numero2decimal=substr($notafinalare['promfinal'],2,1);
$notf=$numero1decimal.".".$numero2decimal;
if($notf == 2.9){
    
    $notf=3.0;
    
}else{
    
    $notf=$notf;
}
if($notf <= 2.8 and $notarecuperacio['recuperacion'] <= 2.9){
    
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
 // nombre asignatura
$nombre_asignatura=  mysql_query("SELECT *
FROM materia
WHERE id_materia='".$nota_final_are['materia']."' ",$cn);
$nombre_asignatur= mysql_fetch_array($nombre_asignatura);
//
?>
<tr>
<td style="border: solid 0.5px #000; text-align:right;">
    <?php echo $nota_final_are['materia'] ?>&nbsp;
</td>
<td  style="border: solid 0.5px #000;">
    <?php echo  utf8_encode($nombre_asignatur['nombremateria']) ?>&nbsp;
</td>
<td style="border: solid 0.5px #000; text-align:center;">
    <?php echo $nota_final_are['ih'] ?>&nbsp;
</td>
<td  style="border: solid 0.5px #000;">&nbsp;
    
</td>
<td style="border: solid 0.5px #000; text-align:right;">
    <?php echo number_format($notf,1, ",","."); ?>&nbsp;
</td>
<td  style="border: solid 0.5px #000; text-align:center;">
    <?php echo utf8_encode($desempeno)?>&nbsp;
</td>
<td  style="border: solid 0.5px #000; text-align:center;">
    <?php echo $notarecuperacio['recuperacion'] ?>&nbsp;
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
    $content = ob_get_clean();
    // convert to PDF
    require_once(dirname(__FILE__).'/../html2pdf.class.php');
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