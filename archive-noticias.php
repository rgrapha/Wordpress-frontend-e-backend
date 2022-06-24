<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="noticias" class="noticias-videos noticias" tabindex="-1" role="main">
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
                    <li><h1>Todas Notícias</h1></li>
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
                <?php 
                    if (have_posts()):
                        while (have_posts()): 
                            the_post();?> 
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
            <?php 
                the_posts_pagination( 
                    array(
                        'mid_size'  => 5,
                        'prev_text' => __( 
                            '<svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.64995 10L6.82495 8.825L3.00829 5L6.82495 1.175L5.64995 -1.02722e-07L0.649951 5L5.64995 10Z" fill="#8CB81A" fill-opacity="0.5"/></svg>'
                        ),
                        'next_text' => __( 
                            '<svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.35005 0L0.175049 1.175L3.99172 5L0.175049 8.825L1.35005 10L6.35005 5L1.35005 0Z" fill="#8CB81A"/></svg>' 
                        ),
                    ) 
                ); 
            ?>  
        </section>
	</main><!-- #main -->

<?php
get_footer();
