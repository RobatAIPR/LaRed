<?php
/*
 * Template name: Protagonistas
 * The template for displaying Protagonistas en la Prevención
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
				'post_type'              => array( 'protagonista' ),
			);

			// The Query
			$query = new WP_Query( $args );

			// The Loop
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();

			?>

		      <ul class="protagonista-list">
		          <li class="post-item">
		              <div class="entry">
		              	<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('thumbnail'); ?>
							</a>
						<?php endif; ?>
              	  	  <a href="<?php the_permalink(); ?>"><h3><?php echo get_the_title( $ID ); ?></h3></a><br/>
				 		  <h4><?php echo the_time('j \d\e\ F \d\e\l\ Y'); ?></h4>
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
