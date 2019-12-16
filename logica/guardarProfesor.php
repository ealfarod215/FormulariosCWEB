<?php
$servername = "localhost";
$username = "root";
$password = "realp132413";
$dbname = "bd_casacultura";
$Nombre=$_POST["Nombre_Profesor"];
$Apellido1=$_POST["Apellido1_Profesor"];
$Apellido2=$_POST["Apellido2_Profesor"];
$Cedula=$_POST["Cedula_Profesor"];
$Curso=$_POST["Cursos_Profesor"];
$Telefonoo=$_POST["Telefono"];
$Correo_Profesor=$_POST["Correo_Profesor"];
$Direccioon=$_POST["Direccion"];


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
	$sql1 = "INSERT INTO profesor VALUES ('$Cedula', '$Nombre', '$Apellido1', '$Apellido2', '$Direccioon', '$Telefonoo', '$Correo_Profesor')";
    $sql2 = "INSERT INTO imparte VALUES ('$Cedula', '$Curso')";
	if (($conn->query($sql1) == TRUE)&& ($conn->query($sql2) == TRUE)) {
    	echo '<script>
        alert("Profesor Agregado");
        window.history.go(-1);
        location=location;
        </script>';
	} else {
        echo "Error: " . $sql1 . "<br>" . $conn->error;
        echo "Error: " . $sql2 . "<br>" . $conn->error;
        
	}
$conn->close();
?>