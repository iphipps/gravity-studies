<?php
/*
 * The header template
 *
 * @since 1.0
 * @package firewood
 * @subpackage Template
 */
?>

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

	<?php do_atomic( 'before_header' ); // firewood_before_header ?>
						
		<div class="banner" role="banner">
	
			<?php do_atomic( 'open_header' ); // firewood_open_header ?>

			<div class="branding">
				<div class="top-header">
				<?php do_atomic( 'branding' ); // firewood_branding ?>
				</div>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

			</div><!-- / .branding -->
				
			<?php do_atomic( 'close_header' ); // firewood_close_header ?>

		</div><!-- / .banner -->

		<?php do_atomic( 'before_main' ); // firewood_before_main ?>

		<div class="main">

			<?php do_atomic( 'open_main' ); // firewood_open_main ?>