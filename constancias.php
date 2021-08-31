<?php date_default_timezone_set("America/Bogota"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Institución educativa central de bachillerato integrado">
	<meta name="keywords" content="educacion">
	<meta name="author" content="groupar.co">

	<title>Colcentral</title>

	<!--  favicon -->
	<link rel="shortcut icon" href="assets/img/ico/favicon.png">
	<!--  apple-touch-icon -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/img/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="assets/img/ico/apple-touch-icon-57-precomposed.png">

	<!-- animate CSS -->
	<link rel="stylesheet" href="assets/css/animate.min.css" media="all" />
	<!-- FontAwesome CSS -->
	<link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css" media="all" />
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css" media="all" />
	<!-- Bootsnav Menu -->
	<link rel="stylesheet" href="assets/css/bootsnav.css" media="all" />
	<!-- Bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" media="all" />
	<!-- Style CSS -->
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
    

</head>

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
    echo "Connected successfully";
    mysqli_close($conn);
    
?>
<?php
?>
</html>