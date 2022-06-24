<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

		</div><!-- .row -->
	</div><!-- #wrapper -->

	<footer id="footer" role="contentinfo">
		<section class="container">
			<div class="dados">
				<article class="contatos-footer">
					<h3>Casa do Cidadão</h3>
					<div class="box">
						<b>Contato</b>
						<div class="telefone">
							<a href="tel:(35) 3435-1648">(35) 3435-2052 </a><span>|</span>
							<a href="tel:(35) 3435-1648">(35) 3435-1648 </a>
						</div>
					</div>
					<div class="box">
						<b>Endereço</b>
						<p>R. João Mendes, 176 -</p>
						<p>Extrema, MG, 37640-000</p>
						<a href="https://goo.gl/maps/4G7uHAuY3SVLYD1m8" onclick="window.open(this.href); return false;">
							<div>
								<p>Como chegar 
									<svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 6L0 12V0L6 6Z" fill="#fff"/>
                                    </svg>
                                </p>
                            </div>
                        </a>
					</div>
					<div class="box">
						<b>Horário de Funcionamento</b>
						<p>Segunda a sexta-feira, das 08h às 17h</p>
						<p>(sem intervalos no almoço)</p>
					</div>
					<div class="rede-social">
						<a href="https://www.facebook.com/camaramunicipalextrema" alt="Facebook" title="Facebook" target="_blank">
							<img  src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="Facebook"/>					
						</a>
						<a href="https://www.instagram.com/camaradeextrema" alt="Instagram" title="Instagram" target="_blank">
							<img  src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="Instagram"/>	
						</a>
						<a href="https://www.youtube.com/channel/UCLawx6I_wLyu6HhFsCpO1xA" alt="Youtube" title="Youtube" target="_blank">
							<img  src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.svg" alt="Youtube"/>		
						</a>
					</div>
				</article>
				<article class="contatos-footer">
					<h3>CAC</h3>
					<div class="box">
						<b>Contato</b>
						<a href="tel:(35) 3435-1648">(35) 9 9839-1153</a>
						<a href="mailto:cac@camarextrema.mg.gov.br">cac@camarextrema.mg.gov.br</a>
					</div>
					<h3>PROCON</h3>
					<div class="box">
						<b>Contato</b>
						<a href="tel:(35) 9 9902-3268">(35) 9 9902-3268 </a>
						<a href="mailto:procon@camarextrema.mg.gov.br">procon@camarextrema.mg.gov.br</a>
					</div>
					<div class="botoes box">						
                        <a href="<?php echo esc_url( home_url( 'politica-de-privacidade' ) ); ?>"><h3>Política de privacidade </h3></a>
					</div>
				</article>
				<!-- <article class="localizacao">
					<h3>Localização</h3>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.5611183831716!2d-46.323397084488604!3d-22.85572144179817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ceac3387c4c51d%3A0xd57776c1aee46919!2sCasa%20do%20Cidad%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1652121697262!5m2!1spt-BR!2sbr" width="530" height="418" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</article> -->
				<article class="logos">
					<a class="cidadao" href="<?php echo esc_url( home_url( 'home' ) ); ?>" alt="Casa do Cidadão" title="Casa do Cidadão"><img style="width: 190px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/CasaDoCidadao2.svg"/></a>
					<a href="<?php echo esc_url( home_url( 'home' ) ); ?>" alt="Câmara Municipal de Extrema-MG" title="Câmara Municipal de Extrema-MG"><img style="width: 290px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/camaramunicipal.svg"/></a>
				</article>
			</div>
		</section>
		<section class="copyright">	
			<p alt="Copyright 2018© Todos os direitos reservados." title="Copyright 2018© Todos os direitos reservados." >Copyright 2022© Todos os direitos reservados.</p>
			<a href="https://www.comunicamarketing.com.br/" target="_blank" alt="Idea Publicidade" title="Idea Publicidade">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/idea.png" alt="Idea Publicidade"/>
			</a>
		</section>	
	</footer><!-- #footer -->

	<?php wp_footer(); ?>
</body>
</html>
