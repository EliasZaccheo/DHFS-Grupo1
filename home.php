<!DOCTYPE html>
<?php include_once("./php/model/parts.php"); ?>
<html lang="es" dir="ltr">
  <head>
    <?php Parts::head_of() ?>
    <title>Wise Game</title>
</head>

<body>
    <?php Parts::header_of("TRIVIA") ?>
    <main>
        <section class="contenedor sobre-nosotros">
        <a class="boton" href="play.php" target="_blank">PLAY</a>
            <h2 class="titulo">Únete a Wise Game, suma puntos y compite con tus amigos.</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/wisegame.png" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span></span>Divertido</h3>
                    <p> Es una forma de entretenimiento con amigos y familiares.</p>
                    <h3><span></span>Con niveles de complejidad.</h3>
                    <p> sumando puntos pasarás de nivel</p>
                    <h3><span></span>Didáctico</h3>
                    <p>Aprenderás distintas temáticas y te convertiras en experto!!.</p>
                    <h3><span></span>competitivo</h3>
                    <p>Arma tu perfil en nuestro sitio y empieza a ser primero en el Ranking</p>
                </div>
            </div>
        </section>
        <section class="tematicas">
            <div class="contenedor">
                <h2 class="titulo">Tematicas que encontrarás en Wise Game:</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="img/ciencia.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>ciencias</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/Cultura.png" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Cultura</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/entretenimiento.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Entretenimiento</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/gastronomia.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Gastronomia</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/deportes.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Deportes</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/historia.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Historia</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/art.jpeg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Arte</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/farandula.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Farandula</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clientes contenedor">
            <h2 class="titulo">Ranking de usuarios</h2>
            <div class="cards">
                <div class="card">
                    <img src="img/usersProfiles/Melina.suarez15.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Melina Suarez</h4>
                        <p>PUESTO 1°</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/usersProfiles/Augusto_f20.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Agusto Fernandez</h4>
                        <p>PUESTO 2°</p>
                    </div>
                  </div>

                    <div class="card">
                        <img src="img/usersProfiles/birdperson.jpg" alt="">
                        <div class="contenido-texto-card">
                            <h4>Bird Person</h4>
                            <p>PUESTO 3°</p>
                        </div>
                </div>
            </div>
        </section>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Colaboradores</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/colaborador1.jpg" alt="">
                        <h3>Federico Ungaro</h3>

                    </div>
                    <div class="servicio-ind">
                        <img src="img/colaborador2.jpg" alt="">
                        <h3>Nicolas Heith</h3>

                    </div>
                    <div class="servicio-ind">
                        <img src="img/colaborador3.jpg" alt="">
                        <h3>Analia Thelma</h3>

                    </div>
                    <div class="servicio-ind">
                      <img src="img/colaborador4.jpg" alt="">
                      <h3>Carolia Duarte</h3>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php Parts::footer_of(); ?>
</body>

</html>
