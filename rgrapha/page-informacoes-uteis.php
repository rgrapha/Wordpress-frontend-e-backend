<?php
/**
 * Template Name: Informações Úteis
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>

	<main id="informacoes-uteis" class="informacoes-uteis" tabindex="-1" role="main">
		<section id="barra-breadcrumb" class="barra-breadcrumb">
            <article class="container">
                <title><?php the_title(); ?></title>
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
                    <li><h1><?php the_title(); ?></h1></li>
                </ul>
            </article>          
        </section>
        <section class="titulo">
            <div class="container">
                <div class="linhas1"></div>
                <h2>Telefones úteis</h2>
                <div class="linhas2"></div>
            </div>
        </section>
        <section class="telefones-uteis">
        	<article class="container">
    			<ul class="telefones">
	    			<?php
	                    $args = array('post_type' => 'telefoneUteis','posts_per_page' => -1);
	                        $var = new WP_Query($args);
	                        if($var->have_posts()):
	                            while($var->have_posts()):
	                                $var->the_post(); ?> 
		                                <li>
		                                	<p><?php the_title(); ?> <span>-</span></p>
		                                	<a href="tel:<?php echo get_post_meta( $post->ID,'telefone', true ); ?>"><?php echo get_post_meta( $post->ID,'telefone', true ); ?></a>	
		                                </li>
	                                <?php
	                            endwhile;
	                        endif;
	                    wp_reset_postdata(); 
	                ?>
                </ul>
        	</article>
        </section>
        <section class="titulo">
            <div class="container">
                <div class="linhas1"></div>
                <h2>Manuais e cartilhas</h2>
                <div class="linhas2"></div>
            </div>
        </section>
        <section class="manuais">
        	<article class="container">
    			<?php
                    $args = array('post_type' => 'manuais_cartilhas','posts_per_page' => 3);
                        $var = new WP_Query($args);
                        if($var->have_posts()):
                            while($var->have_posts()):
                                $var->the_post(); ?> 	                             
	                                <a class="card" href="<?php echo get_post_meta( $post->ID,'documentos', true ); ?>" target="_blank" >
	                                	<div class="imagem">
	                                		<?php echo odin_thumbnail( 472, 296, true,true);?>
	                                	</div>
	                                	<b href="<?php echo get_post_meta( $post->ID,'documentos', true ); ?>" target="_blank" >
	                                		Fazer download da cartilha 
	                                		<svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M-0.000488281 17H13.9995V15H-0.000488281V17ZM13.9995 6H9.99951V0H3.99951V6H-0.000488281L6.99951 13L13.9995 6Z" fill="#393E46" fill-opacity="0.75"/>
											</svg>
	                                	</b>	
	                                </a>
                                <?php
                            endwhile;
                        endif;
                    wp_reset_postdata(); 
                ?>
        	</article>
        </section>
        <section class="titulo">
            <div class="container">
                <div class="linhas1"></div>
                <h2>Links úteis</h2>
                <div class="linhas2"></div>
            </div>
        </section>
        <div class="container">
            <section class="link-uteis">
                <article>                
	                <?php
	                    $args = array('post_type' => 'link_uteis','posts_per_page' => -1);
	                        $var = new WP_Query($args);
	                        if($var->have_posts()):
	                            while($var->have_posts()):
	                                $var->the_post(); ?> 
		                                <a class="box" href="<?php echo get_post_meta( $post->ID,'link-url1', true ); ?>">
		                                	<h3><?php the_title(); ?></h3>
		                                </a>
	                                <?php
	                            endwhile;
	                        endif;
	                    wp_reset_postdata(); 
	                ?>
                </article> 
            </section>
        </div>
	</main><!-- #main -->

<?php
get_footer();
