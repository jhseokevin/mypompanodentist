<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * 
 * Template Name: Gallery
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Boom_Starter_Child
 */


 get_header();

 $Data = get_field('hero_section'); 
 $Second = get_field('second_section');  

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
<div class=" container row ib_gallery_container">
<div class="col-md-9">  

<!--==== Before And after Start ====-->
<section class="section main--area main--area--margin">
            <div class="container">
                <div class="before--txt--area">
                    <h3 class="bold--txt before--bold--txt text-center">Before and After Photos</h3>
                    <h6 class="before--txt text-center"> Below are before and after transformations from some
                        of our patients. Call us today and see how we can help you.</h6>
                    <div class="hero-btn--area d-flex gap-1 w-100 my-3 justify-content-center">
                      <a class="btn btn-primary theme--btn w-50" href="<?php echo $Second['button_url'] ?>"><?php echo $Second['button_text']  ?></a>
                    </div>    
                </div>
                
                <div class="row slider__section align-items-center justify-content-center ">
                        <?php
                           $ba_posts = get_field('before_after_section');
                           if( $ba_posts ): ?>
                              <?php foreach( $ba_posts as $ba_post ): 
                                  ?>                                     
                                     <div class=" col-xl-4 col-lg-4 col-sm-6 col-12 mb-3">
                                          <div class="card before--card">
                                              <?php $slider="[bafg id='".$ba_post->ID."']"; ?>
                                              <?php echo do_shortcode($slider); ?>
                                          </div>
                                      </div>
                              <?php endforeach; ?>  
                    <?php endif; ?>
                </div>
            </div>
</section>


        <!--===== Before And after Ends =====-->
</div>

<div class="col-md-3">
<?php

$first_image = get_field('first_image', 'option'); 
$first_link = get_field('first_link', 'option');
$first_text = get_field('first_text', 'option');

$second_image = get_field('second_image', 'option'); 
$second_link = get_field('second_link', 'option');
$second_text = get_field('second_text', 'option');
?>
  <a href="<?php echo $first_link ?> ">
    <div class="ib_sidebar">
            <img src="<?php echo $first_image['url'] ?>" />
            <div class="text-div">
               <h4><?php echo $first_text  ?></h4>
                <div class="hero-btn--area d-flex gap-1 w-100 my-3 justify-content-center">
                  <a class="btn btn-primary theme--btn w-70" href="<?php echo $first_link ?>">Learn More</a>
                </div>
            </div>
    </div>
  </a>
  <a href="<?php echo $second_link ?> ">
    <div class="ib_sidebar">
            <img src="<?php echo $second_image['url'] ?>" />
            <div class="text-div">
               <h4><?php echo $second_text  ?></h4>
                <div class="hero-btn--area d-flex gap-1 w-100 my-3 justify-content-center">
                  <a class="btn btn-primary theme--btn w-70" href="<?php echo $second_link ?>">Learn More</a>
                </div>
            </div>
    </div>
  </a>
</div>
</div>
	

	</main>

 
 <?php
 get_footer();