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
$Curso=$_POST["Cursos_Estudiante"];
$Telefonoo=$_POST["Telefono"];
$Direccioon=$_POST["Direccion"];


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
    $sql1 = "INSERT INTO estudiante VALUES ('$Cedula', '$Nombre', '$Apellido1', '$Apellido2', '$Direccioon', '$Telefonoo', '$Correo')";
    $sql2 = "INSERT INTO asigna VALUES ('$Cedula', '$Curso')";

	if (($conn->query($sql1) === TRUE)&&($conn->query($sql2) == TRUE)) {
    	echo '<script>
        alert("Estudiante Agregado");
        window.history.go(-1);
        location=location;
        </script>';
	} else {
    	echo "Error: " . $sql1 . "<br>" . $conn->error;
        
	}
$conn->close();
?>