 <?php
/**
 * Template Name: Inquiries
 *
 *
 * @package Gravity Studies
 * @subpackage Page Template
 *
 */ ?>


   
<?php get_header(); // Loads the header.php template. ?>
<!-- .page-template-about-us.php /-->
	<?php do_atomic( 'before_content' ); // firewood_before_content ?>
	<div class="hfeed content" role="main">

		<?php do_atomic( 'open_content' ); // firewood_open_content ?>

			<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php do_atomic( 'before_entry' ); // firewood_before_entry ?>

				<div class="<?php firewood_entry_class(); ?>">

						<div class="entry-content">
							<div class="excerpt"><?php the_excerpt(); ?></div>
							<div class="the_content">
								<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'firewood' ) ); ?>
								
								<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'firewood' ), 'after' => '</p>' ) ); ?>
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

				<?php get_template_part( 'loop-error' ); // Loads the loop-error.php template. ?>

			<?php endif; ?>

		<?php do_atomic( 'close_content' ); // firewood_close_content ?>
		
	</div><!-- / .content -->
	

	<?php do_atomic( 'after_content' ); // firewood_after_content ?>

	<?php get_footer(); // Loads the footer.php template. ?>