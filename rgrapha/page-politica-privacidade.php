<?php
/**
 * Template Name: Política de privacidade
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>

	<main id="politica-privacidade" class="politica-privacidade" tabindex="-1" role="main">
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
                <h2>Política de privacidade</h2>
                <div class="linhas2"></div>
            </div>
        </section>
        <section class="informacoes">
        	<article class="container">
    			<?php the_content();?>
        	</article>
        </section>
       
	</main><!-- #main -->

<?php
get_footer();
