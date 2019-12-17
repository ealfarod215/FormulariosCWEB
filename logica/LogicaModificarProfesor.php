<?php
$servername = "localhost";
$username = "root";
$password = "realp132413";
$dbname = "bd_casacultura";
$Cedula=$_POST["Cedula_Profesor"];
$Curso=$_POST["Cursos_Profesor"];
$Telefonoo=$_POST["Telefono"];
$Correo=$_POST["Correo_Profesor"];
$Direccioon=$_POST["Direccion"];


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
    $sql1 = "UPDATE profesor SET direccion='$Direccioon', numero_telefono='$Telefonoo', correo_electronico='$Correo' WHERE cedula='$Cedula'";
    $sql2 = "UPDATE imparte SET curso_codigo_curso= '$Curso' WHERE profesor_cedula='$Cedula'";
	if (($conn->query($sql1) == TRUE)&& ($conn->query($sql2) == TRUE)) {
    	echo '<script>
        alert("Profesor Modificado");
        window.history.go(-1);
        location=location;
        </script>';
	} else {
        echo "Error: " . $sql1 . "<br>" . $conn->error;
        echo "Error: " . $sql2 . "<br>" . $conn->error;
	}
$conn->close();
?>