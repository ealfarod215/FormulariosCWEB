<?php
$servername = "localhost";
$username = "root";
$password = "realp132413";
$dbname = "bd_casacultura";
$Codigo=$_POST["Codigo_Curso"];
$Nombre=$_POST["Nombre_Curso"];
$Cedula=$_POST["Cedula_Profesor"];
$NumeroMax=$_POST["Numero_Max_Cupos"];
$NumeroMin=$_POST["Numero_Min_Cupos"];
$Dia=$_POST["Dia"];
$Horario=$_POST["Horario_Curso"];


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
    // verificar que el profesor Exista
	$sql = "INSERT INTO Curso VALUES ('$Codigo', '$Nombre','$NumeroMax', '$NumeroMin', '$Dia', '$Horario')";

	if ($conn->query($sql) === TRUE) {
    	echo '<script>
        alert("Curso Agregado");
        window.history.go(-1);
        location=location;
        </script>';
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
        ;
	}
$conn->close();
?>