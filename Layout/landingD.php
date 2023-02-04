<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * 
 * Template Name: Landing Dynamic Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Boom_Starter_Child
 */


 get_header();

 $Data = get_field('hero_section_one'); 
 $Question = get_field('question_section_one'); 
 $Question2 = get_field('questions_section_two'); 
 $Question3 = get_field('questions_section_three'); 
 $Call = get_field('call_section');
 $BelowCall = get_field('below_call_section');
 $Box = get_field('box_section');  

 ?>



<!-- Nav Bar End -->

<!-- Banner Section Start -->

<section class="banner" style='background: url(<?php echo $Data['hero_image']['url'] ?>) no-repeat center top/cover;'>
<div class="container">
    <div class="row">
        <div class="col-md-12 bnr-txt">
            <h1><?php echo $Data['hero_title']  ?></h1>
        </div>
    </div>
</div>
</section>

<!-- Banner Section End -->

<!-- Welcome Text Start-->

<section class="welcome_text">
  <div class="container">
    <div class="row">
      <div class="col-md-12 wlcm_txt">
        <p><?php echo $Data['hero_paragraph']  ?></p>
      </div>
    </div>
  </div>
</section>

<!-- Welcome Text End -->

<section class="process">
  <div class="container-fluid">
    <div class="row pb-5">
      <div class="col-md-5 p-0">
        <div class="prc_img">
        <img src="<?php echo $Question['question_image_one']['url'] ?>" />
        </div>
      </div>
      <div class="col-md-7 col-lg-7 col-xl-7">
        <div class="prc_txt">
          <h2 class="hdng mt-3"><?php echo  $Question['question_title_one']  ?></h2>
        <p><?php echo  $Question['question_paragraph_one']  ?></p>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="prc_txt w-66 txt-resp">
              <h2 class="hdng mt-3"><?php echo  $Question['question_title_two']  ?></h2>
            <p><?php echo  $Question['question_paragraph_two']  ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row pt-5">
      <div class="col-md-7">
        <div class="prc_txt1">
          <h2 class="hdng mt-3"><?php echo  $Question2['question_title_one']  ?></h2>
        <p><?php echo  $Question2['question_paragraph_one']  ?></p>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="prc_txt1 w-66 txt-resp">
              <h2 class="hdng mt-3"><?php echo  $Question2['question_title_two']  ?></h2>
            <p><?php echo  $Question2['question_paragraph_two']  ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 p-0">
        <div class="prc_img1">
          <img src="<?php echo $Question2['question_image_two']['url'] ?>" />
        </div>
      </div>
    </div>
  </div>
</section>

<section class="txt-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="txt-sec2">
          <h2 class="hdng"><?php echo  $Question3['question_title_one']  ?></h2>
          <p><?php echo  $Question3['question_paragraph_one']  ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Process End -->

<!-- Appointment -->

<section class="appointment">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5 p-0">
        <div class="app-img">
        <img src="<?php echo $Call['call_banner_image']['url'] ?>" width=100%>
      </div>
      </div>
      <div class="col-md-7">
        <div class="app-txt">
        <h3><?php echo  $Call['call_title']  ?></h3>
        <span><?php echo  $Call['call_subheading']  ?></span>
        <?php $telnum = str_replace( array( '.'), '', $Call['number'] );
         ?>
        <h3><a href="tel:<?php echo  $telnum; ?>"><?php echo  $Call['number']  ?></a></h3>
      </div>
      </div>
    </div>
  </div>
</section>

<!-- Appointment End -->

<!-- Text-sec -->

<section class="txt-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="txt-sec2">
          <h2 class="hdng"><?php echo  $BelowCall['title']  ?></h2>
          <p><?php echo  $BelowCall['paragraph']  ?> </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Text-sec End -->

<!-- Boxes Start -->

<section class="boxes">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <h2 class="hdng"><?php echo  $Box['title_one']  ?></h2>
        <p><?php echo  $Box['paragraph_one']  ?> </p>
      </div>
      <div class="col-md-4 col-sm-12">
        <h2 class="hdng"><?php echo  $Box['title_two']  ?></h2>
        <p><?php echo  $Box['paragraph_two']  ?></p>
      </div>
      <div class="col-md-4 col-sm-12">
        <h2 class="hdng"><?php echo  $Box['title_three']  ?></h2>
        <p><?php echo  $Box['paragraph_three']  ?> </p>
      </div>
    </div>
  </div>
</section>

<!-- Boxes End -->

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



