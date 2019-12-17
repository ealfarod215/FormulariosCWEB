<?php $conexion = mysqli_connect("localhost", "root", "realp132413", "bd_casacultura"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="" type="text/css" href="logica/CSS/CSSFP.css">

    <meta charset="UTF-8">
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/profesoresStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1a7b3b1445.js" crossorigin="anonymous"></script>
    <title>Modificar Profesor</title>
</head>

<body>
    <header id="Encabezado" class="HyFtamano">

        <div class="menu-wrap">
            <input type="checkbox" class="toggler">
            <div class="hamburger">
                <div></div>
            </div>
            <div class="menu">
                <div>
                    <div>
                        <nav>
                            <ul>
                            <li class="listaMenu"><a href="Menu.html">Inicio</a> </li>
                                <li class="listaMenu"><a href="FomularioProfesores.php">Eliminar Estudiante</a> </li>
                                <li class="listaMenu"><a href="EliminarProfesores.php">Eliminar Profesor</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- -->
    <div id="cuerpo">
        <section id="Activos">
            <h1 class="Titulo" , id="TituloId">Modificar Profesor</h1>
            <p>Para modificar la información de un profesor se debe de ingresar su numero de identificación.</p>
            <div id="Formulario_Completo">
                <form id="Formulario_Profesor" action="logica/LogicaModificarProfesor.php" name="formulario" method="post">
                    <label for="">Número de Identificación</label>
                    <input type="text" name="Cedula_Profesor"  id="Cedulatxt">


                    <label for="">Nuevo curso a enseñar</label>
                    <select id="CursoCombobox" name="Cursos_Profesor">
                        <?php
                        $sql = "SELECT nombre, codigo_curso FROM curso";
                        $rec = mysqli_query($conexion, $sql);
                        while ($row = mysqli_fetch_array($rec)) {
                            ?>

                            <option value="<?php echo $row['codigo_curso'] ?>"><?php echo $row['nombre'] ?></option>

                        <?php
                        }
                        ?>
                    </select>

                    
                    <label for="">Nuevo número telefónico</label>
                    <input type="text" name="Telefono"  id="Telefonotxt">
                    <label for="">Nuevo correo electrónico</label>
                    <input type="text" name="Correo_Profesor"  id="Correotxt">
                    <label for="">Nueva dirección residencial</label>
                    <textarea name="Direccion" rows="10" cols="40"  id="Direcciontxt"></textarea>

                    <input type="submit" value="Registrar profesor" id="BotonRegistrar">
                    


                </form>
                <p id="Informacion">
                    El encargado del sistema de registrado acepta la responsabilidad de modificar información crucial sobre los profesores,
                    además de tener en cuenta el hecho de que una vez cambiada la información no puede ser recuperada debido a que el sistema
                    no tiene un método para deshacer los cambios realizados.
                </p>
            </div>

        </section>

    </div>

    <footer id="Pie" class="HyFtamano">
        <div id="contenido">
            <nav>
                <ul>
                    <li>
                        <p>Tel. trab.: (506) 2249-3124</p>
                    </li>
                    <li>
                        <p>Correo electrónico: ccdemora@gmail.com</p>
                    </li>
                    <li>
                        <p>Correo electrónico alternativo: karina.zuniga@mora.go.crs</p>
                    </li>
                    <li>
                        <div>
                            <p class="contenedorIconos">Encuentre más en:</p>
                            <a href="https://www.facebook.com/CasaCulturaMora/?ref=br_rs"><i class="fab fa-facebook">
                                </i></a>
                            <a class="cambiarcolor" href="https://www.youtube.com/channel/UCIm9gyNg1kmIUYpPsCregew"><i class="fab fa-youtube"></i></a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </footer>

    <!--Fin del div completo -->
</body>

</html>