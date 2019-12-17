<?php
$servername = "localhost";
$username = "root";
$password = "realp132413";
$dbname = "bd_casacultura";
$Cedula=$_POST["Cedula_Estudiante"];



$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
    $sql1 = "DELETE FROM estudiante WHERE cedula ='$Cedula'";
    $sql2 = "DELETE FROM asigna WHERE estudiante_cedula= '$Cedula'";
	if (($conn->query($sql2) === TRUE)&&($conn->query($sql1) == TRUE)) {
    	echo '<script>
        alert("Estudiante Eliminado");
        window.history.go(-1);
        location=location;
        </script>';
	} else {
    	echo "Error: " . $sql1 . "<br>" . $conn->error;
        echo "Error: " . $sql2 . "<br>" . $conn->error;
	}
$conn->close();
?>