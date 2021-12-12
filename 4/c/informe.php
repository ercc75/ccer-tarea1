<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Desarrollo web en entorno cliente - Unidad 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../../inicio.html">DWES - Unidad 1</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Ejercicio 1
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                                <li><a class="dropdown-item" href="../../1/1.html">Desarrollador front-end, back-end y
                                        full-stack</a>
                                </li>
                                <li><a class="dropdown-item" href="../../1/1.html#b1">Framework CSS y ejemplos</a></li>
                                <li><a class="dropdown-item" href="../../1/1.html#c1">WCAG e importancia de la
                                        validación</a></li>
                                <li><a class="dropdown-item" href="../../1/1.html#d1">Servidor web, HTTP, Apache y
                                        XAMPP</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Ejercicio 2
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                <li><a class="dropdown-item" href="../../2/2.html">Instalación de XAMPP en Windows</a>
                                </li>
                                <li><a class="dropdown-item" href="../../2/2.html#b2">Instalación de XAMPP en Linux</a>
                                </li>
                                <li><a class="dropdown-item" href="../../2/2.html#c2">Ejecución de PHP embebido y PHP
                                        puro</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Ejercicio 3
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                                <li><a class="dropdown-item" href="../../3/a/3a.html">Formulario de recogida y validación
                                        de datos</a>
                                </li>
                                <li><a class="dropdown-item" href="../../3/b/3b.html">Formulario para generación de CV</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink4" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Ejercicio 4
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink4">
                                <li><a class="dropdown-item" href="../a/4a.html">Juego de piedra, papel, tijera,
                                        lagarto o
                                        Spock</a></li>
                                <li><a class="dropdown-item" href="../b/4b.html">Cálculo del área y longitud de una
                                        circunferencia</a></li>
                                <li>
                                    <a class="dropdown-item" href="4c.html">Informe de salud: IMC y
                                        metabolismo
                                        basal</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink5" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Ejercicio 5
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink5">
                                <li><a class="dropdown-item" href="../../5/5.html">Sistema de control de versiones</a></li>
                                <li><a class="dropdown-item" href="../../5/5.html#b5">Qué es Git y Github</a></li>
                                <li><a class="dropdown-item" href="../../5/5.html#c5">Creación de una cuenta en Github</a>
                                </li>
                                <li><a class="dropdown-item" href="../../5/5.html#d5">Subida de un proyecto a Github</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container" style="padding-top: 80px; padding-bottom: 30px; height: 90vh; overflow-y: auto">
        <h3 style="font-weight: bold">Informe de salud: IMC y metabolismo basal</h3>
        <br />
        <div class="container bg-white p-4" style="width:560px; border: 20px solid #198754">
            <h3>Informe de salud</h3><br />
            
            <?php
                function filtrado($datos) { //Filtro de datos general
                    $datos = trim($datos); // Elimina espacios antes y después de los datos
                    $datos = stripslashes($datos); // Elimina backslashes \
                    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
                    return $datos;
                }
                if (!isset($_POST["sexo"])) {
                    $errores[]="No has seleccionado el sexo. Vuelve a la página de introducción de datos.";
                } else {
                    $sexo=filtrado($_POST["sexo"]);
                }
                $edad=filtrado($_POST["edad"]);
                $altura=filtrado($_POST["altura"]);
                $peso=filtrado($_POST["peso"]);
                $valor_edad=preg_match("/^[0-9]{1,3}([.,][0-9]+)?/", $edad, $resultados_edad);
                $valor_altura=preg_match("/[0-9]{2,3}/", $altura, $resultados_altura);
                $valor_peso=preg_match("/^[0-9]{1,3}([.,][0-9]+)?/", $peso, $resultados_peso);
                
                if (empty($edad)) {
                    $errores[]="No has introducido la edad. Vuelve a la página de introducción de datos.";
                } elseif (!$valor_edad) {
                    $errores[]="El dato de edad introducido no es correcto. Vuelve a la página de introducción de datos.";
                }
                if (empty($altura)) {
                    $errores[]="No has introducido la altura. Vuelve a la página de introducción de datos.";
                } elseif (!$valor_altura) {
                    $errores[]="El dato de altura introducido no es correcto. Vuelve a la página de introducción de datos.";
                }
                if (empty($peso)) {
                    $errores[]="No has introducido el peso. Vuelve a la página de introducción de datos.";
                }elseif (!$valor_peso) {
                    $errores[]="El dato de peso introducido no es correcto. Vuelve a la página de introducción de datos.";
                }
                
                if (isset($errores)) { //Si se crea el array $errores es porque ha habido algún error y el bucle foreach imprime los errores
                    foreach ($errores as $valor) {
                        echo nl2br($valor . "\n");
                    }
                } else { //Si no existe el array $errores es porque no se ha producido ningún error y se imprimen los resultados
                    $imc=$peso/pow($altura/100, 2);
                    if ($sexo==="hombre") {
                        $mb=13.397*$peso + 4.799*$altura + 5.677*$edad + 88.362;
                    } else {
                        $mb=9.247*$peso + 3.098*$altura + 4.33*$edad + 447.593;
                    }
                    echo nl2br("El sexo es " . $sexo . "\n");
                    echo nl2br("La edad es " . $edad . " año/s\n");
                    echo nl2br("La altura es " . $altura . " cm\n");
                    echo nl2br("El peso es " . $peso . " kg\n\n");
                    echo nl2br("Según estos datos introducidos, el Índice de Masa Corporal (IMC) es de " . $imc . " kg/m²\n");
                    echo "y el metabolismo basal es de " . $mb . " kcal/día";
                }
            ?>
            
            <p style="text-align: right"><a href="4c.html">Volver a introducir datos</a></p>
        </div>
    </div>

    <footer>
        <div class="container-fluid text-center p-3" style="background-color: lightgrey;">
            <p> Eduardo Rafael Cañizares Caballero - 2º DAWS - 2021</p>
        </div>
    </footer>
</body>

</html>