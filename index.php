<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymPro</title>
    <link rel="stylesheet" href="<?php	echo THEMEROOT; ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="js/scrollreveal.js"></script>
</head>
<body>
    <header>
        <!-- <div id="particles-js"></div> -->
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">LOGO</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <span class="navbar">Nosotros</span>
                <span class="navbar">Acerca</span>
                <span class="navbar" id="planes">Planes</span>
                <span class="navbar">Contacto</span>
              </div>
            </div>
          </nav>
    </header>    
<main>
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="texto-banner">
                        <h2>ENTRENA EN EL MEJOR</h2>
                        <p>LUGAR</p>
                        <span>En bla bla tenemos los mejores sitios y ubicados en paises de primer nivel, para que tus excursiones sean lo más placenteras y divertidas posibles.</span>
                        <button>Quiero entrar</button>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="circulo-pequeño">
                        <span>💪🏻</span>
                    </div>
                    <div class="mensaje">
                        <div class="imagen" style="background-image: url(<?php echo IMAGES;?>/persona.jpg)"></div>
                        <span>Andres fernandez</span>
                        <p>Me encanta este gym 💪🏻</p>
                    </div>
                    <div class="circulo">
                        <div class="circulo-abajo">
                            <span>🏋🏻</span>
                        </div>
                    <div class="imagen-banner" style="background-image: url(<?php echo IMAGES;?>/ChicaDeporte.png)">
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="nosotros">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="titulo-nosotros">
                        <h2>NOSOTROS</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in auctor purus. Nunc dignissim quam eget feugiat sollicitudin. Maecenas arcu odio, auctor vitae faucibus fringilla.</p>
                    </div>
                </div>
                <div class="col-xl-6" id="col-nosotros">
                    <div class="imagen-nosotros">
                        <div class="tarjeta-nosotros">
                            <i class="bi bi-heart-fill"></i>
                            <span>Ayudamos de corazón</span>
                        </div>
                        <div class="tarjeta-tiempo">
                            <i class="bi bi-hourglass-bottom"></i>
                            <span>Entrena a tu ritmo</span>
                        </div>
                        <img src="<?php echo IMAGES;?>/imagen1.png" id="imagen-1" alt="persona-gym">
                        <img src="<?php echo IMAGES; ?>/imagen2.png" id="imagen-2" alt="persona-gym2">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="acerca">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="titulo-nosotros">
                        <h2>ACERCA</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in auctor purus. Nunc dignissim quam eget feugiat sollicitudin. Maecenas arcu odio, auctor vitae faucibus fringilla.</p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="imagen-acerca">
                        <img src="<?php IMAGES;?>/pesas.png" alt="pesas.png">
                    </div>
                    <div class="container">
                    <div class="grafica">

                        <div class="row">
                            <div class="col-6">
                                <div class="texto-acerca">
                                    <h2>Satisfacción</h2>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in auctor purus. Nunc dignissim quam eget feugiat sollicitudin. Maecenas arcu odio.</span>
                                </div>

                            </div>
                            <div class="col-6">
                                <div class="estrellas">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                                <div class="smile-face">
                                    <i class="bi bi-emoji-smile-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <section class="programas">
        <div class="container">
            <div class="texto-programas">
                <h2>PROGRAMAS</h2>
            </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="card">
                        <img src="<?php echo IMAGES;?>/yoga.png" alt="yoga.png">
                        <h4 class="card-title">This is Card #1</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4  col-sm-12 col-xs-12">
                    <div class="card card-inverse card-primary text-center">
                        <img src="<?php echo IMAGES;?>/cardio.png" alt="cardio.png">
                        <h4 class="card-title">This is Card #2</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                    </div>
                    </div>
                    <div class="col-lg-4 col-md-4  col-sm-12 col-xs-12">
                        <div class="card card-inverse card-primary text-center">
                            <img src="<?php echo IMAGES;?>/levantarpesas.png" alt="levantar.png">
                            <h4 class="card-title">This is Card #2</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
                        </div>
                        </div>
                </div>
</div>
</div>
    </section>
    <section class="contacto">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="texto-contacto">
                        <h2>CONTACTO</h2>
                    </div>
                    <div class="input-contacto">
                        <form action="">
                            <input type="text" placeholder="Nombre y apellido">
                            <input type="text" placeholder="Email">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Escriba su mensaje"></textarea>
                        </form>
                        <button type="submit">Enviar</button>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="footer">
<div class="container">
    <div class="row">
        <div class="col-xl-3">
            <div class="logo">
                <h2>LOGO</h2>
                <div class="logo-iconos">
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-twitter"></i>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="logo">
                <h2>Nosotros</h2>
                <span>Sobre nosotros</span>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="logo">
                <h2>Acerca</h2>
                <span>Acerca</span>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="logo">
                <h2>Programas</h2>
                <span class="programas--">Programa de Yoga</span>
                <span class="programas--">Programa de cardio</span>
                <span class="programas--">Programa de Halterofilia</span>
            </div>
        </div>
    </div>
</div>
</footer>
<script src="js/index.js"></script>
<script src="js/particles.js"></script>
<script src="js/app.js"></script>
</body>
</html>
