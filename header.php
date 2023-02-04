<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boom_Starter_Child
 */

//$Data = get_field('website_logo'); 
$Data = get_field('website_logo', 'option' ); 
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WW6ZJ7N');</script>
<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<meta name="google-site-verification" content="EASOnbW8xO7Gc6jHqeIKjfCqj0vg-XQhUu4jMuJ_8Xg" />
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZKV7M7QJGD"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-ZKV7M7QJGD');
	</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'boom-starter' ); ?></a> -->
	<header id="masthead" class="site-header d-none">
		<div class="site-branding">
			<?php
			
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$boom_starter_description = get_bloginfo( 'description', 'display' );
			if ( $boom_starter_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $boom_starter_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
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
					<!-- <?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h5 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h5>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$boom_starter_description = get_bloginfo( 'description', 'display' );
					if ( $boom_starter_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $boom_starter_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?> -->
					<a class="d-block" href="/">
						<!-- <img src="/wp-content/themes/boom-starter-child/assets/icon/logo.png"  class="logo"/> -->
                       <img src="<?php echo $Data['url'] ?> "  class="logo"/> 
					</a>
				</div>
                <div class="container-fluid">
                    <div class="container-fluid d-flex justify-content-end top--txt mb-3 bg--black stick--area">
                        <ul class="d-flex m-0 top--list">
                            <li class="ml-4"><i class="fa-solid fa-phone"></i> <a href="tel:9547513246 ">954.751.3246 </a>
                            </li>
                            <li><i class="fa-solid fa-location-dot"></i> <a href="https://goo.gl/maps/mnxnMjcAWAK8XR2v6" target="_blank"> Our Location</a></li>
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
                      <li><i class="fa-solid fa-location-dot"></i> <a href=""> Our Location</a></li>
                 </ul>
            </div>
        </header>
    <!-- ==== Header Ends =====  -->