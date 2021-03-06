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
                                        validaci??n</a></li>
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
                                <li><a class="dropdown-item" href="../../2/2.html">Instalaci??n de XAMPP en Windows</a>
                                </li>
                                <li><a class="dropdown-item" href="../../2/2.html#b2">Instalaci??n de XAMPP en Linux</a>
                                </li>
                                <li><a class="dropdown-item" href="../../2/2.html#c2">Ejecuci??n de PHP embebido y PHP
                                        puro</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Ejercicio 3
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                                <li><a class="dropdown-item" href="../../3/a/3a.html">Formulario de recogida y validaci??n
                                        de datos</a>
                                </li>
                                <li><a class="dropdown-item" href="../../3/b/3b.html">Formulario para generaci??n de CV</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink4" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Ejercicio 4
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink4">
                                <li><a class="dropdown-item" href="../../4/a/4a.html">Juego de piedra, papel, tijera,
                                        lagarto o
                                        Spock</a></li>
                                <li><a class="dropdown-item" href="4b.html">C??lculo del ??rea y longitud de una
                                        circunferencia</a></li>
                                <li>
                                    <a class="dropdown-item" href="../../4/c/4c.html">Informe de salud: IMC y
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
                                <li><a class="dropdown-item" href="../../5/5.html#b5">Qu?? es Git y Github</a></li>
                                <li><a class="dropdown-item" href="../../5/5.html#c5">Creaci??n de una cuenta en Github</a>
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
        <h3 style="font-weight: bold">C??lculo del ??rea y longitud de una circunferencia</h3>
        <br />
        <div class="container bg-white p-4" style="width:560px; border: 20px solid #198754">
            <h3>??rea y longitud de circunferencia</h3><br />

            <?php
                function filtrado($datos) { //Filtro de datos general
                    $datos = trim($datos); // Elimina espacios antes y despu??s de los datos
                    $datos = stripslashes($datos); // Elimina backslashes \
                    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
                    return $datos;
                }
                
                $radCirc=filtrado($_POST["radCirc"]);
                $valor=preg_match("/^[0-9]+([.,][0-9]+)?/", $radCirc, $resultados);
                if (empty($radCirc)) {
                    $errores[]="No has introducido un n??mero. Vuelve a la p??gina de introducci??n de datos.";
                } elseif (!$valor) {
                    $errores[]="El dato introducido no es correcto. Vuelve a la p??gina de introducci??n de datos.";
                }

                if (isset($errores)) { //Si se crea el array $errores es porque ha habido alg??n error y el bucle foreach imprime los errores
                    foreach ($errores as $valor) {
                        echo nl2br($valor . "\n");
                    }
                } else { //Si no existe el array $errores es porque no se ha producido ning??n error y se imprimen los resultados
                    $area=pow($resultados[0], 2) * 3.1416;
                    $longitud= 2 * 3.1416 * $resultados[0];
                    echo nl2br("El ??rea de la circunferencia de radio " . $resultados[0] . " es " . $area . " unidades??\n");
                    echo "y su longitud es " . $longitud . " unidades.";
                }
            ?>

            <p style="text-align: right"><a href="4b.html">Introducir nuevo radio</a></p>
        </div>
    </div>

    <footer>
        <div class="container-fluid text-center p-3" style="background-color: lightgrey;">
            <p> Eduardo Rafael Ca??izares Caballero - 2?? DAWS - 2021</p>
        </div>
    </footer>
</body>

</html>