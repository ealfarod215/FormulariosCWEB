<?php
require'conexion.php';
$Nombre=$_POST['Nombre_Estudiante'];
$Apellido1=$_POST['Apellido1_Estudiante'];
$Apellido2=$_POST['Apellido2_Estudiante'];
$Curso=$_POST['CursoCombobox'];
$Cedula=$_POST['Cedula_Estudiante'];
$Correo=$_POST['Correo_Estudiante'];
$Telefono=$_POST['Telefono'];
$Direccion=$_POST['Direccion'];

    $insertarDatos="INSERT INTO estudiantes (Nombre,Apellido1,Apellido2,Curso,Cedula,Telefono,Correo,Direccion)VALUES('$Nombre','$Apellido1','$Apellido2','$Curso','$Cedula','$Correo','$Telefono','$Direccion')";
    $ejecutarInsertar=mysqli_query($conexion,$insertarDatos);

    if(!$ejecutarInsertar){

        echo"Incorrecto";
    } else{
        "Correcto";
    }
        /*echo'
        <script>
        alert("Error en la linea sql");
        location.href="../FormularioEstudiantes.html";
         window.history.go(-1);
        </script> ';*/
    
?>