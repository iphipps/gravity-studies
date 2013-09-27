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
											
											<div class="required-info">
												*Required information
											</div>
										</fieldset>
										<fieldset>	

											<div class="message">
												<label for="message">Message</label>
												<textarea name="entry.1322946293" rows="4" cols="0" class="ss-q-long" id="entry_1322946293" dir="auto" placeholder="Please enter message or inquiry here"></textarea>
												
											</div><!-- / .message -->

											<div class="permalink">
												
												<input type="text" name="entry.1357293021" value="<?php echo get_the_title($ID); ?>" class="ss-q-short" id="entry_1357293021" dir="auto" title="">
											</div><!-- / .permalink -->

											<div class="submit">
												<input type="hidden" name="draftResponse" value="[]
">
												<input type="hidden" name="pageHistory" value="0">


												<input type="submit" name="submit" value="Send Message" id="ss-submit">
												
											</div><!-- / .submit -->

										</fieldset>

									</form>

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