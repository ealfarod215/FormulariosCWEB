<?php
$servername = "localhost";
$username = "root";
$password = "realp132413";
$dbname = "bd_casacultura";
$Codigo=$_POST["Codigo"];




$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
    // verificar que el profesor Exista
	$sql = "DELETE FROM curso WHERE codigo_curso='$Codigo'";

	if ($conn->query($sql) === TRUE) {
    	echo '<script>
        alert("Curso Eliminado");
        window.history.go(-1);
        location=location;
        </script>';
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
        ;
	}
$conn->close();
?>