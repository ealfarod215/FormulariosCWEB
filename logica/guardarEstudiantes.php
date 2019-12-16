<?php
$servername = "localhost";
$username = "root";
$password = "realp132413";
$dbname = "bd_casacultura";
$Nombre=$_POST["Nombre_Estudiante"];
$Apellido1=$_POST["Apellido1_Estudiante"];
$Apellido2=$_POST["Apellido2_Estudiante"];
$Cedula=$_POST["Cedula_Estudiante"];
$Correo=$_POST["Correo_Estudiante"];
$Telefonoo=$_POST["Telefono"];
$Direccioon=$_POST["Direccion"];


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
	$sql = "INSERT INTO estudiante VALUES ('$Cedula', '$Nombre', '$Apellido1', '$Apellido2', '$Direccioon', '$Telefonoo', '$Correo')";

	if ($conn->query($sql) === TRUE) {
    	echo '<script>
        alert("Estudiante Agregado");
        window.history.go(-1);
        location=location;
        </script>';
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
        ;
	}
$conn->close();
?>