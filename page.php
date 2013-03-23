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
<!-- .page.php /-->
	<?php do_atomic( 'before_content' ); // firewood_before_content ?>
	<div class="hfeed content" role="main">

		<?php do_atomic( 'open_content' ); // firewood_open_content ?>

			<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php do_atomic( 'before_entry' ); // firewood_before_entry ?>

				<div class="<?php firewood_entry_class(); ?>">

					<?php do_atomic( 'open_entry' ); // firewood_open_entry ?>

						<div class="entry-content">
							<?php if ( current_theme_supports( 'get-the-image' ) ) get_the_image( array( 'meta_key' => 'Thumbnail', 'size' => 'thumbnail' ) ); ?>

							<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'firewood' ) ); ?>
							
							<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'firewood' ), 'after' => '</p>' ) ); ?>
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
		<div class="colophon-posts">
		<?php wp_reset_postdata(); ?>
		
		<?php query_posts('post_type=post' . '&showposts=4'); ?>

<?php $variable=0;?>

<div class="first-row">
<?php while ( have_posts() ) : the_post(); ?>
<?php if(($variable+1)<3){ ?>
<?php if ( current_theme_supports( 'get-the-image' ) ) get_the_image( array( 'meta_key' => 'Thumbnail', 'size' => 'thumbnail' ) ); ?>
<?php $variable+=1; ?>
<?php }else{ ?>
<?php $variable=1; ?>
</div>

<div class="second-row">

<?php if ( current_theme_supports( 'get-the-image' ) ) get_the_image( array( 'meta_key' => 'Thumbnail', 'size' => 'thumbnail' ) ); ?>

<?php }?>
<?php endwhile; ?>
</div>

			    

			  
		</div>
	</div><!-- / .content -->
	

	<?php do_atomic( 'after_content' ); // firewood_after_content ?>

	<?php get_footer(); // Loads the footer.php template. ?>