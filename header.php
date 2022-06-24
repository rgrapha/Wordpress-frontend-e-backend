<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a id="skippy" class="sr-only sr-only-focusable" href="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
		</div>
	</a>
	<!-- VLibras Acessibilidade -->
	  	<div class="V-libras">
	  		<div vw class="enabled">
			    <div vw-access-button class="active"></div>
			    <div vw-plugin-wrapper>
			      <div class="vw-plugin-top-wrapper"></div>
			    </div>
		  	</div>
		  	<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
			<script>
			    new window.VLibras.Widget('https://vlibras.gov.br/app');
		  	</script>
	  	</div>


	<header id="header" role="banner" class="header">
		<div id="menu" class="menu-desktop">
			<div class="logo-principal">
				<div>
					<a href="<?php echo esc_url( home_url( 'home' ) ); ?>" alt="Casa do Cidadão" title="Casa do Cidadão"><img  src="<?php echo get_template_directory_uri(); ?>/assets/images/CasaDoCidadao.svg" alt="Casa do Cidadão"/></a>
				</div>	
			</div>	
			
			<div id="main-navigation" class="main-navigation navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
					<span class="sr-only"><?php _e( 'Toggle navigation', 'odin' ); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<nav class="collapse navbar-collapse navbar-main-navigation" role="navigation">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'nav navbar-nav',
								'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
								'walker'         => new Odin_Bootstrap_Nav_Walker()
							)
						);
					?>
				</nav><!-- .navbar-collapse -->
				<form autocomplete="off" method="get" class="navbar-form navbar-right" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
					<label for="navbar-search" class="sr-only">
						<?php _e( 'Search:', 'odin' ); ?>
					</label>
					<div class="form-group">
						<input type="search" value="<?php echo get_search_query(); ?>" class="form-control" name="s" id="navbar-search" placeholder="Busque o serviço desejado aqui..." />
					</div>
					<button type="submit" class="btn btn-default">
						<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.5 11H11.71L11.43 10.73C12.41 9.59 13 8.11 13 6.5C13 2.91 10.09 0 6.5 0C2.91 0 0 2.91 0 6.5C0 10.09 2.91 13 6.5 13C8.11 13 9.59 12.41 10.73 11.43L11 11.71V12.5L16 17.49L17.49 16L12.5 11ZM6.5 11C4.01 11 2 8.99 2 6.5C2 4.01 4.01 2 6.5 2C8.99 2 11 4.01 11 6.5C11 8.99 8.99 11 6.5 11Z" fill="#393E46" fill-opacity="0.5"/>
						</svg>
					</button>
				</form>
			</div>						
		</div>

		<div class="btn-acessibilidade">
			<a href="https://www.gov.br/governodigital/pt-br/acessibilidade-digital" target="_blank">Acessibilidade</a>
			<input id="dark" class="lamp" type="checkbox" aria-label="dark"/>
		</div>

		<div class="menu-mobile" id="menu-mobile">
			<div class="barra">
				<a href="<?php echo esc_url( home_url( 'home' ) ); ?>" alt="Casa do Cidadão" title="Casa do Cidadão" class="logo">
					<img  src="<?php echo get_template_directory_uri(); ?>/assets/images/CasaDoCidadao.svg" alt="Casa do Cidadão"/>
				</a>
			
				<div class="menu-trigger" id="menu-trigger">
					<input type="checkbox" id="check">
					<label id="icone" class="icone" for="check"></label>
					<span></span>
				</div>
				
				<div class="conteudo" id="menu-hidde">
					<div class="box-menu Explorar">						
						<div id="main-navigation2" class="navbar navbar-default main-navigation2">
							<nav class="navbar-header">		
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'main-menu',
											'depth'          => 2,
											'container'      => false,
											'menu_class'     => 'nav navbar-nav',
											'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
											'walker'         => new Odin_Bootstrap_Nav_Walker()
										)
									);
								?>
								<ul class="nav navbar-nav"><li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.gov.br/governodigital/pt-br/acessibilidade-digita" target="_blank">Acessibilidade</a></li></ul>
							</nav>
						</div>							
					</div>
				</div>
				<form class="form-mobile" autocomplete="off" method="get" class="navbar-form navbar-right" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
					<label for="navbar-search" class="sr-only">
						<?php _e( 'Search:', 'odin' ); ?>
					</label>
					<div class="form-group">
						<input type="search" value="<?php echo get_search_query(); ?>" class="form-control" name="s" id="navbar-search" placeholder="Busque o serviço desejado aqui..." />
					</div>
					<button type="submit" class="btn btn-default">
						<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.5 11H11.71L11.43 10.73C12.41 9.59 13 8.11 13 6.5C13 2.91 10.09 0 6.5 0C2.91 0 0 2.91 0 6.5C0 10.09 2.91 13 6.5 13C8.11 13 9.59 12.41 10.73 11.43L11 11.71V12.5L16 17.49L17.49 16L12.5 11ZM6.5 11C4.01 11 2 8.99 2 6.5C2 4.01 4.01 2 6.5 2C8.99 2 11 4.01 11 6.5C11 8.99 8.99 11 6.5 11Z" fill="#393E46" fill-opacity="0.5"/>
						</svg>
					</button>
				</form>
			</div>
		</div>
	</header>
