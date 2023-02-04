
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * 
 * Template Name: HomeD
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Boom_Starter_Child
 */
get_header();
$Data = get_field('hero_section_one'); 
$Herotwo = get_field('hero_section_two'); 
$Herotwo2 = get_field('Btn_Group'); 

 ?>
 
     <main id="primary" class="site-main d-none">
 
         <?php
         if ( have_posts() ) :
 
             if ( is_home() && ! is_front_page() ) :
                 ?>
                 <header>
                     <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                 </header>
                 <?php
             endif;
 
             /* Start the Loop */
             while ( have_posts() ) :
                 the_post();
 
                 /*
                  * Include the Post-Type-specific template for the content.
                  * If you want to override this in a child theme, then include a file
                  * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                  */
                 get_template_part( 'template-parts/content', get_post_type() );
 
             endwhile;
 
             the_posts_navigation();
 
         else :
 
             get_template_part( 'template-parts/content', 'none' );
 
         endif;
         ?>
 
     </main>
     
     
     
     
     
     
     
     
     
     
    <main id="primary" class="site-main">
         <!--===== Hero Section =====-->
        <section class="main--area section pt-0">
            <div class="container-fluid hero--baner--area--one">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12  order-xl-1 order-lg-1 order-sm-2 order-2">
                        <div class="hero--txt--area">
                            <span class="sub--txt text-muted F--30"><?php echo $Data['hero_title']  ?></span>
                            <!-- <span class="sub--txt text-muted F--30">Beautiful & Healthy Smiles That Last A Lifetime</span> -->
                            <h1 class="main--txt"> <?php echo $Data['hero_heading']  ?> <span class="main--sub--txt">Google</span></h1>
                            <div class="hero-btn--area d-flex gap-1 w-100 my-3">
                                <a class="btn btn-primary theme--btn w-50" href="<?php echo  $Data['shedule_btn_link']['url'] ?>"><?php echo $Data['shedule_btn']  ?></a>
                                <a class="btn btn-primary w-25 mx-2 second--them--btn"  href="<?php echo  $Data['bill_btn_link']['url'] ?>"> <?php echo $Data['bill_btn']  ?></a>
                            </div>
                            <span class="sub--txt text-muted sub-hero text-muted F--25 my-3"><?php echo $Data['sub_text']  ?></span>
                            <div class="hero--logo--area d-flex justify-space-between">
                                <div class="logo--one">
                         <a class="d-block mt-2" href="https://www.google.co.in/"> <img src="<?php echo $Data['bottom_image_one']['url'] ?>" /> </a>
                                </div>
                                <div class="logo--two mx-5">
                               <a class="d-block" href="https://www.yelp.com/">
                                    <img src="<?php echo $Data['bottom__image_two']['url'] ?>" />
                                    </a>
                                    <!-- <img src="wp-content/themes/boom-starter-child/assets/img/yelp.png" /> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12  p-0 order-xl-2 order-lg-2 order-sm-1 order-1 hero--banner--one" style="background: url(<?php echo $Data['hero_image']['url'] ?>);   background-repeat: no-repeat;
                    background-position: 0%;   background-size: cover;">
                    </div>
                </div>
            </div>
            <div class="container-fluid hero--baner--area--two">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12  p-0 order-xl-1 order-lg-1 order-sm-2 order-2 hero--banner--two"          style="background: url(<?php echo $Herotwo['hero_image_two']['url'] ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 order-xl-1 order-lg-1 order-sm-2 order-2">
                        <div class="banner--second--txt side--txt-area">
                            <h2 class="m-0"><span class="second--sub--txt text-muted"><?php echo $Herotwo['hero_title'] ?></span></h2>
                            <h4 class="bold--txt margin--bottom--txt"><?php echo $Herotwo['hero_heading'] ?></h4>
                            <div>
                                <?php echo $Herotwo['hero_paragraph'] ?>
                            </div>
                                <div class="buttton--area about--btn">
                                <?php
                                while( have_rows('hero_section_two') ){ the_row(); 
                                while( have_rows('Btn_Group') ){ the_row(); 
                                $imagelink = get_sub_field('ButtonLink');
                                $linklabrl = get_sub_field('about_us_button_label');   ?>
                                    <a class="btn btn-primary theme--btn" href="<?php echo $imagelink; ?>"> <?php echo $linklabrl ?></a>
                                    <?php } } ?>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==== Hero Section Ends ====-->


        <!--===== Pricing Starts ====-->
        <section class=" main--area container m-auto package-card section">
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <div class="row">
                    <?php
                        while( have_rows('package_section') ){ the_row(); 
                            while( have_rows('package_image_one') ){ the_row(); 
                                $packageImage = get_sub_field('package_image');
                                $packageTitle = get_sub_field('package_title');
                                $buttonLink = get_sub_field('button_link');  
                                $buttonLabel = get_sub_field('package_btn_label');  
                                $packageParagraph = get_sub_field('package_paragraph'); 
                            ?>
                        <div class="col-xl-12 col-lg-12 col-sm-12 col-sm-12 ">
                            <div class="img--section--pkg">
                                <img class=" text-center py-3" src=" <?php echo $packageImage["url"] ?>" alt="package-1" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="package--boxes">
                                <fieldset>
                                    <legend>
                                        <div class="d-flex gap-1 align-items-center pkg--title">
                                            <h1 class="price-title">$129</h1>
                                            <h4 class="pkg--sub-title"> <?php echo $packageTitle ?></h4>
                                        </div>
                                    </legend>
                                    <div class="package-card-content p-5 position-relative">
                                        <div> <?php echo $packageParagraph ?></div>
                                        <a class="btn btn-primary theme--btn" href="<?php echo  $buttonLink["url"] ?>"><?php echo $buttonLabel ?></a>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <?php } } ?>
                    </div>

                </div>
                <div class="col-lg-6 mb-3 price-pkg-second">
                    <div class="row">
                    <?php
                        while( have_rows('package_section') ){ the_row(); 
                            while( have_rows('package_image_two') ){ the_row(); 
                                $packageImageTwo = get_sub_field('package_image');
                                $packageTitleTwo = get_sub_field('package_title');
                                $buttonLinkTwo = get_sub_field('button_link');  
                                $buttonLabelTwo = get_sub_field('package_btn_label');  
                                $packageParagraphTwo = get_sub_field('package_paragraph'); 
                            ?>
                        <div class="col-xl-12 col-lg-12 col-sm-12 col-sm-12">
                            <div class="img--section--pkg">
                            <img class=" text-center py-3" src=" <?php echo $packageImageTwo["url"] ?>" alt="package-1"  style="width: 90%;" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="package--boxes">
                                <fieldset>
                                    <legend>
                                        <div class="d-flex gap-1 align-items-center  pkg--title">
                                            <h1 class="price-title">$99</h1>
                                            <h4 class="pkg--sub-title"><?php  echo $packageTitleTwo ?></h4>
                                        </div>
                                    </legend>
                                    <div class="package-card-content p-5 position-relative">
                                        <div>  <?php  echo $packageParagraphTwo ?></div>
                                        <a class="btn btn-primary theme--btn " href="<?php echo $buttonLinkTwo['url'] ?> ">
                                          <?php  echo $buttonLabelTwo ?>
                                        </a>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <?php } } ?>
                    </div>

                </div>

            </div>
        </section>
        <!--==== Pricing Ends ====-->

        <!--===== Single Doctor Start =====-->
        <section class="main--area section">
            <div class="container-fluid  p-0">
                <div class="row align-items-center justify-content-center">
                <?php
                    while( have_rows('biography_section') ){ the_row(); 
                    $bioTitle = get_sub_field('bio_title');
                    $bioImage = get_sub_field('bio_image');
                    $bioHeading = get_sub_field('bio_heading');   
                    $bioParagraph = get_sub_field('bio_paragraph');   
                    $bioLink = get_sub_field('bio_link');   
                    $bioLabel = get_sub_field('bio_label');   
                    ?>
                    <div
                        class="col-xl-6 col-lg-6 col-sm-6 col-sm-12 p-0 order-xl-1 order-lg-1 order-sm-2 order-2 hero--banner--five"
                        style="background:url(<?php  echo $bioImage['url']  ?>); background-repeat: no-repeat;
    background-position: center;
    background-size: cover"
                        >
                    </div>
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-sm-12 order-xl-1 order-lg-1 order-sm-2 order-2">
                        <div class="banner--second--txt doc--txt--area">
                            <h2 class="m-0"><span class="second--sub--txt text-muted"><?php echo $bioTitle ?></span></h2>
                            <h4 class="bold--txt"><?php  echo $bioHeading  ?></h4>
                            <div>
                                <?php echo  $bioParagraph ?>
                            </div>
                            <div class="buttton--area about--btn">

                                <a class="btn btn-primary theme--btn" href="<?php  echo   $bioLink['url'] ?>"><?php echo $bioLabel ?></a>
                            </div>
                        </div>
                    </div>
                    <?php }  ?>
                </div>
            </div>
        </section>
        <!--==== Single Doctor Start ====-->


        <!--==== Before And after Start ====-->
        <section class="bg-after--before section main--area main--area--margin">
            <div class="container">
                <div class="before--txt--area">
                    <h3 class="bold--txt before--bold--txt text-center">Before and After Photos</h3>
                    <h6 class="before--txt text-center"> Below are before and after transformations from some
                        of our patients. Call us today and see how we can help you.</h4>
                </div>
                <div class="row slider__section align-items-center justify-content-center ">
                        <?php
                           while( have_rows('before_after_section') ){ the_row(); 
                               $sliderOne = get_sub_field('before_after_short_code_1');
                               $sliderTwo = get_sub_field('before_after_short_code_2');
                               $sliderThree = get_sub_field('before_after_short_code_3');   
                              ?>
                            <div class=" col-xl-4 col-lg-4 col-sm-6 col-12 mb-3">
                                <div class="card before--card">
                                    <?php echo do_shortcode($sliderOne); ?>
                                </div>
                            </div>
                            <div class=" col-xl-4 col-lg-4 col-sm-6 col-12 mb-3">
                                <div class="card before--card">
                                   <?php echo do_shortcode( $sliderTwo); ?> 
                                </div>
                            </div>
                            <div class=" col-xl-4 col-lg-4 col-sm-6 col-12 mb-3">
                                <div class="card before--card">
                                    <?php echo do_shortcode($sliderThree); ?> 
                                </div>
                            </div>
                    <?php }  ?>
                </div>
                <!-- ===== Testimonials Slider Starts Here ===== -->
                <section id="demos">
                    <div class="testimonal--txt--area">
                        <h3 class="bold--txt before--bold--txt text-center">Testimonials </h3>
                        <h6 class=" before--txt text-center"> See what our clients have to say about us!</h6>
                    </div>
                    <div class="row">
                        <div class="large-12">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="card p-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <figure class="fig">
                                                    <p class="m-0 bg-voilet">a</p>
                                                </figure>
                                                <article>
                                                    <p class="m-0">Lionel May</p>
                                                    <div>
                                                        <div class="ratings yellow">
                                                            <i class="fas fa-star mb-2"></i>
                                                            <i class="fas fa-star mb-2"></i>
                                                            <i class="fas fa-star mb-2"></i>
                                                            <i class="fas fa-star mb-2"></i>
                                                            <i class="fas fa-star mb-2"></i>
                                                        </div>
                                                        <p>11/14/2022 <span class="franchise"> - Google</span></p>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="img">
                                                <img src="wp-content/themes/boom-starter-child/assets/img/yelp.png" width="50px" alt="" />
                                            </div>
                                        </div>
                                        <div>
                                            <p class="m-0">
                                                It has now been almost 2 years since i had this surgery and
                                                it has held up so well!!... <a href="#" class="read--more">read more</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card p-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <figure class="fig">
                                                    <p class="m-0">a</p>
                                                </figure>
                                                <article>
                                                    <p class="m-0">Elaine E</p>
                                                    <div>
                                                        <div class="ratings red">
                                                            <i class="fas fa-star mb-2"></i>
                                                            <i class="fas fa-star mb-2"></i>
                                                            <i class="fas fa-star mb-2"></i>
                                                            <i class="fas fa-star mb-2"></i>
                                                            <i class="fas fa-star mb-2"></i>
                                                        </div>
                                                        <p>11/14/2022 <span class="franchise"> - yelp</span></p>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="img">
                                                <img src="wp-content/themes/boom-starter-child/assets/img/yelp.png" width="50px" alt="" />
                                            </div>
                                        </div>
                                        <div>
                                            <p class="m-0">
                                                It has now been almost 2 years since i had this surgery and
                                                it has held up so well!!... <a href="#" class="read--more">read more</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card p-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <figure class="fig">
                                                    <p class="m-0">a</p>
                                                </figure>
                                                <article>
                                                    <p class="m-0">Lionel May</p>
                                                    <div>
                                                        <div class="ratings mix">
                                                            <i class="fas fa-star mb-2"></i>
                                                            <i class="fas fa-star mb-2"></i>
                                                            <i class="fas fa-star mb-2"></i>
                                                            <i class="fas fa-star mb-2"></i>
                                                            <i class="fas fa-star mb-2"></i>
                                                        </div>
                                                        <p>11/14/2022 <span class="franchise"> - yelp</span></p>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="img">
                                                <img src="wp-content/themes/boom-starter-child/assets/img/yelp.png" width="50px" alt="" />
                                            </div>
                                        </div>
                                        <div>
                                            <p class="m-0">
                                                It has now been almost 2 years since i had this surgery and
                                                it has held up so well!!... <a href="#" class="read--more">read more</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ===== Testimonials Slider Ends Here ===== -->
            </div>
        </section>


        <!--===== Before And after Ends =====-->


            <!--==== Review Starts =====-->
            <section class="vdo-sec">
                <div class="vdo-top">
                  <img src="/wp-content/themes/boom-starter-child/assets/img/vdo-top.png" alt="/">
                </div>
                <div class="container">
                  <div class="row">
                    <?php
                       while( have_rows('review_section') ){ the_row(); 
                       $reviewTitle = get_sub_field('review_title');
                       $reviewImage = get_sub_field('review_thumbnail_image');
                       $reviewvideourl = get_sub_field('review_video_url');
                       $reviewLabel = get_sub_field('review_label');   
                       $reviewParagraph = get_sub_field('review_paragraph');   
                       $reviewLink = get_sub_field('review_url');      
                      ?>
                    <div class="col-md-6">
                      <div class="vdo-otr">
                        <a href="#" class="wp-video-popup">
                            <?php echo do_shortcode('[wp-video-popup video="'.$reviewvideourl.'"]'); ?>
                          <img src="<?php echo $reviewImage['url'] ?>" alt="/">
                            <div class="play_button">
                                <img src="http://staging-mypompanodentist-staging.kinsta.cloud/wp-content/uploads/2023/01/play.png">
                            </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-6 my-auto">
                      <div class="vdo-dtls">
                        <div class="Review--txt banner--second--txt">
                          <h4 class="review--bold--txt"><?php echo $reviewTitle ?></h4>
                          <div class="review--p--txt mb-3">
                              <?php echo $reviewParagraph ?>
                          </div>
                          <div class="buttton--area">
                              <!-- class added -->
                              <a class="btn btn-whiet  theme--btn--white " href="<?php  echo $reviewLink['url'] ?>"><?php echo $reviewLabel ?></a>
                          </div>
                      </div>
                      </div>
                    </div>
                    <?php }  ?>
                  </div>
                </div>
             </section>
    <!-- Review Ends -->


        <!--==== Request Appointemnt Starts =====-->
        <section class="main--area--bottom section">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center">
                  <?php
                      while( have_rows('appointment_section') ){ the_row(); 
                        $appointmentTitle = get_sub_field('appointment_heading');
                        $appointmentImage = get_sub_field('appointment_image');
                        $appointmentLabel = get_sub_field('appointment_label');   
                        $appointmentParagraph = get_sub_field('appointment_paragraph');   
                        $appointmentLink = get_sub_field('appointment_link');      
                     ?>
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-sm-12 order-xl-1 order-lg-1 order-sm-2 order-2" >
                        <div class="banner--second--txt call--txt">
                            <h4 class="appointemnt--bold--txt"><?php echo $appointmentTitle ?></h4>
                            <div class="banner--p--txt">
                               <?php echo $appointmentParagraph ?>
                            </div>
                            <div class="buttton--area">
                                <a class="btn btn-primary theme--btn" href="<?php echo  $appointmentLink['url']  ?>">   <?php echo $appointmentLabel ?></a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-xl-6 col-lg-6 col-sm-6 col-sm-12 p-0 order-xl-1 order-lg-1 order-sm-1 order-1 hero--banner--three" style="background:url(<?php echo $appointmentImage['url'] ?>);   background-repeat: no-repeat;
  background-position: 70% 0px;
  background-size: cover;
  height: 60vw; ">
                    </div>
                   <?php }  ?>
                </div>
            </div>
        </section>
        <!--===== Request Appointemnt Starts =====-->




	

	</main>

 
 <?php
 get_footer();