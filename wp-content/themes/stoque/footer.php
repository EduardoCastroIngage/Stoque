<?php
	$contato = get_page_by_title('contato');
?>
<footer class="container-fluid px-md-0 mx-0 pt-md-5 d-flex flex-column align-items-center"> 
  <div class="row py-md-5 py-3">
    <div class="container px-0">
      <div class="row justify-content-center">
        <div class="col-md-5 d-flex flex-column">
          <div class="identidade">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo-rodape.png" alt="Logo Stoque" width="100%" class="logo mb-2">
            <h3>Automação Digital Full Service</h3>
          </div>
          <div class="newsletter py-md-5 pl-md-2">
            <h5 class="mb-3">Assine a nossa newsletter</h5>          
            <?php echo do_shortcode( '[contact-form-7 id="33" title="Newsletter"]' ); ?>
          </div>
          <div class="selos d-flex justify-content-between align-items-center">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/selo-inovabra.png" alt="Selo residente inovabra habitat">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/selo-distrito.png" alt="Selo distrito for startups">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/selo-isg.png" alt="Selo intelligent business automation">
          </div>
        </div>
        <div class="col-md-7">
          <div class="col-12 d-flex align-items-center justify-content-end">
            <div class="redes-sociais d-flex align-items-center mb-3 mb-md-0">
              <a href="<?php the_field('linkedin', $contato) ?>" target="_blank" class="linkedin"><i class="fab fa-linkedin"></i></a>
              <a href="<?php the_field('instagram', $contato) ?>" target="_blank"><i class="fab fa-instagram"></i></a>
              <a href="<?php the_field('youtube', $contato) ?>" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
            <a href="" class="botao-rodape mx-md-4">Fale com a gente</a>
            <a href="" class="botao-rodape">Suporte Técnico</a>
          </div>
          <div class="col-12 px-0 d-flex flex-wrap flex-md-nowrap justify-content-end pr-md-5 pt-md-5 pt-3">
            <div id="textoNavbar" class="my-3 my-md-0 mx-md-3">
              <h4 class="mb-3">A Stoque</h4>
              <?php
                $args = array(
                'menu' => 'rodape1',
                'theme_location' => 'menu-rodape1',
                'container' => false,
                'menu_class' => 'navbar flex-column align-items-start px-0 py-0',
                'add_li_class'  => 'nav-item'
                );
                wp_nav_menu( $args );
              ?>
            </div>
            <div id="textoNavbar" class="my-3 my-md-0 mx-md-3">
              <h4 class="mb-3">Soluções</h4>
              <?php
                $args = array(
                'menu' => 'rodape2',
                'theme_location' => 'menu-rodape2',
                'container' => false,
                'menu_class' => 'navbar flex-column align-items-start px-0 py-0',
                'add_li_class'  => 'nav-item'
                );
                wp_nav_menu( $args );
              ?>
            </div>
            <div id="textoNavbar" class="my-3 my-md-0 mx-md-3">
              <h4 class="mb-3">Mercados</h4>
              <?php
                $args = array(
                'menu' => 'rodape3',
                'theme_location' => 'menu-rodape3',
                'container' => false,
                'menu_class' => 'navbar flex-column align-items-start px-0 py-0',
                'add_li_class'  => 'nav-item'
                );
                wp_nav_menu( $args );
              ?>
            </div>
            <div id="textoNavbar" class="my-3 my-md-0 mx-md-3">
              <h4 class="mb-3">Conteúdos</h4>
              <?php
                $args = array(
                'menu' => 'rodape4',
                'theme_location' => 'menu-rodape4',
                'container' => false,
                'menu_class' => 'navbar flex-column align-items-start px-0 py-0',
                'add_li_class'  => 'nav-item'
                );
                wp_nav_menu( $args );
              ?>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div> 
  <div class="row bottom-footer py-3"> 
    <div class="container">
      <div class="row justify-content-between align-items-center">  
        <div class="copy">
          <p>Copyright © 2022. Stoque Soluções Tecnológicas S/A - All rights reserved</p>
        </div>
        <div class="links">
          <a href="">Política de privacidade</a>
          <a href="" class="mx-md-5">Termos de uso</a>
          <a href="" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo-ingage.png" alt="Logo INGAGE"></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/popper.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/debounce.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/slick.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/simple-anime.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/smooth-scroll.js"></script>
<?php wp_footer(); ?>
<script>
  window.onload = function(e) {
    var offset = document.getElementsByClassName('header')[0].offsetTop;
    var menu = document.getElementsByClassName('header')[0];

    document.addEventListener('scroll', function() {
        if (document.body.scrollTop > offset || document.documentElement.scrollTop > offset) {
            menu.style.position = 'fixed';
            menu.style.background = '#0A232D';
        } else {
            menu.style.position = 'absolute';
            menu.style.background = '#0A232D';
        }
    });
}
</script>
<script>
  jQuery('.conteudo-carousel .slide-boxes').slick({
    lazyLoad: 'ondemand',
    dots: true,
    autoplay: false,
    autoplaySpeed: 3000,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: false,
    rightMode: true,
    centerMode: true,
    focusOnSelect: true,
    responsive:[{
      breakpoint: 480,
      settings:{
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: false,
        nextArrow: false
      }
    }] 
  });				
</script> 
<script>
  jQuery('.secao-experiencia .container-slides').slick({
    lazyLoad: 'ondemand',
    dots: true,
    autoplay: false,
    autoplaySpeed: 3000,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    responsive:[{
      breakpoint: 480,
      settings:{
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: false,
        nextArrow: false
      }
    }] 
  });				
</script>    
<script>
	$(document).ready(function(){
		$('.menuToggle').click(function(){
			$(this).toggleClass('open');
		});
    });
    
    $('.carousel').carousel({
    pause: true
  })
</script>
<script>
	$(document).ready(function(){
		$('.menu-open-close').click(function(){
			$('.menu-lateral').toggleClass('active');
		})
	})
</script>
    
<?php wp_footer(); ?>
</body>
</html>