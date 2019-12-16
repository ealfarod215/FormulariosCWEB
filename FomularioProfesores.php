<?php $conexion = mysqli_connect("localhost", "root", "", "bd_casacultura"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="" type="text/css" href="logica/CSS/CSSFP.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/profesoresStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1a7b3b1445.js" crossorigin="anonymous"></script>
    <title>Formularios</title>
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
                                <li class="listaMenu"><a href="FomularioProfesores.html">Inicio</a> </li>
                                <li class="listaMenu"><a href="FomularioCursos.html">Cursos</a> </li>
                                <li class="listaMenu"><a href="FomularioEstudiantes.html">Estudiantes</a></li>
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
            <h1 class="Titulo" , id="TituloId">Formulario Profesor</h1>

            <div id="Formulario_Completo">
                <form id="Formulario_Profesor" action="logica/guardarProfesor.php" name="formulario" method="post">

                    <label for="">Nombre del Profesor</label>
                    <input type="text" name="Nombre_Profesor" id="Nombretxt">
                    <label for="">Primer Apellido</label>
                    <input type="text" name="Apellido1_Profesor" id="Apellido1txt">
                    <label for="">Segundo Apellido</label>
                    <input type="text" name="Apellido2_Profesor" id="Apellido2txt">
                    <label for="">Curso Seleccionado</label>
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

                    <label for="">Número de Identificación</label>
                    <input type="text" name="Cedula_Profesor" , id="Cedulatxt">
                    <label for="">Teléfono móvil</label>
                    <input type="text" name="Telefono" , id="Telefonotxt">
                    <label for="">Dirección de Residencia</label>
                    <textarea name="Direccion" rows="10" cols="40" , id="Direcciontxt"></textarea>

                    <input type="submit" value="Registrar docente" id="BotonRegistrar">
                    


                </form>
                <p id="Informacion">
                    La persona registrada Acepta los Terminos y Condiciones y haber leido la
                    Politica de Privacidad. La información de cada docente sera utilizada únicamente con el fin de
                    conllevar un registro activo para La Casa De La Cultura de Mora
                    y dicha informacion ser utilizada si asi lo requiera.
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