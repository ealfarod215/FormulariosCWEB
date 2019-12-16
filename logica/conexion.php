<?php
//Servidor
$host="localhost";
//Usuario
$user="root";
//Password
$pw="";
//Nombre de la base de datos
$bd="bd_casacultura";
//Establecer la conexion
$conexion=mysqli_connect($host,$user,$pw,$bd);
$conexion=mysqli_connect("localhost","root","","bd_casacultura");
?>