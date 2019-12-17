<?php
$servername = "localhost";
$username = "root";
$password = "realp132413";
$dbname = "bd_casacultura";
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
    $sql1 = "UPDATE estudiante SET direccion='$Direccioon', numero_telefono='$Telefonoo', correo_electronico='$Correo' WHERE cedula='$Cedula'";
    $sql2 = "UPDATE asigna SET curso_codigo_curso='$Curso' WHERE estudiante_cedula='$Cedula'";

	if (($conn->query($sql1) === TRUE)&&($conn->query($sql2) == TRUE)) {
    	echo '<script>
        alert("Estudiante Modificado");
        window.history.go(-1);
        location=location;
        </script>';
	} else {
    	echo "Error: " . $sql1 . "<br>" . $conn->error;
        echo "Error: " . $sql2 . "<br>" . $conn->error;
	}
$conn->close();
?>