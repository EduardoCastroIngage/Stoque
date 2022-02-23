<?php
// Template Name: Home
?>
<?php get_header(); ?>
  <main id="home">
    <section class="secao-hero container-fluid py-md-5 py-3">
      <div class="container">
        <div class="row">
          <div class="conteudo d-flex flex-column">
            <h1>Automação <br>
              Digital <br> 
              Full Service</h1>
            <p>Soluções de automação digital para processos e documentos. Do papel à nuvem. Um salto à frente.</p>
            <a href="" class="cta">Converse com especialista</a>
          </div>
        </div>
      </div>
    </section>
    <section class="secao-sobre container py-md-5 py-3">
      <div class="row align-items-center justify-content-between pt-md-0">
        <div class="col-md-6">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/img-section-sobre-home.png" alt="imagem ilustrativa seção home" width="100%">
        </div>
        <div class="col-md-5">
          <h2>Sua parceira <br>
            para novos saltos, <br>
            <strong>da transformação <br> ao resultado.</strong></h2>
            <p class="my-md-5 my-3">Desenvolvemos soluções - serviços e plataformas digitais - que permitem aos nossos clientes <strong>simplificar seus processos e impulsionar resultados.</strong></p>
            <div class="caracteristicas d-flex align-items-center pt-md-5">
              <p>Agilidade</p>
              <span>-</span>
              <p>Eficiência</p>
              <span>-</span>
              <p>Segurança</p>
              <span>-</span>
              <p>Escalabilidade</p>
            </div>
        </div>
      </div>
    </section>
    <section class="secao-servicos container py-md-5 py-3">
      <div class="row">
        <h3 class="py-md-5 py-3 titulo">Serviços</h3>
        <div class="container-boxes d-flex justify-content-between">          
          <?php              
            $args = array('post_type'=>'servicos',
            'post_status'=>'publish',
            'posts_per_page'=> -1,
            'orderby' => 'name',
            'order' => 'ASC',
            );
            $wpb_all_query = new WP_Query($args); ?>
              <?php if ( $wpb_all_query->have_posts() ){ while($wpb_all_query->have_posts() ){
                $wpb_all_query->the_post();	
              ?>           
                <div class="box col-md-4">
                  <div class="topo d-flex bg-cover justify-content-between align-items-center" style="background-image:url('<?php echo get_stylesheet_directory_uri() ?>/assets/img/bg-servico1.png')">
                    <h3><?php the_title();?></h3>
                    <img src="<?php the_field('icone');?>" class="icone" alt="Imagem serviço <?php the_title();?>">
                  </div>
                  <div class="texto mt-3 mt-md-0">
                    <p><?php the_field('resumo_home');?></p>
                    <a href="<?php echo the_permalink();?>">Saiba mais</a>
                  </div>
                </div>      
              <?php
                }
              ?> 
              <?php  
                }      
                wp_reset_query();
                wp_reset_postdata();
              ?>
        </div>
        <div class="row plataformas-digitais">
          <h3 class="py-md-5 py-3 titulo">Plataformas Digitais</h3>
          <div class="container-boxes d-flex justify-content-between">              
            <div class="box col-md-4">
              <div class="topo d-flex bg-cover justify-content-between align-items-center" style="background-image:url('<?php echo get_stylesheet_directory_uri() ?>/assets/img/bg-servico1.png')">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo-abaris.png" class="logo" alt="Logo ábaris">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icone-abaris.png" class="icone" alt="ícone ábaris">
              </div>
              <div class="texto mt-3 mt-md-0">
                <p>Solução SaaS de gestão de conteúdo (ECM) e automação de fluxos (BPM) em nuvem, com módulos de captura inteligente e assinatura digital nativos.</p>
                <a href="">Saiba mais</a>
              </div>
            </div>          
            <div class="box col-md-4">
              <div class="topo d-flex bg-cover justify-content-between align-items-center" style="background-image:url('<?php echo get_stylesheet_directory_uri() ?>/assets/img/bg-servico2.png')">
                <h3>Plataforma de Automação de Crédito</h3>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icone-plataforma-credito.png" class="icone" alt="ícone Plataforma de Automação de Crédito">
              </div>
              <div class="texto mt-3 mt-md-0">
                <p>Digitalização, automação e orquestração 
                  da esteira de crédito, de ponta a ponta, 
                  para um processo de análise e formalização digital mais ágil e transparente. 
                </p>
                <a href="">Saiba mais</a>
              </div>
            </div>          
            <div class="box col-md-4">
              <div class="topo d-flex bg-cover justify-content-between align-items-center" style="background-image:url('<?php echo get_stylesheet_directory_uri() ?>/assets/img/bg-servico-3.png')">
                <h3>Onboarding Digital</h3>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icone-onboarding.png" class="icone" alt="ícone Onboarding Digital">
              </div>
              <div class="texto mt-3 mt-md-0">
                <p>Aquisição e conversão de novos usuários com validações feitas em segundos.</p>
                <a href="">Saiba mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="secao-mercados container-fluid pt-md-5 pt-3">
      <div class="container">
        <div class="row">
          <h3 class="py-md-5 py-3 titulo">Nossos principais mercados de atuação</h3>
          <div class="container-boxes d-flex justify-content-between">         
            <div class="box col-md-4">
              <div class="conteudo d-flex flex-column">
                <h3>Financeiro</h3>
                <a href="">Conheça as soluções</a>
                <p>Trabalhamos com as maiores instituições financeiras do país na digitalização e automação de seus processos de back office, com destaque às operações de crédito.</p>
              </div>
            </div>        
            <div class="box col-md-4">
              <div class="conteudo d-flex flex-column">
                <h3>Educação</h3>
                <a href="">Conheça as soluções</a>
                <p>Apoiamos instituições de ensino superior na sua jornada de transformação digital, começando pela digitalização das secretarias acadêmicas.</p>
              </div>
            </div>          
            <div class="box col-md-4">
              <div class="conteudo d-flex flex-column">
                <h3>Gráfico</h3>
                <a href="">Conheça as soluções</a>
                <p>Atendemos gráficas digitais na otimização de sua operação, para que sejam capazes de ampliar seu portfolio de produtos e serviços e conquistar novos mercados.</p>
              </div>
            </div>     
          </div>
          <div class="numeros row justify-content-between py-md-5 py-3">
            <div class="texto col-md-7">
              <h2>Uma base sólida <br> para <strong>saltos contínuos</strong></h2>
              <p>Há quase duas décadas atendendo empresas em todo o Brasil, somos verdadeiros parceiros na jornada de transformação digital dos nossos clientes. Comprometidos com o seu resultado, usamos a tecnologia como meio para impulsionar pessoas e negócios ao seu máximo potencial.</p>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
              <div class="bloco-cta">
                <p>Faça parte do nosso bando</p>
                <a href="" class="cta">Veja as vagas abertas</a>
              </div>
            </div>
            <div class="col-12 contadores row">
              <div class="contador col-md-4 d-flex flex-column">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icone-numeros-mercados1.png" alt="ícone números mercado">
                <span>+18</span>
                <p>anos de mercado</p>
              </div>
              <div class="contador col-md-4 d-flex flex-column">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icone-numeros-mercados2.png" alt="ícone números mercado">
                <span>+250</span>
                <p>clientes, sólidas parcerias tecnológicas e forte investimento em P&D</p>
              </div>
              <div class="contador col-md-4 d-flex flex-column">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icone-numeros-mercados3.png" alt="ícone números mercado">
                <span>+400</span>
                <p>colaboradores</p>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
    <section class="secao-conversao container-fluid pt-3">
      <div class="container box-conversao">
        <div class="row">
          <div class="col-md-6 bg-cover left px-0" style="background-image:url('<?php echo get_stylesheet_directory_uri() ?>/assets/img/bg-secao-conversao.png')"></div>
          <div class="col-md-6 d-flex flex-column justify-content-center pl-md-5">
            <h2>Vamos impulsionar seu negócio com<strong> automação digital?</strong></h2>
            <a href="" class="cta">Fale com especialista</a>
          </div>
        </div>
      </div>
    </section>
    <section class="secao-conteudos container-fluid pb-md-5 py-3">
      <div class="container">
        <div class="row" style="position: relative;">
          <h3 class="pb-md-5 pb-3 titulo">Acompanhe as novidades e <strong>conteúdos exclusivos</strong> da Stoque</h3>
          <div class="container-boxes conteudo-carousel col-12 row">
            <div class="fixed-box col-md-3 bg-cover" style="background-image:url('<?php echo get_stylesheet_directory_uri() ?>/assets/img/bg-ebook-carrosel.png')">
              <div class="col-md-7 left-side">
                <span>eBook</span>
                <p>Tudo que você precisa saber sobre <strong>Robotic Process Automation</strong></p>
                <a href="">Baixe o guia digital exclusivo</a>
              </div>
            </div>
            <div class="slide-boxes col-md-9">
              <div class="box">
                <div class="topo bg-cover" style="background-image:url('<?php echo get_stylesheet_directory_uri() ?>/assets/img/bg-news1.jpg')"></div>
                <div class="texto p-md-4">
                  <span class="data">19 Jan</span>
                  <div class="tags d-flex">
                    <span>Ábaris</span>
                    <span>Automação</span>
                  </div>
                  <h2>As 5 principais vantagens do arquivo digital</h2>
                </div>
              </div>
              <div class="box">
                <div class="topo bg-cover" style="background-image:url('<?php echo get_stylesheet_directory_uri() ?>/assets/img/bg-news2.jpg')"></div>
                <div class="texto p-md-4">
                  <span class="data">19 Jan</span>
                  <div class="tags d-flex">
                    <span>Ábaris</span>
                    <span>Automação</span>
                  </div>
                  <h2>As 5 principais vantagens do arquivo digital</h2>
                </div>
              </div>
              <div class="box">
                <div class="topo bg-cover" style="background-image:url('<?php echo get_stylesheet_directory_uri() ?>/assets/img/bg-news1.jpg')"></div>
                <div class="texto p-md-4">
                  <span class="data">19 Jan</span>
                  <div class="tags d-flex">
                    <span>Ábaris</span>
                    <span>Automação</span>
                  </div>
                  <h2>As 5 principais vantagens do arquivo digital</h2>
                </div>
              </div>
              <div class="box">
                <div class="topo bg-cover" style="background-image:url('<?php echo get_stylesheet_directory_uri() ?>/assets/img/bg-news2.jpg')"></div>
                <div class="texto p-md-4">
                  <span class="data">19 Jan</span>
                  <div class="tags d-flex">
                    <span>Ábaris</span>
                    <span>Automação</span>
                  </div>
                  <h2>As 5 principais vantagens do arquivo digital</h2>
                </div>
              </div>
              <div class="box">
                <div class="topo bg-cover" style="background-image:url('<?php echo get_stylesheet_directory_uri() ?>/assets/img/bg-news1.jpg')"></div>
                <div class="texto p-md-4">
                  <span class="data">19 Jan</span>
                  <div class="tags d-flex">
                    <span>Ábaris</span>
                    <span>Automação</span>
                  </div>
                  <h2>As 5 principais vantagens do arquivo digital</h2>
                </div>
              </div>
            </div>
            <!-- <div class="navigation">
              <div class="arrow-right">
                <svg width="61" height="42" viewBox="0 0 61 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 21L58 21" stroke="#273A3E" stroke-width="2"/>
                  <path d="M40.7991 1L58 20.799L40.7991 40.598" stroke="#273A3E" stroke-width="2"/>
                </svg>
              </div>
              <div class="arrow-left">
                <svg width="61" height="42" viewBox="0 0 61 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M60.598 20.5981L2.59802 20.5981" stroke="#C1C1C1" stroke-width="2"/>
                  <path d="M19.799 40.5981L2.59802 20.7992L19.799 1.00016" stroke="#C1C1C1" stroke-width="2"/>
                </svg>
              </div>
            </div> -->
          </div>
          <div class="cta">Veja mais conteúdos no blog</div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>