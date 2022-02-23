
<?php get_header(); ?>

<main id="blog"> 
  <section class="blog container py-md-5 py-3">
    <div class="row justify-content-center">
      <h2 class="col-12 text-left mb-3 mb-md-5">Blog</h2>
      <div class="col-12 d-flex justify-content-center">
        <div class="container-posts d-flex flex-wrap"> 
              <?php if ( have_posts() ) : ?>                
              <h2 style="color: rgba(149, 149, 149, .67);font-weight:700" class="mb-3"><?php 

            if (is_category()){
              single_cat_title();
            } elseif (is_tag()){
              single_tag_title();
            } elseif (is_author()){
              the_post();
              echo 'Textos mais recentes de ' . get_the_author() . ' - ' . the_field('cargo_autor');
              rewind_posts();
            } elseif (is_author($author)){
              the_post();
              echo 'Textos mais recentes de ' . get_the_author() . ' - ' . 'Analista de Conteúdo';
              rewind_posts();
            } elseif (is_day()){
              echo 'Posts do dia: ' . get_the_date();
            } elseif (is_month()){
              echo 'Posts do mês: ' . get_the_date('F Y');
            } elseif (is_year()){
              echo 'Posts do ano: ' . get_the_date('Y'); 
            } else{
              echo 'Posts:';
            } ?></h2>
              <?php 
            if (have_posts()):while (have_posts()):the_post(); 
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
            ?>
            <a href="<?php the_permalink(); ?>" class="post d-flex flex-column align-items-center m-2">
                <div class="imagem-post bg-cover" style="background-image: url('<?php echo $image[0]; ?>')"></div>
                <div class="texto p-3">
                    <div class="titulo-post mb-3">
                        <h2><?php the_title() ?></h2>
                    </div>
                    <div class="resumo-post my-3">
                        <p><?php echo get_excerpt(); ?></p>
                    </div>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/arrow-mini.png" class="pb-4" alt="ícone seta">
            </a>
            <?php endwhile; ?>
            <?php else: endif; ?>            
            </div>
          </div>
          <div class="navegacao d-flex justify-content-center">
              <?php echo paginate_links(); ?>
          </div>
          <?php else: echo  "<p>Nenhum resultado encontrado.</p>" ?> <?php endif; ?> 
        </div>
      </section>
    </main> 
<?php get_footer(); ?>