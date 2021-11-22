<footer class="footer">
<div class="container">
    <div class="row">
    <?php
                $options = get_theme_mod('gympro_settings');
                //Facebook Url
                if(!empty($options['facebook_link'])){
                    $facebook_url = $options['facebook_link'];
                }
                //Twitter
                if(!empty($options['twitter_link'])){
                    $twitter_url = $options['twitter_link'];
                }
                //Sección Titulo Nosotros
                if(!empty($options['nosotros_section_title'])){
                    $titulo_nosotros = $options['nosotros_section_title'];
                }
                if(isset($options['show_nosotros_section'])){
                    $show_nosotros_section = $options['show_nosotros_section'];
                }
                //Sección Titulo Acerca
                if(!empty($options['acerca_section_title'])){
                $titulo_acerca = $options['acerca_section_title'];
                }
                if(!empty($options['logo'])){
                    $logo_url = $options['logo'];
                  }
                  //Logo
                  if(!empty($options['logo'])){
                    $logo_url = $options['logo'];
                
                  }
                if(isset($options['show_acerca_section'])){
                $show_acerca_section = $options['show_acerca_section'];
            }
                ?>
        <div class="col-xl-3">
            <div class="logo">
            <img src="<?php echo $logo_url;?>"  alt="logo.png">
            <div class="logo-iconos">    
                    <?php if(isset($facebook_url)):?>
                    <a href="<?php echo esc_url($facebook_url); ?>"><i class="bi bi-facebook"></i></a> 
                     <?php endif ?>
                     <?php if(isset($twitter_url)):?>
                     <a href="<?php echo esc_url($twitter_url); ?>"><i class="bi bi-twitter"></i></a> 

                     <?php endif?>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
        <?php if( is_active_sidebar('sidebar-footer-izq')){
            dynamic_sidebar('sidebar-footer-izq');
        } ?>
        </div>
        <div class="col-xl-3">
        <?php if( is_active_sidebar('sidebar-footer-cent')){
            dynamic_sidebar('sidebar-footer-cent');
        } ?>
        </div>
        <div class="col-xl-3">
            <?php if( is_active_sidebar('sidebar-footer-der')){
            dynamic_sidebar('sidebar-footer-der');
        } ?>
        </div>
    </div>
</div>
</footer>
<!-- <script src="js/index.js"></script>
<script src="js/particles.js"></script>
<script src="js/app.js"></script> -->
<?php wp_footer(); ?>
</body>
</html>
