<?php
/**
 * The header for our theme
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the subpage page when no subpage.php file exists.
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * Template Name: SubPage
 * @package Boom_Starter_Child
 */
$logo = get_field('website_logo')
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	
		<style>
		.post_banner {
			text-align: center;
			padding-top: 220px;
			padding-bottom: 220px;
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			position: relative;
		}
		
		.post_banner::before {
			content: '';
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			background: rgba(0, 0, 0, 0.3);
			z-index: 1;
		}
		
		.row_post_banner {
			justify-content: center;
		}
		
		.post_title {
			z-index: 3;
		}
		
		.post_banner h1 {
			text-align: center;
			color: white;
			z-index: 100;
		}
		
		h1 span.under_h1 {
			display: block;
			font-size: 25px;
			letter-spacing: 2px;
			font-family: arial;
			font-weight: bold;
			text-transform: uppercase;
		}
		
		h2 {
			font-family: ff-monteral-two;
			color: #314062;
		}
		
		h3 {
			font-size: 20px;
			font-family: arial, sans-serif;
		}
		
		h4 {
			font-size: 20px;
		}
		
		.subpage_image_left {
			padding-top: 50px;
			padding-bottom: 50px;
		}
		
		.subpage_image_left .image_left_square1 {
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			min-height: 500px;
-webkit-box-shadow: 2px 9px 15px -5px rgba(66, 68, 90, 1);
-moz-box-shadow: 2px 9px 15px -5px rgba(66, 68, 90, 1);
box-shadow: 2px 9px 15px -5px rgba(66, 68, 90, 1);
			border-radius: 10px;
		}
		
		.subpage_image_left .image_left_square2 {
			display: flex;
			flex-direction: column;
			justify-content: center;
			padding-left: 50px;
		}
		
		.subpage_image_left .image_left_square2 a {
			background-color: #314062;
			border: 1px solid #314062;
			padding: 15px 25px 15px 25px;
			display: inline-block;
			margin-top: 20px;
			transition: .2s;
		}
		
		.subpage_image_left .image_left_square2 a:hover {
			background-color: white;
			color: #314062;
		}
		
		.subpage_image_right {
			padding-top: 50px;
			padding-bottom: 50px;
		}
		
		.subpage_image_right .image_right_square2 {
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			min-height: 500px;
-webkit-box-shadow: 2px 9px 15px -5px rgba(66, 68, 90, 1);
-moz-box-shadow: 2px 9px 15px -5px rgba(66, 68, 90, 1);
box-shadow: 2px 9px 15px -5px rgba(66, 68, 90, 1);
			border-radius: 10px;
		}
		
		.subpage_image_right .image_right_square1 {
			display: flex;
			flex-direction: column;
			justify-content: center;
			padding-right: 50px;
		}
		
		.subpage_image_right .image_right_square1 a {
			background-color: #314062;
			border: 1px solid #314062;
			padding: 15px 20px 15px 20px;
			transition: .3s;
			margin-top: 20px;
			display: inline-block;
		}
		
		.subpage_image_right .image_right_square1 a:hover {
			background-color: white;
			color: #314062;
		}
		
		.content {
			padding-top: 50px;
			padding-bottom: 50px;
		}
		
		
		.image_right_square1 .nf-form-cont {
			border: 1px solid #314062;
			padding-left: 60px;
			padding-right: 60px;
			padding-top: 30px;
		}
		
		.image_right_square1 .nf-form-cont .nf-form-title h3 {
			text-align: center;
			color: #314062;
			font-weight: bold;
		}
		
		.nf-form-content input[type=submit] {
			background-color: #314062 !important;
		}
		
		.nf-form-content input[type=submit]:hover {
			background-color: #425274 !important;
			color: white !important;
		}
		
		@media (max-width: 1199px) {}
		
		@media (max-width: 991px) {
			
			.subpage_image_left .image_left_square2 {
				padding-left: calc(var(--bs-gutter-x) * .5);
				padding-top: 20px;
			}
			
			.subpage_image_right .image_right_square1 {
				padding-right: calc(var(--bs-gutter-x) * .5);
				padding-top: 20px;
			}
			
			.subpage_image_left{
				padding-top: 10px;
				padding-bottom: 10px;
			}
			
			.subpage_image_right {
				padding-top: 10px;
				padding-bottom: 10px;
			}	

			.image_right_square1 .nf-form-cont {
				border: 0px;
			}
			
			.nf-field-label {
				display: none !important;
			}			
			
		}
		
		@media (max-width: 767px) {
			.post_banner {
				padding-top: 150px;
				padding-bottom: 150px;
			}
			
			h1 span.under_h1 {
				font-size: 20px;
				letter-spacing: 1px;
			}

			.subpage_image_left .image_left_square2 {
				padding-left: calc(var(--bs-gutter-x) * .5);
				padding-top: 20px;
			}
			
			.subpage_image_right .image_right_square1 {
				padding-right: calc(var(--bs-gutter-x) * .5);
				padding-top: 20px;
			}
			
			.subpage_image_left{
				padding-top: 10px;
				padding-bottom: 10px;
			}
			
			.subpage_image_right {
				padding-top: 10px;
				padding-bottom: 10px;
			}	

			.image_right_square1 .nf-form-cont {
				border: 0px;
			}
			
			.nf-field-label {
				display: none !important;
			}
		}
		
		@media (max-width: 575px) {
			.post_banner {
				padding-top: 100px;
				padding-bottom: 100px;
			}
			
			h1 span.under_h1 {
				font-size: 18px;
				letter-spacing: 1px;
			}
			
			.subpage_image_left .image_left_square2 {
				padding-left: calc(var(--bs-gutter-x) * .5);
				padding-top: 20px;
				min-width: 350px;
			}
			
			.subpage_image_right .image_right_square1 {
				padding-right: calc(var(--bs-gutter-x) * .5);
				padding-top: 20px;
			}
			
			.subpage_image_left{
				padding-top: 10px;
				padding-bottom: 10px;
			}
			
			.subpage_image_right {
				padding-top: 10px;
				padding-bottom: 10px;
			}
			
			.image_right_square1 .nf-form-cont {
				border: 0px;
			}
			
			.nf-field-label {
				display: none !important;
			}
			
			.subpage_image_left .image_left_square2 a {
				text-align: center;
				display: block;
			}
			
			.subpage_image_right .image_right_square2 {
				min-height: 300px;
			}
			
			.subpage_image_left .image_left_square1 {
				min-height: 300px;
			}
		}
		
		</style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'boom-starter' ); ?></a> -->
	<header id="masthead" class="site-header d-none">
		<div class="site-branding">
		    <a href="https://mypompanodentist.com/" class="navbar-brand"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/logo.png" alt="logo" class="img-fluid"></a>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'boom-starter' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	   <!-- ==== Header Start ====  -->
	   <header  id="masthead" class="theme--color">
        <nav class="navbar navbar-expand-lg d-block">
            <div class="d-flex align-items-start justify-content-between header--area">
				<div class="site-branding mb-2">
		    <a href="https://mypompanodentist.com/" class="navbar-brand"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/logo.png" alt="logo" class="img-fluid logo"></a>
				</div>
                <div class="container-fluid">
                    <div class="container-fluid d-flex justify-content-end top--txt mb-3 bg--black stick--area">
                        <ul class="d-flex m-0 top--list">
                            <li class="ml-4"><i class="fa-solid fa-phone"></i> <a href="tel:9547513246 ">954.751.3246 </a>
                            </li>
                            <li><i class="fa-solid fa-location-dot"></i> <a href="https://goo.gl/maps/fQxeHxRjtkyfd7Tj7"> Our Location</a></li>
                        </ul>
                    </div>
                    <button class="navbar-toggler nav--btn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <?php
							wp_nav_menu(
								array(
									'theme_location'     => 'topmenu',
									'menu'               => 'Header Menu',
									'menu_class'         => 'navbar-nav m-0 header--menu--list align-items-center',
									'list_item_class'    => 'nav-item',
									'a_class'            => 'nav-link'
								)
							);
						?>
                    </div>
                </div>
            </div>
        </nav>
			<div class="container-fluid d-flex justify-content-end top--txt mb-3 bg--black stick--areadesktop" style="z-index: 99; background: #111;">
                 <ul class="d-flex m-0 top--list">
                      <li class="ml-4"><i class="fa-solid fa-phone"></i> <a href="tel:9547513246 ">954.751.3246 </a></li>
                      <li><i class="fa-solid fa-location-dot"></i> <a href="https://goo.gl/maps/dXgxBkvcyHTxynVj8"> Our Location</a></li>
                 </ul>
            </div>
        </header>
    <!-- ==== Header Ends =====  -->
	
	<main>

		<!-- <section class="post_banner d-none" style="background-image: url(<?php the_field('subpage_top_background_image'); ?>);">
			<div class="container-fluid">
				<div class="row row_post_banner">
					<div class="col-lg-10 post_title">
						<h1><?php the_field('h1'); ?>
						<span class="under_h1"><?php the_field('under_h1'); ?></span>
						</h1>
					</div>
				</div>
			</div>
		</section> -->

   <!-- ==== New Header Added start  01/02/2023=====  -->


	<section class="ib_banner banner_ib_style" style="background-image: url(<?php the_field('subpage_top_background_image'); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 bnr-txt">
                   <h1><?php the_field('h1'); ?>
                       <span class="under_h1"><?php the_field('under_h1'); ?></span>
                </div>
            </div>
        </div>
        </section> 
 <!-- ==== New Header ENDS start  01/02/2023=====  -->

		
	<?php if( have_rows('sections')): ?>
	<?php while(have_rows('sections') ): the_row();
   		 $content_type = get_sub_field('section_type'); // Image Left | Image Right | Full Width | Contact Left
    	?>

	<?php if ($content_type == 'Image Left'): ?>
		<?php $sub_field = get_sub_field('image_left'); ?>
		<?php if ($sub_field): ?>

			<section class="subpage_image_left">

				<div class="container">
				  <div class="row">
						<div class="col-lg-6 image_left_square1" style="background-image: url(<?php echo $sub_field['image_on_left']?>);"></div>
						<div class="col-lg-6 image_left_square2">
							<?php if ($sub_field['text_on_right']): ?>
										<?php echo $sub_field['text_on_right']; ?>
							<?php endif; ?>
						</div>
				   </div>
				</div>

			</section>
		<?php endif; ?>
	<?php endif; ?>
	
		<?php if ($content_type == 'Image Right'): ?>
		<?php $sub_field = get_sub_field('image_right'); ?>
		<?php if ($sub_field): ?>
	
			<section class="subpage_image_right">
			
				<div class="container">
				  <div class="row flex-column-reverse flex-lg-row">
						<div class="col-lg-6 image_right_square1">
							<?php if ($sub_field['text_on_left']): ?>
										<?php echo $sub_field['text_on_left']; ?>
							<?php endif; ?>
						</div>
						<div class="col-lg-6 image_right_square2" style="background-image: url(<?php echo $sub_field['image_on_right']?>);"></div>
				   </div>
				</div>
				
			</section>

		<?php endif; ?>
	<?php endif; ?>
	
	<?php if ($content_type == 'Contact Left'): ?>
		<?php $sub_field = get_sub_field('contact_left'); ?>
		<?php if ($sub_field): ?>
	
			<section class="subpage_image_right">
			
				<div class="container">
				  <div class="row">
						<div class="col-lg-6 image_right_square1">
							<?php echo do_shortcode('[ninja_form id=1]'); ?>
						</div>
						<div class="col-lg-6 image_right_square2" style="background-image: url(<?php echo $sub_field['image_on_right']?>);"></div>
				   </div>
				</div>
				
			</section>

		<?php endif; ?>
	<?php endif; ?>
	
		<?php if ($content_type == 'Contact Left Text'): ?>
		<?php $sub_field = get_sub_field('contact_left_text'); ?>
		<?php if ($sub_field): ?>
	
			<section class="subpage_image_right">
			
				<div class="container">
				  <div class="row">
						<div class="col-lg-6 image_right_square1">
							<?php echo do_shortcode('[ninja_form id=1]'); ?>
						</div>
						<div class="col-lg-6 image_right_square1">
							<?php if ($sub_field['text_on_left']): ?>
										<?php echo $sub_field['text_on_left']; ?>
							<?php endif; ?>
						</div>
				   </div>
				</div>
				
			</section>

		<?php endif; ?>
	<?php endif; ?>
	
	
	<?php if ($content_type == 'Full Width'): ?>
		
			<section class="content">
			  <div class="container">
				<div class="row">
				  <div class="col-lg-12">
					<?php the_sub_field('full_width'); ?>
				  </div>
				</div>
			  </div>
			</section>

	<?php endif; ?>
	<?php endwhile; ?>
	
