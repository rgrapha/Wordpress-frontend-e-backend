<?php
/**
 * Template Name: Contato
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>

	<main id="contato" class="contato" tabindex="-1" role="main">
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
        <section class="container">
        	<article class="formulario">
        		<div>
        			<h3>Dúvida sobre algum serviço?</h3>
        			<p>Envie uma mensagem pra gente!</p>
			        <form autocomplete="off" id="form-contato" class="form-contato" name="enviar-email" method="post">
		        		<input class="tipo-email" type="hidden" name="tipo-email" value="faleConosco">	
						
						<label>Serviços</label>
						<select name="servico" class="escolha-secretaria" required>
							<option class="escolha" value="" disabled selected>Selecionar o serviços</option>
							<option value="procon@camarextrema.mg.gov.br">Procon</option>
							<option value="cac@camarextrema.mg.gov.br">CAC</option>
							<option value="ctps@camarextrema.mg.gov.br">CTPS</option>
							<option value="jsm@camarextrema.mg.gov.br">JSM</option>
							<option value="escolalegislativa@camarextrema.mg.gov.br">ESCOLA LEGISLATIVA</option>
							<option value="procuradoria@camarextrema.mg.gov.br">PROCURADORIA DA MULHER</option>
							<option value="uai minas@camarextrema.mg.gov.br">UAI MINAS</option>
						</select>						
						<label for="nome">Nome</label><input id="nome" type="text" name="nome" required>
						<label for="email">E-mail</label><input id="email" type="email" name="email" required>
						<label for="telefone">Telefone</label><input id="telefone" type="tel" name="telefone" required spellcheck="true">
						<label for="mensagem">Mensagem</label><textarea id="mensagem" type="text" name="mensagem" required spellcheck="true"></textarea>
					
						<!-- Recaptcha -->
							<div class="g-recaptcha_align campo4">
								<div class="g-recaptcha" data-sitekey="6Lc7wCEaAAAAAOIAAieBUzNR5CFjN4a4BsvpY_JX"></div>
							</div>	
							<script>
							    window.onload = function() {
							    var recaptcha = document.forms["contato"]["g-recaptcha-response"];
							    recaptcha.required = true;
							    recaptcha.oninvalid = function(e) {
							    	// fazer algo, no caso to dando um alert
							    	alert("Por favor Click no reCaptcha para validar o Formulario.");
							      }
							    }
							</script>
									
						<label class="botao-enviar"><button value="submit">Enviar</button></label>
					
						<div class="valida-envio"></div>
						<svg width='50px' height='50px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-default load"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(0 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(30 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.08333333333333333s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(60 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.16666666666666666s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(90 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.25s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(120 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.3333333333333333s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(150 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.4166666666666667s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(180 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.5s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(210 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.5833333333333334s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(240 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.6666666666666666s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(270 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.75s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(300 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.8333333333333334s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(330 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.9166666666666666s' repeatCount='indefinite'/></rect></svg>
					</form>
        		</div>
        	</article>
        	<article class="telefones">
        		<h3>Contatos dos Serviços</h3>
        		<div class="informacoes">
	        		<?php $args = array('post_type' => 'contatos','posts_per_page' => -1);
		                $var = new WP_Query($args);
		                if($var->have_posts()):
		                    while($var->have_posts()):
		                        $var->the_post(); ?> 
			                        <?php
										$logradouro =  get_post_meta( $post->ID,'logradouro', true );
										$endereco =  get_post_meta( $post->ID,'endereco', true );
										$numero =  get_post_meta( $post->ID,'numero', true );
										$bairro =  get_post_meta( $post->ID,'bairro', true );
										$cidade =  get_post_meta( $post->ID,'cidade', true );
										$estado =  get_post_meta( $post->ID,'estado', true );
										$cep =  get_post_meta( $post->ID,'cep', true );
										$complemento =  get_post_meta( $post->ID,'complemento', true );
									
										$telefone1 =  get_post_meta( $post->ID,'telefone1', true );	
										$telefone2 =  get_post_meta( $post->ID,'telefone2', true );
										$whatsapp =  get_post_meta( $post->ID,'whatsapp', true );	
										$email =  get_post_meta( $post->ID,'email', true );
										
									?>	
			                        <div>
			                        	<h4><?php the_title(); ?></h4>

				                        <?php if ($endereco != '') { ?>									
											<p><?php echo $logradouro ?> <?php echo $endereco ?>, <?php echo $numero ?> - <?php echo $bairro ?>, <?php echo $cidade ?> / <?php echo $estado ?> <?php echo $complemento ?></p>
										<?php } else { ?>
											<span class="desabilitado">Nao tem</span>
										<?php } ?>
				                        	
				                        <?php if ($whatsapp != '') { ?>									
											<a class="whatsApp" href="https://api.whatsapp.com/send?phone=55<?php echo $whatsapp ?>&text=Olá,%20Vim%20pelo%20site%20da%20Casa%20do%20Cidadão" target="_black"><?php echo $whatsapp ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.png"></a>
										<?php } else { ?>
											<span class="desabilitado">Nao tem</span>
										<?php } ?>

										<?php if ($telefone1 != '') { ?>									
											<a class="telefone" href="tel:<?php echo $telefone1 ?>" target="_black"><?php echo $telefone1 ?></a>
										<?php } else { ?>
											<span class="desabilitado">Nao tem</span>
										<?php } ?>

										<?php if ($telefone2 != '') { ?>									
											<a class="telefone" href="tel:<?php echo $telefone2 ?>" target="_black"><?php echo $telefone2 ?></a>
										<?php } else { ?>
											<span class="desabilitado">Nao tem</span>
										<?php } ?>

										 <?php if ($email != '') { ?>									
											<a class="telefone" href="malito:<?php echo $email ?>" target="_black"><?php echo $email ?></a>
										<?php } else { ?>
											<span class="desabilitado">Nao tem</span>
										<?php } ?>
			                        </div>					
								<?php 
							endwhile;
						endif;
					wp_reset_postdata(); ?>
        		</div>
        	</article>
        </section>
	</main><!-- #main -->

<?php
get_footer();
