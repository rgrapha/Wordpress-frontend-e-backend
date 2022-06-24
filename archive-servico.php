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

	<main id="servicos" class="servicos" tabindex="-1" role="main">
		<section id="barra-breadcrumb" class="barra-breadcrumb">
            <article class="container">
                <title>Serviços</title>
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
                    <li><h1>Serviços</h1></li>
                </ul>
            </article>          
        </section>
		<section class="titulo">
            <div class="container">
                <div class="linhas1"></div>
                <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pasta2.svg"> Consulte todos os serviços</h2>
                <div class="linhas2"></div>
                 <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Praesent sapien massa,a pellentesque nec, eges tasnon. Curabitur aliquet quam id dui posuere blandit. Quisque velit nisi, pretium ut lacinia in elementum id enim. Nulla quis lorem ut libero malesuada feugiat. ali quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.    </p>
             </div>
        </section>          
		<div class="container">
            <section class="categorias-servicos">
                <article> 
                    <?php $categorias = get_terms("servicos", array( 'hide_empty' => false));
                        foreach ($categorias as $part): ?>
                            <a class="box" href="<?php echo get_term_link($part->term_id);?>">
                                <h4 class="">
                                    <?php $title = $part->name; ?>                                  
                                    <?php echo $title ?>                                  
                                </h4>
                                <p>
                                    <?php $texto = $part->description; ?>                                  
                                    <?php echo $texto ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seta.svg"> 
                                </p>
                            </a>                    
                        <?php endforeach;
                    ?>
                </article> 
            </section>
        </div>
	</main><!-- #main -->

<?php
get_footer();
