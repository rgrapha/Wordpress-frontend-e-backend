<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="servicos" class="noticias" tabindex="-1" role="main">
		<section id="barra-breadcrumb" class="barra-breadcrumb">
	        <article class="container">
	             <title><?php the_title(); ?></title>
	                <ul>
	                    <li>
	                        <a href="<?php echo esc_url( home_url( 'home' ) ); ?>">
	                            <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin: 0px;" >
	                                <path d="M12 26V17H18V26H25.5V14H30L15 0.5L0 14H4.5V26H12Z" fill="#393E46" fill-opacity="0.75"/>
	                            </svg>
	                            <svg width="4" height="8" viewBox="0 0 4 8" fill="none" xmlns="http://www.w3.org/2000/svg">
	                                <path d="M0.666687 7.33333L4.00002 4L0.666687 0.666664V7.33333Z" fill="#393E46" fill-opacity="0.75"/>
	                            </svg>
	                        </a>
	                    </li> 
	                     <li>
	                    	<a href="<?php echo esc_url( home_url( 'noticias-e-videos' ) ); ?>">VÍDEOS E NOTÍCIAS
	                    		<svg width="4" height="8" viewBox="0 0 4 8" fill="none" xmlns="http://www.w3.org/2000/svg">
	                                <path d="M0.666687 7.33333L4.00002 4L0.666687 0.666664V7.33333Z" fill="#393E46" fill-opacity="0.75"/>
	                            </svg>
	                    	</a>
	                    </li>
	                    <li>
	                    	<a href="<?php echo esc_url( home_url( 'noticias' ) ); ?>">TODAS NOTÍCIAS
	                    		<svg width="4" height="8" viewBox="0 0 4 8" fill="none" xmlns="http://www.w3.org/2000/svg">
	                                <path d="M0.666687 7.33333L4.00002 4L0.666687 0.666664V7.33333Z" fill="#393E46" fill-opacity="0.75"/>
	                            </svg>
	                    	</a>
	                    </li>	                   
	                    <li><h1><?php the_title(); ?></h1></li>
	                </ul>
	        </article>          
	    </section>	       
       	<section class="container">
        	<article class="compartilha">
        		<p>Última Modificação: <?php the_time('j\/m\/Y') ?></p>
        		<div>
        			<a  title='Imprimir conteúdo' href='javascript:window.print()'><img src="<?php echo get_template_directory_uri(); ?>/assets/images/imprimir.svg"></a>
        			<p>Compartilhe: </p>
        			<a href="https://www.facebook.com/sharer.php?u=<?php the_permalink() ?>" target="_blank" title="Compartilhar <?php the_title();?> no Facebook"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook2.svg"></a>	        			
        			<a href="" id="whatsapp-share-btt" rel="nofollow" target="_blank" title="Compartilhar <?php the_title();?> no Whatsapp"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.svg"></a>
					<button data-container="body" data-toggle="popover" data-placement="top" data-content="Link copiado" class="btn" data-clipboard-text="<?php the_permalink() ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/link.svg"></button>						
        		</div>
        	</article>
        	<article class="detalhes">
        		<h3><?php the_title();?></h3>
        		<div class="imagem">
        			<?php echo odin_thumbnail( 956, 576, false,false);?>        		
        			<p>Imagem: Divulgação</p>
        		</div>
        		<div class="texto">
        			 <?php the_content();?>
        		</div>
        		<a href="<?php echo esc_url( home_url( 'noticias' ) ); ?>" class="voltar">
        			<svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M8.64002 16L10.52 14.12L4.41335 8L10.52 1.88L8.64002 -1.64355e-07L0.640019 8L8.64002 16Z" fill="#8CB81A"/>
					</svg>
 				Voltar</a>              
        	</article>
        	<aside>
        		<h4><img src="<?php echo get_template_directory_uri(); ?>/assets/images/estrela.svg"> Notícias mais lidas</h4>
        		<ol class="coluna1">
                    <?php
                        $args = array(
                            'post_type' => 'noticias',
                            'posts_per_page' => 5                                
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
                <div class="util">
                	<p>Este conteúdo foi útil?</p>
                	<?php echo do_shortcode('[posts_like_dislike]');?>
                </div>                    
        	</aside>	        	
        </section>
		</main><!-- #main -->
		<script async="" src="//www.google-analytics.com/analytics.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
		<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
		<script type="text/javascript">
			//Constrói a URL depois que o DOM estiver pronto
			document.addEventListener("DOMContentLoaded", function() {
			    //conteúdo que será compartilhado: Título da página + URL
			    var conteudo = encodeURIComponent(document.title + " " + window.location.href);
			    //altera a URL do botão
			    document.getElementById("whatsapp-share-btt").href = "https://api.whatsapp.com/send?text=" + conteudo;
			}, false);
			
			const clipboard = new ClipboardJS('.btn')			
		</script>
<?php
get_footer();
