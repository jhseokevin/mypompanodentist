<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boom_Starter_Child
 */

?>

	<footer id="colophon" class="site-footer d-none">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'boom-starter' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'boom-starter' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'boom-starter' ), 'boom-starter', '<a href="https://www.ibsofts.com">iB Softs</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->



	<footer>
        <section class="footer--row">
            <section class="container-fluid">
                <div class="row ">
                    <div class="col-xl-4 col-lg-4 col-sm-6 col-sm-12 mb-4">
                        <div class="footer--area">
                      <?php  $maps =  get_field('google_maps' , 'option');   ?>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.365172119605!2d-80.09829608496902!3d26.249809183417618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9a6004c2db39f%3A0x87ac0a90dce443d9!2sMy%20Pompano%20Dentist%20Dental%20Implants%20-%20Andrew%20Browne%20DDS%20PA!5e0!3m2!1sen!2sph!4v1674395488013!5m2!1sen!2sph" width="100%" height="250" style="border: 0" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <h5 class="text-light">
                                2700 NE 14th St Causeway #105
                            </h5>
                            <h6 class="text-light">Pompano Beach, FL 33062</h6>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 col-sm-12  mb-4">
                        <div class="footer--area">
                            <div class="time--lists">
                                <h3 class="text-light">OUR HOURS</h3>
                                <ul class="m-0">
                                    <li><span>Monday  </span> <span>8:00 AM - 5:00PM</span> </li>
                                    <li><span>Tuesday  </span> <span>8:00 AM - 5:00PM</span> </li>
                                    <li><span>Wednesday  </span> <span>8:00 AM - 5:00PM</span> </li>
                                    <li><span>Thursday  </span> <span>8:00 AM - 5:00PM</span> </li>
                                    <li><span>Friday  </span> <span>8:00 AM - 12:00PM</span> </li>
                                    <li><span>Sat & Sun </span> <span>Closed</span> </li>
                                </ul>
                                <div class="social--icons">
                                    <ul class="d-flex m-0 ">
                                         <?php
                                        while( have_rows('social_label', 'option') ){ the_row(); 
                                                                                   
                                           $facbookLink = get_sub_field('facebook_link');
                                           $twitterLink = get_sub_field('twitter_link');
                                           $YoutubeLink = get_sub_field('youtube_link');   
                                           $instagram = get_sub_field('instagram_link');   
                                          ?>
                                        <li>
                                            <a href="<?php echo $facbookLink["url"] ?>"> <i class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $twitterLink["url"] ?>"> <i class="fa-brands fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $YoutubeLink["url"] ?>"><i class="fa-brands fa-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $instagram["url"]  ?>"><i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                  <?php }  ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 col-sm-12  mb-4">
                        <div class="footer--area">
							<?php echo do_shortcode( '[gravityform id="1" title="false" description="false"]' ); ?>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="m-0 text-center text-light mt-4 footer--txt ">© <span id="year"></span> All Rights Reserved | Privacy Policy  | Website Accessibility</p>
                </div>
            </section>
        </section>
    </footer>


</div><!-- #page -->


<?php wp_footer(); ?>
<script type="text/javascript" src="//cdn.callrail.com/companies/796611255/6153ba291d2cd33de542/12/swap.js"></script> 
</body>
</html>