<?php endif; ?>
		
		
	</main>

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
                    <div class="col-xl-4 col-lg-4 col-sm-6 col-sm-6">
                        <div class="footer--area">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14313.46071107457!2d-80.096107!3d26.249809!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x87ac0a90dce443d9!2sMy%20Pompano%20Dentist%20Dental%20Implants%20-%20Andrew%20Browne%20DDS%20PA!5e0!3m2!1sen!2sph!4v1674396623973!5m2!1sen!2sph"
                                width="100%" height="250" style="border: 0" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <h5 class="text-light">
                                2700 NE 14th St Causeway #105
                            </h5>
                            <h6 class="text-light">Pompano Beach, FL 33062</h6>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 col-sm-6">
                        <div class="footer--area">
                            <div class="time--lists">
                                <h3 class="text-light">OUR HOURS</h3>
                                <ul class="m-0">
                                    <li><span>Monday : </span> <span>8:00 AM - 5:00PM</span> </li>
                                    <li><span>Tuesday : </span> <span>8:00 AM - 5:00PM</span> </li>
                                    <li><span>Wednesday : </span> <span>8:00 AM - 5:00PM</span> </li>
                                    <li><span>Thursday : </span> <span>8:00 AM - 5:00PM</span> </li>
                                    <li><span>Friday : </span> <span>8:00 AM - 12:00PM</span> </li>
                                    <li><span>Sat & Sun :</span> <span>Closed</span> </li>
                                </ul>
                                <div class="social--icons">
                                    <ul class="d-flex ">
                                        <li>
                                            <a href="https://www.facebook.com/MyPompanoDentistFL/"> <i class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/MyPompano"> <i class="fa-brands fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa-brands fa-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/mypompanodentist/"><i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 col-sm-12">
                        <div class="footer--area">
                            <form>
                                <div class="form-group mb-2">
                                    <label for="full-name" class="text-light">Full Name</label>
                                    <input type="text" class="form-control  border--radius-0 " id="full-name" />
                                </div>
                                <div class="form-group mb-2">
                                    <label for="phone" class="text-light">Phone #</label>
                                    <input type="email" class="form-control  border--radius-0 " id="email" />
                                </div>
                                <div class="form-group mb-2">
                                    <label for="email" class="text-light">Email address</label>
                                    <input type="email" class="form-control  border--radius-0 " id="email" />
                                </div>
                                <div class="form-group mb-2">
                                    <label for="text-area" class="text-light ">Message</label>
                                    <textarea class="form-control  border--radius-0 " cols="20" rows="4"></textarea>
                                </div>
                                <!-- added space -->               
								<div class="cntct-otr">
								   <a type="submit" class="btn btn-primary second--them--btn border-0 mt-2 w-75">
									   Contact Us
								   </a>
							   </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="m-0 text-center text-light mt-4 footer--txt ">© 2021 All Rights Reserved | Privacy Policy  | Website Accessibility</p>
                </div>
            </section>
        </section>
    </footer>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>