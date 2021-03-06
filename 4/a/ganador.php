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
                                <li><a class="dropdown-item" href="4a.html">Juego de piedra, papel, tijera,
                                        lagarto o
                                        Spock</a></li>
                                <li><a class="dropdown-item" href="../b/4b.html">C??lculo del ??rea y longitud de una
                                        circunferencia</a></li>
                                <li>
                                    <a class="dropdown-item" href="../c/4c.html">Informe de salud: IMC y
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
        <h3 style="font-weight: bold">Juego de piedra, papel, tijeras, lagarto ?? Spock</h3>
        <br />
        <div class="container bg-white p-4" style="width:560px; border: 20px solid #198754">
            <h3>Piedra, papel, tijeras, lagarto ?? Spock</h3>
            <p>Pasa el rat??n por cada imagen para conocer qui??n gana</p>
            <abbr title="piedra: aplasta al lagarto y a las tijeras"><img src="img/piedra.jpg" alt="piedra" width="150px" height="155px" /></abbr>
            <abbr title="papel: envuelve a la piedra y a Spock"><img src="img/papel.jpg" alt="papel" width="150px" height="155px" /></abbr>
            <abbr title="tijeras: corta al lagarto y al papel"><img src="img/tijeras.jpg" alt="tijeras" width="150px" height="155px" /></abbr>
            <abbr title="lagarto: se come el papel y pica a Spock"><img src="img/lagarto.jpg" alt="lagarto" width="150px" height="155px" /></abbr>
            <abbr title="Spock: rompe la piedra y las tijeras"><img src="img/spock.jpg" alt="Spock" width="150px" height="155px" /></abbr><br /><br />
            
            <?php
                $jugador=$_POST["opcion"];
                $numero=rand(1, 5);
                if ($numero===1) {
                    $maquina="piedra";
                }
                if ($numero===2) {
                    $maquina="papel";
                }
                if ($numero===3) {
                    $maquina="tijeras";
                }
                if ($numero===4) {
                    $maquina="lagarto";
                }
                if ($numero===5) {
                    $maquina="Spock";
                }

                echo nl2br("T?? has elegido " . $jugador . ", la m??quina ha elegido " . $maquina . "\n");
            
                if ($jugador==="piedra" && ($maquina==="lagarto" || $maquina==="tijeras")) {
                    echo "Enhorabuena, HAS GANADO!";
                } elseif ($jugador==="papel" && ($maquina==="piedra" || $maquina==="Spock")) {
                    echo "Enhorabuena, HAS GANADO!";
                } elseif ($jugador==="tijeras" && ($maquina==="lagarto" || $maquina==="papel")) {
                    echo "Enhorabuena, HAS GANADO!";
                } elseif ($jugador==="lagarto" && ($maquina==="papel" || $maquina==="Spock")) {
                    echo "Enhorabuena, HAS GANADO!";
                } elseif ($jugador==="Spock" && ($maquina==="piedra" || $maquina==="tijeras")) {
                    echo "Enhorabuena, HAS GANADO!";
                } elseif ($jugador==="piedra" && $maquina==="piedra") {
                    echo "No est?? mal, has empatado con la m??quina!";
                } elseif ($jugador==="papel" && $maquina==="papel") {
                    echo "No est?? mal, has empatado con la m??quina!";
                } elseif ($jugador==="tijeras" && $maquina==="tijeras") {
                    echo "No est?? mal, has empatado con la m??quina!";
                } elseif ($jugador==="lagarto" && $maquina==="lagarto") {
                    echo "No est?? mal, has empatado con la m??quina!";
                } elseif ($jugador==="Spock" && $maquina==="Spock") {
                    echo "No est?? mal, has empatado con la m??quina!";
                } else {
                    echo "Lo siento, has perdido";
                }
            ?>

            <p style="text-align: right"><a href="4a.html">Volver a jugar</a></p>
        </div>
    </div>

    <footer>
        <div class="container-fluid text-center p-3" style="background-color: lightgrey;">
            <p> Eduardo Rafael Ca??izares Caballero - 2?? DAWS - 2021</p>
        </div>
    </footer>
</body>

</html>