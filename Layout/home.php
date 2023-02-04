<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * 
 * Template Name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Boom_Starter_Child
 */


 get_header();
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
                            <span class="sub--txt text-muted F--30">Beautiful & Healthy Smiles That Last A Lifetime</span>
                            <h1 class="main--txt"> Your #1 Dentist on <span class="main--sub--txt">Google</span></h1>
                            <div class="hero-btn--area d-flex gap-1 w-100 my-3">
                                <a class="btn btn-primary theme--btn w-50"> Schedule Appointment</a>
                                <a class="btn btn-primary w-25 mx-2 second--them--btn"> Pay Your Bill</a>
                            </div>
                            <span class="sub--txt text-muted sub-hero text-muted F--25 my-3">PS: We Speak Portuguese & Spanish!</span>
                            <div class="hero--logo--area d-flex justify-space-between">
                                <div class="logo--one">
                                    <img src="wp-content/themes/boom-starter-child/assets/img/google.png" />
                                </div>
                                <div class="logo--two mx-5">
                                    <img src="wp-content/themes/boom-starter-child/assets/img/yelp.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-xl-6 col-lg-6 col-md-12 col-sm-12  p-0 order-xl-2 order-lg-2 order-sm-1 order-1 hero--banner--one">
                    </div>
                </div>
            </div>
            <div class="container-fluid hero--baner--area--two">
                <div class="row align-items-center justify-content-center">
                    <div
                        class="col-xl-7 col-lg-7 col-md-12 col-sm-12 p-0 order-xl-1 order-lg-1 order-sm-2 order-2 hero--banner--two">
                        <!-- <img src="" alt="banner1" class="hero--banner--two" /> -->
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 order-xl-1 order-lg-1 order-sm-2 order-2">
                        <div class="banner--second--txt side--txt-area">
                            <h2 class="m-0"><span class="second--sub--txt text-muted">Welcome to</span></h2>
                            <h4 class="bold--txt margin--bottom--txt">My Pompano Dentist!</h4>
                            <p class="banner--p--txt">
                                If you are searching for a new dentist in Pompano Beach, FL or even looking for a second
                                opinion, we can't wait to help! Our office is built around our patients and your smile
                                is our #1 priority. From the moment you call to schedule an appointment, we want your
                                experience with our team to be your greatest dental experience yet. Let us help you
                                reach all of your smile goals.
                            </p>
                            <p class="banner--p--txt">
                                We want each patient to feel at home the moment they step into our office. Seeing smiles
                                transformed is our motivation and putting smiles on faces is always a dream come true.
                            </p>
                            <h6 class="my-3 banner--p--txt">
                                <strong>Welcome to My Pompano Dentist. we can't wait to meet you!</strong>
                                </h5>
                                <div class="buttton--area about--btn">
                                    <a class="btn btn-primary theme--btn">About Us</a>
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
                        <div class="col-xl-12 col-lg-12 col-sm-12 col-sm-12 ">
                            <div class="img--section--pkg">
                                <img class=" text-center py-3" src="wp-content/themes/boom-starter-child/assets/img/grid-1.png" alt="package-1" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="package--boxes">
                                <fieldset>
                                    <legend>
                                        <div class="d-flex gap-1 align-items-center">
                                            <h1 class="price-title">$129</h1>
                                            <h4 class="pkg--sub-title">Welcome* <br /> Package</h4>
                                        </div>
                                    </legend>
                                    <div class="package-card-content p-5 position-relative">
                                        <div>
                                            <p class="mb-0">
                                                Looking for an affordable dental check-up? With our new patient
                                                special, you can visit our office and receive a thorough cleaning,
                                                detailed exam and x-ray at an affordable cost! Find out how you
                                                can continue to care for your smile, even if you don't have dental
                                                insurance!
                                            </p>
                                            <ul class="pricing--card my-3">
                                                <li>X-Rays (d0210) full series of x-rays</li>
                                                <li> Cleaning (d1110) Only When Periodontal Disease is Not Present </li>
                                                <li>Comprehensive Exam (d0150)</li>
                                                <li>Consultation (d9310)</li>
                                            </ul>
                                            <p class=""> New Patients receive a 15% discount on all future treatment
                                                when services
                                                are accepted at the time of the consultation </p>
                                            <p>*Over $450 value</p>
                                        </div>
                                        <a class="btn btn-primary theme--btn" href="https://mypompanodentist.com/cleaning-special/">Learn More</a>
                                    </div>
                                </fieldset>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-6 mb-3 price-pkg-second">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-sm-12 col-sm-12">
                            <div class="img--section--pkg">
                                <img class=" text-center py-3 " src="wp-content/themes/boom-starter-child/assets/img/grid-2.png" alt="package-1"
                                    style="width: 90%;" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="package--boxes">
                                <fieldset>
                                    <legend>
                                        <div class="d-flex gap-1 align-items-center">
                                            <h1 class="price-title">$99</h1>
                                            <h4 class="pkg--sub-title">Emergency<br /> Visit</h4>
                                        </div>

                                        <!-- Modified -->
                                    </legend>
                                    <div class="package-card-content p-5 position-relative">
                                        <div>
                                            <p class="m-0">Have a dental emergency? Contact us for immediate assistance.
                                            </p>
                                            <ul class="pricing--card my-3">
                                                <li>X-Rays (d0210) full series of x-rays</li>
                                                <li>Limited Examination (d0140)</li>
                                            </ul>
                                            <p class="">
                                                New Patients receive a 15% discount on all future treatment when
                                                services are accepted at the time of the consultation
                                            </p>
                                            <p>*Over $300 value</p>
                                        </div>
                                        <a class="btn btn-primary theme--btn " href="https://mypompanodentist.com/emergency-visit/ ">Learn More</a>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!--==== Pricing Ends ====-->

        <!--===== Single Doctor Start =====-->
        <section class="main--area section">
            <div class="container-fluid  p-0">
                <div class="row align-items-center justify-content-center">
                    <div
                        class="col-xl-6 col-lg-6 col-sm-6 col-sm-12 p-0 order-xl-1 order-lg-1 order-sm-2 order-2 hero--banner--five">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-sm-12 order-xl-1 order-lg-1 order-sm-2 order-2">
                        <div class="banner--second--txt doc--txt--area">
                            <h2 class="m-0"><span class="second--sub--txt text-muted">Meet
                                </span></h2>
                            <h4 class="bold--txt">Dr. Andrew</h4>
                            <p class="banner--p--txt">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <p class="banner--p--txt" >
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            </p>
                            <p class="banner--p--txt" >
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                            </p>
                            <div class="buttton--area about--btn">

                                <a class="btn btn-primary theme--btn" href="https://mypompanodentist.com/meet-the-doctors/">About Us</a>
                            </div>
                        </div>
                    </div>
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
                    <div class=" col-xl-4 col-lg-4 col-sm-6 col-12 mb-3">
                        <div class="card before--card">
                           <!-- <?php echo do_shortcode(' [bafg id="73"]'); ?> -->
                           <?php echo do_shortcode(' [bafg id="12"]'); ?>
                        </div>
                    </div>
                    <div class=" col-xl-4 col-lg-4 col-sm-6 col-12 mb-3">
                        <div class="card before--card">
                            
                            <!-- <?php echo do_shortcode('[bafg id="81"] '); ?> -->
                            <?php echo do_shortcode('[bafg id="19"] '); ?>
                        </div>
                    </div>
                    <div class=" col-xl-4 col-lg-4 col-sm-6 col-12 mb-3">
                        <div class="card before--card">

                            <!-- <?php echo do_shortcode('[bafg id="82"] '); ?> -->
                            <?php echo do_shortcode('[bafg id="20"] '); ?>
                        </div>
                    </div>
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
        <section class="main-review-area ">
            <div class="container-fluid review--bg">
                <div class=" main--area pb-0">
                    <div class="banner--row">
                        <div class="row align-items-center justify-content-center ">
                            <div class="col-xl-6 col-lg-6 col-sm-6 col-sm-12 p-0 order-xl-1 order-lg-1 order-sm-2 order-2 review--banner--four position-relative">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-6 col-sm-12 order-xl-1 order-lg-1 order-sm-2 order-2 banner--color--area">
                                <div class="Review--txt banner--second--txt">
                                    <h4 class="review--bold--txt">Watch Edward talk about his incredible journey with Dr.
                                        Browne.</h4>
                                    <p class="review--p--txt mb-3">
                                        Every one of our clients has a unique story, and My Pompano Dentist is here to
                                        listen and deliver the best results
                                    </p>
                                    <div class="buttton--area">
                                        <!-- class added -->
                                        <a class="btn btn-whiet  theme--btn--white " href="https://www.google.com/maps?cid=9776200508412019673">Read More Reviews</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Review Ends -->


        <!--==== Request Appointemnt Starts =====-->
        <section class="main--area--bottom section">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-sm-12 order-xl-1 order-lg-1 order-sm-2 order-2">
                        <div class="banner--second--txt call--txt">
                            <h4 class="appointemnt--bold--txt">Let Dr. Andrew Browne
                                give you the teeth you
                                have always wanted.</h4>
                            <p class="banner--p--txt">
                                Stop thinking about fixing your smile or putting off whitening your teeth and make it a
                                reality.
                            </p>
                            <p class="banner--p--txt">
                                Schedule your appointment now and we'll follow up to confirm you are all set.
                            </p>
                            <ul class="appointment--lits">
                                <li><img src="wp-content/themes/boom-starter-child/assets/icon/patient.png" width="100px" />New Patients Welcome</li>
                                <li><img src="wp-content/themes/boom-starter-child/assets/icon/star-5.png" width="100px" />Top Rated Dentist <span> (4.8
                                        out of 5 on Google)</span></li>
                                <li><img src="wp-content/themes/boom-starter-child/assets/icon/language.png" width="100px" />Multilingual - <span>We speak
                                        English, Portuguese & Spanish</span></li>
                                <li><img src="wp-content/themes/boom-starter-child/assets/icon/money-2.png" width="100px" />Financing Available</li>
                                <li><img src="wp-content/themes/boom-starter-child/assets/icon/calendar-4.png" width="100px" />Weekend Appointments<span>
                                        by Request </span></li>
                            </ul>
                            <div class="buttton--area">
                                <a class="btn btn-primary theme--btn" href="https://mypompanodentist.com/appointment-request/">Request Appointment</a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-xl-6 col-lg-6 col-sm-6 col-sm-12 p-0 order-xl-1 order-lg-1 order-sm-1 order-1 hero--banner--three">
                    </div>
                </div>
            </div>
        </section>
        <!--===== Request Appointemnt Starts =====-->




	

	</main>

 
 <?php
 get_footer();