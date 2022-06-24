<?php
/**
 * Template Name: Notícias e vídeos 
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>

	<main id="noticias-videos" class="noticias-videos" tabindex="-1" role="main">
		<section id="barra-breadcrumb" class="barra-breadcrumb">
            <article class="container">
                <title>Notícias</title>
                <ul>
                    <li>
                        <a href="<?php echo esc_url( home_url( 'home' ) ); ?>">
                            <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 26V17H18V26H25.5V14H30L15 0.5L0 14H4.5V26H12Z" fill="#393E46" fill-opacity="0.75"/>
                            </svg>
                            <svg width="4" height="8" viewBox="0 0 4 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.666687 7.33333L4.00002 4L0.666687 0.666664V7.33333Z" fill="#393E46" fill-opacity="0.75"/>
                            </svg>
                        </a>
                    </li>          
                    <li><h1>Notícias</h1></li>
                </ul>
            </article>          
        </section>
        <section class="titulo">
            <div class="container">
                <div class="linhas1"></div>
                <h2>Notícias</h2>
                <div class="linhas2"></div>
             </div>
        </section>
        <section class="destaque-noticias container">
        	<article>
				<?php $args = array('post_type' => 'noticias','posts_per_page' => 6);
	                $var = new WP_Query($args);
	                if($var->have_posts()):
	                    while($var->have_posts()):
	                        $var->the_post(); ?> 
								<a class="card" href="<?php the_permalink(); ?>">
									<div class="imagem">
										<?php echo odin_thumbnail( 470, 313, get_the_title(), true, 'minha-classe' );?>	
									</div>										
									<div class="conteudo">
										<span class="data">Publicado: <?php the_time('d\/m\/Y') ?></span>
										<h3><?php the_title(); ?></h3>
										<p><?php echo excerpt(20); ?></p>
										<span class="veja-mais">
											Veja mais 
											<svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.35998 0L0.47998 1.88L6.58665 8L0.47998 14.12L2.35998 16L10.36 8L2.35998 0Z" fill="#8CB81A"/></svg>
										</span>
									</div>
									
								</a>						
							<?php 
						endwhile;
					endif;
				wp_reset_postdata(); ?>
			</article>
			<div class="mais-noticias">
				<a href="<?php echo esc_url( home_url( 'noticias' ) ); ?>">Ir para todas as notícias <svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.35998 0L0.47998 1.88L6.58665 8L0.47998 14.12L2.35998 16L10.36 8L2.35998 0Z" fill="#8CB81A"/></svg></a>
			</div>
        </section>
        <section class="titulo">
            <div class="container">
                <div class="linhas1"></div>
                <h2>Vídeos</h2>
                <div class="linhas2"></div>
             </div>
        </section>
        <section class="destaque-videos container">
        	<article>
				<?php $args = array('post_type' => 'videos','posts_per_page' => 3);
	                $var = new WP_Query($args);
	                if($var->have_posts()):
	                    while($var->have_posts()):
	                        $var->the_post(); ?> 
								<div class="card">
									<div class="video">
										<?php the_content();?>
									</div>										
									<div class="conteudo">
										<span>Publicado: <?php the_time('d\/m\/Y') ?></span>
										<h3><?php the_title(); ?></h3>
									</div>									
								</div>						
							<?php 
						endwhile;
					endif;
				wp_reset_postdata(); ?>
			</article>
			<div class="mais-videos">
				<a href="<?php echo esc_url( home_url( 'videos' ) ); ?>">Ir para todos os vídeos<svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.35998 0L0.47998 1.88L6.58665 8L0.47998 14.12L2.35998 16L10.36 8L2.35998 0Z" fill="#8CB81A"/></svg></a>
			</div>
        </section>
	</main><!-- #main -->

<?php
get_footer();
