<?php
/*
 * The index template is display when a template with higher
 * specificity is not included in a theme.
 *
 * @since 1.0
 * @package firewood
 * @subpackage Template
 */?>

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
				<?php echo '<a href="' . home_url() . '" title="Gravity Studies" rel="home">'; ?>Gravity Studies</a></h1>
				<h2 class="description site-description"><span class="paintings">Paintings </span><span class="by">BY </span><span class="nicole">Nicole</span><span class="martinez">Martinez</span></h2>				
				</div>

			</div><!-- / .branding -->
				
			
		</div>
		<div class="main">

			<?php do_atomic( 'open_main' ); // firewood_open_main ?>
	<?php do_atomic( 'before_content' ); // firewood_before_content ?>
	<!-- .singular.php /-->
	<div class="hfeed content" role="main">

		<?php do_atomic( 'open_content' ); // firewood_open_content ?>

			<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php do_atomic( 'before_entry' ); // firewood_before_entry ?>

				<div class="<?php firewood_entry_class(); ?>">

					

						<div class="entry-content">
							<div class="column_1">
								<div class="main-menu" role="navigation">
										<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
								</div>
								<div class="entry-paragraph">
									
									<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'firewood' ) ); ?>

									
								</div>
								
								
								<?php 
									$field = get_field_object('sold');
									$value = get_field('sold');
									$sold = $value['0'];
						



									if($sold){
										if($sold == 'Sold'){
											echo '<a href="http://gravitystudies.com" class="inquiry-purchase button-grey">Sold</a>';
										}else{
											echo '<a href="#" data-toggle="modal" data-target="#myModal" class="inquiry-purchase">Inquire For Purchase</a>';
										}
									}else{
										echo '<a href="#" data-toggle="modal" data-target="#myModal" class="inquiry-purchase">Inquire For Purchase</a>';
									};

								?>
								</a>
							</div>
							<div class="hero-image">
							<?php if( get_field('big_image') ): ?>
							<img src="<?php the_field('big_image'); ?>" alt="" height="850px" width="850px" />
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


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <a class="close" data-dismiss="modal" aria-hidden="true">&times;</a>
        <h3 class="modal-title" id="myModalLabel">Inquiry for Purchase</h3>
      </div>
      <div class="modal-body">
     <div class="contact-form">
									<form action="https://docs.google.com/forms/d/1Gj6DE-hXM0tUnNbrWsr0RoVorZX6bi3Rvc2er8e6Puc/formResponse" method="POST" id="ss-form" target="_self" onsubmit="" class="contact">

										<fieldset>

											<div class="name">
												<label for="name">First Name</label>
												<input type="text" name="entry.1517324396" value="" class="ss-q-short valid" id="entry_1517324396" dir="auto" placeholder="First name" title="">
											</div><!-- / .name -->

											<div class="last-name">
												<label for="lastname">Last Name</label>
												<input type="text" name="entry.1498728479" value="" class="ss-q-short" id="entry_1498728479" dir="auto" placeholder="Last Name*" title="">
											</div><!-- / .name -->
											<div class="company">
												<label for="company">Company</label>
												<input type="text" placeholder="Company" name="entry.793541048" value="" class="ss-q-short" id="entry_793541048" dir="auto" title="">

											</div><!-- / .company -->
											<div class="email">
												<label for="email">Email</label>
												<input type="text" name="entry.1638423795" value="" class="ss-q-short" id="entry_1638423795" dir="auto" aria-required="true" required="" placeholder="Email*" title="">
											</div><!-- / .email -->
											<div class="phone">
												<label for="phone">Phone</label>
												<input type="text" name="entry.101525431" value="" class="ss-q-short" id="entry_101525431" dir="auto" title="" placeholder="Phone Number*">
											</div><!-- / .email -->
											
											
										</fieldset>
										<fieldset>	

											<div class="message">
												<label for="message">Message</label>
												<textarea name="entry.1322946293" rows="4" cols="0" class="ss-q-long" id="entry_1322946293" dir="auto" placeholder="Please enter message or inquiry here"></textarea>
												
											</div><!-- / .message -->

											<div class="permalink">
												
												<input type="text" name="entry.1357293021" value="<?php echo get_the_title($ID); ?>" class="ss-q-short hidden" id="entry_1357293021" dir="auto" title="">
											</div><!-- / .permalink -->
											<div class="required-info">
												*Required information
											</div>
											<div class="submit">
												<input type="hidden" name="draftResponse" value="[]
">
												<input type="hidden" name="pageHistory" value="0">


												<input type="submit" class="inquiry-purchase" name="submit" value="Send Message" id="ss-submit">
												
											</div><!-- / .submit -->

										</fieldset>

									</form>

								</div><!-- / .contact-form-->
      </div>

    </div>
  </div>
</div>

	<?php do_atomic( 'after_content' ); // firewood_after_content ?>

	<?php get_footer(); // Loads the footer.php template. ?>