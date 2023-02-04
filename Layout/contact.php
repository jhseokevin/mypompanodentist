<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * 
 * Template Name: Contact
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Boom_Starter_Child
 */


 get_header();

 $Data = get_field('hero_section'); 
 $Details = get_field('details_section');

 ?>


<!-- Nav Bar End -->

<!-- Banner Section Start -->

<section class="ib_banner" style='background: url(<?php echo $Data['hero_image']['url'] ?>) no-repeat center top/cover;'>
<div class="container">
    <div class="row">
        <div class="col-md-12 bnr-txt">
            <h1><?php echo $Data['hero_title']  ?></h1>
        </div>
    </div>
</div>
</section>

<!-- Banner Section End -->
<div class=" container row ib_contact_container">
<div class="col-md-6">  
  <div class="ib_box">
    <h2 class="main--txt"> <?php echo $Details['phone_text']  ?> </h2>
    <div class="hero-btn--area d-flex gap-1 w-100 my-3 peater-btn">
        <a class="btn btn-primary theme--btn w-50" href="tel:<?php echo $Details['phone_number'] ?>">CALL NOW!<?php echo $Details['phone_number']  ?></a>
    </div>
  </div>

  <div class="ib_box">
    <h2 class="main--txt"> <?php echo $Details['address_title']  ?> </h2>
    <p><?php echo $Details['address']  ?></p>
  </div>

  <div class="ib_box">
    <h2 class="main--txt"> <?php echo $Details['hours_title']  ?> </h2>
    <?php
         $timings = $Details['timing'] ;
         if( $timings ): ?>
            <?php foreach( $timings as $timing ): 
                ?>                                     
                        <div class="row ib_timing"><div class="col-md-4 col-4 left"><?php echo $timing['day'] ?></div><div class="col-md-8 col-8 text-right"><?php echo $timing['time'] ?></div></div>

            <?php endforeach; ?>  
      <?php endif; ?>
  </div>
</div>

<div class="col-md-6 ib_map">
   <?php echo get_field('map'); ?>
</div>
</div>
	

	</main>

 
 <?php
 get_footer();



