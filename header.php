<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title><?php wp_title('-',true,'right');?><?php bloginfo('name');?></title>
    <?php wp_head(); ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="js/scrollreveal.js"></script>
</head>

<body <?php body_class();?> >

    <header>
    <?php	
    $options = get_theme_mod('gympro_settings');
   //Logo   
    if(!empty($options['logo'])){
    $logo_url = $options['logo'];

  }
    ?>
      <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
              
              <img src="<?php echo $logo_url;?>" class="navbar-brand" alt="logo.png">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <?php  wp_nav_menu(array('theme_location' => 'menu-principal', 'menu_class' => 'collapse navbar-collapse justify-content-end' ,'menu_id' =>  'navbarSupportedContent' ))?>
              </div>
              <!-- <?php get_search_form();?> -->
          </nav>
    </header>   

                <!-- <div class="col-lg-4 col-md-4  col-sm-12 col-xs-12">
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
                </div> -->