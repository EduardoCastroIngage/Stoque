<?php get_header(); ?>
 
<main id="blog-single">  
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section class="secao-principal py-md-5 py-3">
            <div class="container postagem">
                <div class="row justify-content-center">
                    <div class="col-md-8 pl-0">  
                        <div class="titulo-post">
                            <h1><?php the_title() ?></h1>
                        </div>  
                        <img src="<?php the_post_thumbnail_url(); ?>" class="my-md-5 my-4 thumb" alt="<?php the_title() ?>" width="100%">
                        <div class="texto-post">
                            <?php the_content(); ?>
                        </div>           
                    </div>
                </div>
            </div>
        </section>
        <section class="botao-blog container py-md-5 py-3 mt-3">
            <div class="row justify-content-center">
                <a href="<?php site_url(); ?>/tudo-o-que-voce-precisa-saber">Todos os posts</a>
            </div>
        </section>
	<?php endwhile; else: ?>

				<p>Essa página não existe</p>

	<?php endif; ?>
    </main>
        

<?php get_footer(); ?>