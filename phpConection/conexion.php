<?php
//Servidor
$host="localhost";
//Usuario
$user="root";
//Password
$pw="";
//Nombre de la base de datos
$bd="prueba_cursos";
//Establecer la conexion
$conexion=mysqli_connect($host,$user,$pw,$bd);
//verificar la conexion
if(!$conexion){
    echo'
    <script>
    alert("Error al conectar a la Base de Datos para el proyecto");
     window.history.go(-1);
    </script>
    ';
}
else{
    echo'
    <script>
    alert("Conectada a la base de datos");
     
    </script>
    ';
}
?>