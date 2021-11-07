<?php get_header(); ?> 
<main>
    <section class="hero">
        <div class="container">
            <div class="row">
                <?php if (have_posts() ): while(have_posts()): the_post(); ?>
                <div class="col-xl-6">
                    <div class="texto-banner">
                        <h2><?php the_title();?></h2>
                        <span><?php the_content();?></span>
                        <button><?php _e('QUIERO ENTRAR','gympro')?></button>
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
                <?php endwhile; else:?>
                    <?php get_template_part('template-parts/content','nopost');?>

                <?php endif;?>	
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
<?php get_footer(); ?>
