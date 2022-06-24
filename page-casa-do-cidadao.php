<?php
/**
 * Template Name: Casa do cidadão
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>

	<main id="casa-do-cidadao" class="casa-do-cidadao" tabindex="-1" role="main">
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
        <section class="texto-galeria container">
            <article class="texto">
                <h2>Pellentesque in ipsum id orci porta Donec sollicitudin molesti</h2>
                <?php the_content();?>
            </article>
            <article class="galeria">
                <div class="swiper-container galeria-casa">
                    <div class="swiper-wrapper">
                        <?php 
                                $galeria = get_post_meta( $post->ID,'galeria', true );                    
                                $galeria = explode(",", $galeria);
                                foreach ( $galeria as $foto ) { ?>                          
                                    <div class="swiper-slide">
                                        <div class="foto-galeria"> 
                                            <div data-swiper-parallax="0">
                                                <img class="foto" src="<?php echo odin_get_image_url( $foto, 794, 444, true,true);?>">
                                            </div>
                                        </div>
                                        <div class="descricao">
                                            <div data-swiper-parallax="-1200">
                                                <h4><?php echo get_the_title($foto); ?></h4>
                                                <p><?php echo get_post($foto)->post_content; ?></p>
                                            </div> 
                                        </div>
                                    </div>  
                                <?php }
                            ?>
                           
                    </div>  
                     <!-- Add Navigation -->
                    <div class="swiper-button-prev swiper-button-white">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seta-esq.svg">  
                    </div>

                    <div class="swiper-button-next swiper-button-white">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seta-dir.svg">
                    </div> 
                    <!-- Add Pagination -->
                        <div class="swiper-pagination swiper-pagination-white"></div>
                </div>    
            </article>
        </section>
        <section class="palavras">
            <article class="container">
                <div class="imagem">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/walderrama.png"/>
                </div>
                <div class="texto">
                    <?php                                                
                        $palavra1 =  get_post_meta( $post->ID,'palavra1', true );
                        $nome =  get_post_meta( $post->ID,'nome', true );
                    ?>
                    <h3>Palavra do Presidente</h3>
                    <p><?php echo $palavra1; ?></p>
                    <b><?php echo $nome; ?></b>
                </div>
            </article>            
        </section>
        <section class="principios">
            <article class="container">
                <?php                                                
                    $missao =  get_post_meta( $post->ID,'missao', true );
                    $visao =  get_post_meta( $post->ID,'visao', true );
                    $valores =  get_post_meta( $post->ID,'valores', true );
                ?>
                <div class="box">
                    <h3>Missão</h3>
                    <p><?php echo $missao; ?></p>
                </div>
                <div class="box">
                    <h3>Visão</h3>
                    <p><?php echo $visao; ?></p>
                </div>
                <div class="box">
                    <h3>Valores</h3>
                    <p><?php echo $valores; ?></p>
                </div>
            </article>
        </section>
	</main><!-- #main -->

<?php
get_footer();
