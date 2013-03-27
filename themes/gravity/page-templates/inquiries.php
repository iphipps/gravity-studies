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
							<div class="inquiry-bundle">
								<div class="owner-contact">
									<address>
										38 Charles Street<br /> 
										Suite 4<br />
										Boston, Massachusetts 02114<br />
										T: 305.794.9417<br />
										<br />
										
										Inquiries<br />
										gravity.studies.art@gmail.com
									</address>
								</div>
								<div class="contact-form">
									<form id="contact" class="contact" action="http://us.huntandgather.com/" method="post">

										<fieldset>

											<div class="name">
												<label for="name">First Name</label>
												<input name="name" type="text" placeholder="First Name*" required autofocus />
											</div><!-- / .name -->

											<div class="last-name">
												<label for="lastname">Last Name</label>
												<input name="lastname" type="text" placeholder="Last Name*" required autofocus />
											</div><!-- / .name -->
											<div class="company">
												<label for="company">Company</label>
												<input name="company" type="text" placeholder="Company" />
											</div><!-- / .company -->
											<div class="email">
												<label for="email">Email</label>
												<input name="email" type="email" placeholder="Email*" required />
											</div><!-- / .email -->
											<div class="phone">
												<label for="phone">Phone</label>
												<input name="phone" type="phone" placeholder="Phone Number*" required />
											</div><!-- / .email -->
											
											<div class="required-info">
												*Required information
											</div>
										</fieldset>
										<fieldset>	

											<div class="message">
												<label for="message">Message</label>
												<textarea name="message" rows="4" cols="10" placeholder="Please enter message or inquiry here"></textarea>
											</div><!-- / .message -->

											<div class="permalink">
												<input name="permalink" type="hidden" value="<?php the_permalink() ?>">
												<input name="pagetitle" type="hidden" value="<?php echo get_the_title($ID); ?>">
											</div><!-- / .permalink -->

											<div class="submit">
												<button name="submit" type="submit">Send Message</button>
											</div><!-- / .submit -->

										</fieldset>

									</form><!-- / .contact -->

								</div><!-- / .contact-form-->





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