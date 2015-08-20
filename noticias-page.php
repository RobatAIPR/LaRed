<?php
/*
 *
 * Template name: Noticias y Eventos
 *
 */

get_header(); 

	while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content', 'page' );
	endwhile; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php 

			// WP_Query arguments
			$args = array (
				'post_type'              => array( 'noticias' ),
			);

			// The Query
			$query = new WP_Query( $args );

			// The Loop
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();

			?>

				 <h3><?php echo date('F Y', strtotime( $month ) ); ?></h3>
		      <ul>
		          <li class="post-item">
		            <a href="<?php the_permalink(); ?>">
		              <div class="entry">
		                <h4><?php the_title(); ?></h4>
		                <?php the_excerpt(); ?>
		              </div>
		            </a>
		          </li>
		      </ul>
				
				<?php }
			} else {
				echo 'nothing here';
			}

			// Restore original Post Data
			wp_reset_postdata(); ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
