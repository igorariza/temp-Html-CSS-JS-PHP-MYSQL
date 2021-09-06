<?php date_default_timezone_set("America/Bogota"); ?>
<?php 
//connect and select the database 
$connect = mysql_connect("localhost","alfredob1_colcentral","ia2127374*") or die('Database Not Connected. Please Fix the Issue! ' . mysql_error());
mysql_select_db("alfredob1_colcentral_edu", $connect);
// get the contents of the JSON file 
$jsonCont = file_get_contents('studJson.json');
//decode JSON data to PHP array 
$content = json_decode($jsonCont, true);
//Fetch the details of Student 
$std_id = $content['stdID'];
//
$std_year = $content['year'];
$std_document = $content['document_id'];
$std_type = $content['type_id'];
$std_name = $content['first_name'];
$std_last = $content['last_name'];
$std_gender = $content['gender'];
$std_sede = $content['sede'];
$std_jornada = $content['jornada'];
$std_grado = $content['grado_cod'];
$std_group = $content['group'];
$std_date = $content['date_birth'];
$std_active = $content['is_active'];
//Insert the fetched Data into Database 
$query = "INSERT INTO users(`year`, document_id, `type_id`, first_name, last_name, gender, sede, jornada, grado_cod, group, date_birth, is_active) 
                 VALUES('$std_year', '$std_document', '$std_type', '$std_name', '$std_last', '$std_gender', '$std_sede', '$std_jornada', '$std_grado', '$std_group', '$std_date', '$std_active')";
if(!mysql_query($query,$connect)) { 
 die('Error : Query Not Executed. Please Fix the Issue! ' . mysql_error());
} else{ 
 echo "Data Inserted Successully!!!";
} 
?>