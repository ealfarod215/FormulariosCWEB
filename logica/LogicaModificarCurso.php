<?php
$servername = "localhost";
$username = "root";
$password = "realp132413";
$dbname = "bd_casacultura";
$Codigo=$_POST["Codigo_Curso"];
$NumeroMax=$_POST["Numero_Max_Cupos"];
$Dia=$_POST["Dia"];
$Horario=$_POST["Horario_Curso"];


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
    // verificar que el profesor Exista
	$sql = "UPDATE curso SET maximo_cupos='$NumeroMax', dia='$Dia', horario='$Horario' WHERE codigo_curso='$Codigo'";

	if ($conn->query($sql) === TRUE) {
    	echo '<script>
        alert("Curso Modificado");
        window.history.go(-1);
        location=location;
        </script>';
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
        ;
	}
$conn->close();
?>