<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/favicon.png" />
	  <title><?php the_title(); ?></title>
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/slick.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/slick-theme.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">
    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">  
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/bf413ac724.js" crossorigin="anonymous"></script>    
    <?php
    $contato = get_page_by_title('contato');
    wp_head(); ?> 
  </head>
  <body>
  <header class="header">
    <section class="secao-cabecalho">
      <div class="container px-md-0 px-2">              
        <nav class="navbar navbar-expand-lg px-0">
          <div class="menu-toggle menu-open-close d-flex flex-column">
            <span class="mb-1"></span>
            <span class="mb-1"></span>
            <span></span>
          </div>
          <div class="menuToggle">
            <span class="linha1"></span>
            <span class="linha2"></span>
            <span class="linha3"></span>				
          </div>
          <nav class="menu-lateral px-2 px-md-0">
            <div class="close-button menu-open-close">
              <span>[ x ]</span>
            </div>			
              <?php
                $args = array(
                'menu' => 'principal',
                'theme_location' => 'menu-principal',
                'container' => false,
                'menu_class' => 'navbar-nav d-flex flex-column',
                'add_li_class'  => 'nav-item'
                );
                wp_nav_menu( $args );
              ?>
              <div class="botao-contato">
                <a href="">Fale com a gente</a>
              </div>
          </nav>
          <a class="navbar-brand" href="<?= site_url() ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo.png" alt="Logo Stoque"></a>
          <div class="collapse navbar-collapse flex-column align-items-end" id="textoNavbar">
            <?php
              $args = array(
              'menu' => 'principal',
              'theme_location' => 'menu-principal',
              'container' => false,
              'menu_class' => 'navbar-nav ml-auto',
              'add_li_class'  => 'nav-item'
              );
              wp_nav_menu( $args );
            ?>
          </div>
          <div class="botao-contato">
            <a href="">Fale com a gente</a>
          </div>
        </nav>
      </div>
    </section>
  </header>

    

    