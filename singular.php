<?php
/*
 * The index template is display when a template with higher
 * specificity is not included in a theme.
 *
 * @since 1.0
 * @package firewood
 * @subpackage Template
 */

get_header(); // Loads the header.php template. ?>
	<?php do_atomic( 'before_content' ); // firewood_before_content ?>
	<!-- .singular.php /-->
	<div class="hfeed content" role="main">

		<?php do_atomic( 'open_content' ); // firewood_open_content ?>

			<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php do_atomic( 'before_entry' ); // firewood_before_entry ?>

				<div class="<?php firewood_entry_class(); ?>">

					<?php do_atomic( 'open_entry' ); // firewood_open_entry ?>

						<div class="entry-content">
							<div class="entry-paragraph">
								<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'firewood' ) ); ?>

								<a href="#" class="inquiry-purchase">Inquire For Purchase</a>
							</div>
							<div class="hero-image">
							<?php if( get_field('big_image') ): ?>
							<img src="<?php the_field('big_image'); ?>" alt="" />
							<?php endif;?>

							</div>

							
							
							
						</div><!-- / .entry-content -->

					<?php do_atomic( 'close_entry' ); // firewood_close_entry ?>

				</div><!-- / .hentry -->

				<?php if ( is_singular() ) { ?>

					<?php do_atomic( 'after_singular' ); // firewood_after_singular ?>

					
				<?php } ?>

				<?php do_atomic( 'after_entry' ); // firewood_after_entry ?>

			<?php endwhile; ?>

			<?php else : ?>

				

			<?php endif; ?>

		

	</div><!-- / .content -->

	<?php do_atomic( 'after_content' ); // firewood_after_content ?>

	<?php get_footer(); // Loads the footer.php template. ?>