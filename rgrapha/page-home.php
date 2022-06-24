<?php
/**
 * Template Name: home
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>

	<main id="home" class="home" tabindex="-1" role="main">
		<section class="banner">
            <div class="swiper-container banner-home">
                <div class="swiper-wrapper">
                    <?php
                        $args = array('post_type' => 'banner','posts_per_page' => 3);
                            $var = new WP_Query($args);
                            if($var->have_posts()):
                                while($var->have_posts()):
                                    $var->the_post(); ?>                                                                    
                                    <div class="swiper-slide">
                                        <div class="foto-banner desktop" data-swiper-parallax="0">
                                            <?php echo odin_thumbnail( 1920, 740, true,true);?>
                                        </div>
                                        <div class="foto-banner mobile">
                                            <?php 
                                                $galeria = get_post_meta( $post->ID,'foto-mobile', true );                  
                                                $galeria = explode(",", $galeria);
                                                foreach ( $galeria as $foto ) { ?>
                                                    <img src="<?php echo odin_get_image_url( $foto, 515, 540, true,true);?>">
                                                    <?php }
                                            ?>
                                        </div>
                                    </div>  
                                    <?php
                                endwhile;
                            endif;
                        wp_reset_postdata(); 
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
        </section>
        <section class="titulo">
            <div class="container">           
                <div class="linhas1"></div>
                <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/foguete.svg"> Serviços mais acessados</h2>
                <div class="linhas2"></div>
            </div>
        </section>

        <div class="container">
            <section class="servicos-home">
                <article class="card"> 
                    <ol class="coluna1">
                        <?php
                            $args = array(
                                'post_type' => 'servico',
                                'posts_per_page' => 5,
                                'meta_query' => array(
                                    array(
                                        'key' => 'destaque-home',
                                        'value' => 'yes',
                                        'compare' => '=='            
                                    )
                                )
                            );
                            $var = new WP_Query($args);
                                if($var->have_posts()):
                                    while($var->have_posts()):
                                        $var->the_post(); ?> 
                                            <li>
                                                <a href="<?php the_permalink()?>">
                                                    <p><?php the_title(); ?> 
                                                        <svg width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2.01999 0L0.609985 1.41L5.18999 6L0.609985 10.59L2.01999 12L8.01999 6L2.01999 0Z" fill="#393E46" fill-opacity="0.75"/>
                                                        </svg>
                                                    </p>
                                                </a>
                                            </li> 
                                        <?php
                                    endwhile;
                                endif;
                            wp_reset_postdata(); 
                        ?>
                    </ol>
                    <ol start="6" class="coluna2">
                        <?php
                            $args = array(
                                'post_type' => 'servico',
                                'posts_per_page' => 5,
                                'offset'=> 5,
                                'meta_query' => array(
                                    array(
                                        'key' => 'destaque-home',
                                        'value' => 'yes',
                                        'compare' => '=='            
                                    )
                                )
                            );
                            $var = new WP_Query($args);
                                if($var->have_posts()):
                                    while($var->have_posts()):
                                        $var->the_post(); ?>               
                                            <li>
                                                <a href="<?php the_permalink()?>">
                                                    <p><?php the_title(); ?> 
                                                        <svg width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2.01999 0L0.609985 1.41L5.18999 6L0.609985 10.59L2.01999 12L8.01999 6L2.01999 0Z" fill="#393E46" fill-opacity="0.75"/>
                                                        </svg>
                                                    </p>
                                                </a>
                                            </li> 
                                        <?php
                                    endwhile;
                                endif;
                            wp_reset_postdata(); 
                        ?>
                    </ol>
                </article> 
                <article class="banner_middle">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner_middle.jpg">
                </article> 
            </section>
        </div>

        <section class="titulo">
            <div class="container">           
                <div class="linhas1"></div>
                <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pasta.svg"> Consulte todos os serviços</h2>
                <div class="linhas2"></div>
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
