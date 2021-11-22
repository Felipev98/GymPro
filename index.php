<?php get_header(); ?> 
<main>
    <section class="hero">
        <div class="container">
            <div class="row">
                <?php if (have_posts() ): while(have_posts()): the_post(); ?>
                <div class="col-xl-6">
                    <div class="texto-banner">
                        <h2><?php the_field('titulo_de_banner')?></h2>
                        <span><?php the_field('subtitulo_de_banner')?></span>
                        <?php if(get_field('deseas_boton') == 'Sí'):?>
                      <a href="<?php the_field('enlace_del_boton')?>"><button><?php the_field('texto_del_boton')?></button></a>  
                        <?php endif?>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="circulo-pequeño">
                        <span>💪🏻</span>
                    </div>
                    <div class="mensaje">
                        <div class="imagen" style="background-image: url(<?php echo IMAGES;?>/persona.jpg)"></div>
                        <span><?php the_field('nombre_gym')?></span>
                        <p><?php the_field('texto_gym')?></p>
                    </div>
                    <div class="circulo">
                        <div class="circulo-abajo">
                            <span>🏋🏻</span>
                        </div>
                        <?php if (has_post_thumbnail()):?>
                            <?php $banner_image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');?>
                 <div class="imagen-banner" style="background-image: url(<?php echo $banner_image[0];?>"> 
                    <?php else:?>
                     <div class="imagen-banner" style="background-image: url(<?php echo IMAGES;?>/ChicaDeporte.png)"> -
                        <?php endif?>
                    </div>
                    
                    </div>
                </div>
                <?php endwhile; else:?>
                    <?php get_template_part('template-parts/content','nopost');?>

                <?php endif;?>	
            </div>
        </div>
    </section>
    <?php
                $options = get_theme_mod('gympro_settings');
                //Sección Titulo Nosotros
                if(!empty($options['nosotros_section_title'])){
                    $titulo_nosotros = $options['nosotros_section_title'];
                }
                if(isset($options['show_nosotros_section'])){
                    $show_nosotros_section = $options['show_nosotros_section'];
                }else{
                    $show_nosotros_section = false;
                }
                //Sección Titulo Acerca
                if(!empty($options['acerca_section_title'])){
                $titulo_acerca = $options['acerca_section_title'];
                }
                if(isset($options['show_acerca_section'])){
                $show_acerca_section = $options['show_acerca_section'];
            }else{
                $show_acerca_section = false;
            }
                ?>
<?php if( $show_nosotros_section == true):?>
    <section class="nosotros">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="titulo-nosotros">
                        <?php if(isset($titulo_nosotros)):?>
                        <h2><?php echo $titulo_nosotros;?></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in auctor purus. Nunc dignissim quam eget feugiat sollicitudin. Maecenas arcu odio, auctor vitae faucibus fringilla.</p>
                        <?php else:?>
                            <h2>NOSOTROS</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in auctor purus. Nunc dignissim quam eget feugiat sollicitudin. Maecenas arcu odio, auctor vitae faucibus fringilla.</p>
                        <?php endif;?>
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
    <?php endif;?>
    <?php if( $show_acerca_section == true):?>
    <section class="acerca">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="titulo-nosotros">
                    <?php if(isset( $titulo_acerca)):?>
                        <h2><?php echo  $titulo_acerca;?></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in auctor purus. Nunc dignissim quam eget feugiat sollicitudin. Maecenas arcu odio, auctor vitae faucibus fringilla.</p>
                        <?php else:?>
                            <h2>ACERCA</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in auctor purus. Nunc dignissim quam eget feugiat sollicitudin. Maecenas arcu odio, auctor vitae faucibus fringilla.</p>
                        <?php endif;?>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="imagen-acerca">
                        <img src="<?php echo IMAGES;?>/pesas.png" alt="pesas.png">
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
    <?php endif;?>
    <section class="programas">
        <div class="container">
            <div class="texto-programas">
                <h2>PROGRAMAS</h2>
            </div>
            
            <?php $planes = new WP_query(array(
                'post_type' => 'nosotross',
                'posts_per_page' => 3,
            ));?>
        <?php if( $planes ->have_posts() && $planes ->post_count > 2  ):?>
        <div class="row">

    <?php while($planes ->have_posts()): $planes -> the_post();?>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="card  ">
                    <?php if (has_post_thumbnail()):?>
                        <img src="<?php the_post_thumbnail_url('nosotros_programas');?>" class="card-img-top" alt="...">
                    <?php endif;?>
                         <h4 class="card-title"><?php the_title();?></h4>
                         <p class="card-text"><?php the_excerpt();?></p>

                         </div>
                </div>
        <?php endwhile;?>
    </section>
    <?php endif;?>
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
