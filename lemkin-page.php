<?php
/*
 * Template name: Seminario Lemkin
 * The template for displaying a News and Events.
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

			<?php
			  $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
			  if ($children) { ?>
			  <ul class="lemkin-list">
			  <?php echo $children; ?>
			  </ul>
		  <?php } ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
