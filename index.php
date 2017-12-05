<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tecline
 */

get_header(); ?>

	<div class="header__hero">
		<div class="hero__nav">
			<figure class="logo__hero">
				<?php the_custom_logo(); ?>
				

			</figure>
			<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'tecline' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
		</div>

		<div class="hero__content">
			<div class="hero__title">
				<h1>DISEÑO Y DESARROLLO WEB</h1>
				<h2 class="bold__barlow">Creamos tu página web <br> deacuerdo a tus necesidades</h2>
				<div class="divider__hero"></div>
				<p class="hero__services">Diseños de páginas web  ¡innovadoras! <br>
					Somos expertos en el desarrollo de páginas web, <br> aplicaciones móviles, posicionamiento web y software a la medida.
				</p>
				<a href="#" class="btn__showmore">
					CONOCER MÁS
				</a>
			</div>
			
			<div class="hero__image">
				<figure>
					<img src=" <?php echo bloginfo( 'template_url' ).'/img/isometric.png'; ?> " alt="">
				</figure>
			</div>
			
		</div>

	</div>

	<div class="container">	
		<h4 class="title__tecline bold__barlow">Diseñamos y desarrollamos experiencias dígitales enfocadas al ámbito web y móvil</h4>

		<!-- servicios -->
		<div class="tecline__services">
			<div class="service__card">	
				<div class="service__title">
					<figure>
						<img src=" <?php echo bloginfo( 'template_url' ).'/img/devices.png'; ?>" alt="">
					</figure>
					<p class="bold__barlow">
						Sitio Informativo
					</p>
				</div>
				<div class="service__description">
					<p>
						Ideal para dar a conocer sus productos, servicios o actividades, con este sitio web podrá transmitir información general  acerca de su empresa, noticias, promociones, datos de contacto, etc.
					</p>
				</div>
				<a href="#" class="btn__service">
					MÁS INFORMACIÓN
				</a>
			</div>

			<div class="service__card">	
				<div class="service__title">
					<figure>
						<img src=" <?php echo bloginfo( 'template_url' ).'/img/devices.png'; ?>" alt="">
					</figure>
					<p class="bold__barlow">
						Sitio Informativo
					</p>
				</div>
				<div class="service__description">
					<p>
						Ideal para dar a conocer sus productos, servicios o actividades, con este sitio web podrá transmitir información general  acerca de su empresa, noticias, promociones, datos de contacto, etc.
					</p>
				</div>
				<a href="#" class="btn__service">
					MÁS INFORMACIÓN
				</a>
			</div>

			<div class="service__card">	
				<div class="service__title">
					<figure>
						<img src=" <?php echo bloginfo( 'template_url' ).'/img/devices.png'; ?>" alt="">
					</figure>
					<p class="bold__barlow">
						Sitio Informativo
					</p>
				</div>

				<div class="service__description">
					<p>
						Ideal para dar a conocer sus productos, servicios o actividades, con este sitio web podrá transmitir información general  acerca de su empresa, noticias, promociones, datos de contacto, etc.
					</p>
				</div>
				<a href="#" class="btn__service">
					MÁS INFORMACIÓN
				</a>
			</div>

			<div class="service__card">	
				<div class="service__title">
					<figure>
						<img src=" <?php echo bloginfo( 'template_url' ).'/img/devices.png'; ?>" alt="">
					</figure>
					<p class="bold__barlow">
						Sitio Informativo
					</p>
				</div>

				<div class="service__description">
					<p>
						Ideal para dar a conocer sus productos, servicios o actividades, con este sitio web podrá transmitir información general  acerca de su empresa, noticias, promociones, datos de contacto, etc.
					</p>
				</div>
				<a href="#" class="btn__service">
					MÁS INFORMACIÓN
				</a>
			</div>

			<div class="service__card">	
				<div class="service__title">
					<figure>
						<img src=" <?php echo bloginfo( 'template_url' ).'/img/devices.png'; ?>" alt="">
					</figure>
					<p class="bold__barlow">
						Sitio Informativo
					</p>
				</div>

				<div class="service__description">
					<p>
						Ideal para dar a conocer sus productos, servicios o actividades, con este sitio web podrá transmitir información general  acerca de su empresa, noticias, promociones, datos de contacto, etc.
					</p>
				</div>
				<a href="#" class="btn__service">
					MÁS INFORMACIÓN
				</a>
			</div>

			<div class="service__card">	
				<div class="service__title">
					<figure>
						<img src=" <?php echo bloginfo( 'template_url' ).'/img/devices.png'; ?>" alt="">
					</figure>
					<p class="bold__barlow">
						Sitio Informativo
					</p>
				</div>

				<div class="service__description">
					<p>
						Ideal para dar a conocer sus productos, servicios o actividades, con este sitio web podrá transmitir información general  acerca de su empresa, noticias, promociones, datos de contacto, etc.
					</p>
				</div>
				<a href="#" class="btn__service">
					MÁS INFORMACIÓN
				</a>
			</div>


		</div>


			
				<h4 class="title__tecline bold__barlow">Conoce núestros últimos proyectos</h4>
		</div>

	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_sidebar();
get_footer();
