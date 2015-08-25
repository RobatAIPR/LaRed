<?php
/**
 * Template Name: Página de Inicio
 * The template for displaying the Front Page/Página de Inicio.
 *
 * @package LaRed
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="megatron">
				<h1 class="welcome-text">
					La Red Latinoamericana para la Prevención del Genocidio y Atrocidades Masivas
				</h1>
			</div><!-- megatron -->


	<?php while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content', 'front' );
	endwhile; ?>
	
		</main><!-- #main -->
	</div><!-- #primary -->


<?php //get_sidebar(); ?>
<?php get_footer(); ?>

