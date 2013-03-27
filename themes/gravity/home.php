<?php
/*
 * The index template is display when a template with higher
 * specificity is not included in a theme.
 *
 * @since 1.0
 * @package firewood
 * @subpackage Template
 */

 ?>
<!-- .home.php /-->
	<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">

		<title><?php wp_title(''); ?></title>

		<meta name="viewport" content="initial-scale=1.0, width=device-width">

		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

		<link rel="profile" href="http://gmpg.org/xfn/11">

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); // wp_head ?>

		<script src="<?php echo get_stylesheet_directory_uri() . '/js/modernizr-2.5.3.min.js'?>"></script>

	</head>

	<body class="<?php firewood_body_class(); ?>">
		<div class="top">
	<div class="banner" role="banner">
	
			
			<div class="branding">
				<div class="top-header">
				<h1 class="title site-title">
				<?php echo '<a href="' . home_url() . '" title="Gravity Studies" rel="home">'; ?><span class="title-background"></span><span class="title-gravity">Gravity</span> <span class="title-studies">Studies</a></h1>
				<h2 class="description site-description"><span class="paintings">Paintings </span><span class="by">BY </span><span class="nicole">Nicole</span><span class="martinez">Martinez</span></h2>				
				</div>

			</div><!-- / .branding -->
				
			
		</div>
		<div class="main">

			<?php do_atomic( 'open_main' ); // firewood_open_main ?>
	
	<?php do_atomic( 'before_content' ); // firewood_before_content ?>

	<div class="hfeed content" role="main">
	
		<div class="column-1">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		
		</div>

		<?php do_atomic( 'open_content' ); // firewood_open_content ?>

			<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php do_atomic( 'before_entry' ); // firewood_before_entry ?>
				
				<div class="<?php firewood_entry_class(); ?>">
						
					<?php do_atomic( 'open_entry' ); // firewood_open_entry ?>
						
						<div class="entry-content">
							<?php if ( current_theme_supports( 'get-the-image' ) ) get_the_image( array( 'meta_key' => 'Thumbnail', 'size' => 'medium' ) ); ?>

							<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'firewood' ) ); ?>
							
							
						</div><!-- / .entry-content -->
						<a class="link-to-post" href="<?php echo get_permalink(); ?>">
						</a>

				</div><!-- / .hentry -->
				
				<?php if ( is_singular() ) { ?>

					<?php do_atomic( 'after_singular' ); // firewood_after_singular ?>

				

				<?php } ?>

				<?php do_atomic( 'after_entry' ); // firewood_after_entry ?>

			<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'loop-error' ); // Loads the loop-error.php template. ?>

			<?php endif; ?>

		

	

	<?php do_atomic( 'after_content' ); // firewood_after_content ?>
	</div><!-- / .content -->
	<?php get_footer(); // Loads the footer.php template. ?>