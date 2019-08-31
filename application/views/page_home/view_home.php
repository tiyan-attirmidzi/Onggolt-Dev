    <!--------------------------------- Beginning Welcome Area --------------------------------->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide">
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="<?php echo base_url(); ?>tamplate/landing-page/img/core-img/curve-1.png" alt="">
                </div>

                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-text">
                                    <h6 data-animation="fadeInUp" data-delay="50ms">THIS IS <span>ME</span></h6>
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Tiyan Attirmidzi</h2>
                                    <h5 data-animation="fadeInUp" data-delay="200ms">A Freelance Full Stack Developer</h5>
                                    <a href="#" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="300ms">Download CV</a>
                                </div>
                            </div>
                            <!-- Welcome Thumbnail -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-thumbnail">
                                    <img src="<?php echo base_url(); ?>uploads/about/picture-1.png" alt="" data-animation="slideInRight" data-delay="400ms">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide">
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="<?php echo base_url(); ?>tamplate/landing-page/img/core-img/curve-1.png" alt="">
                </div>

                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Developer <span>From Kendari</span></h2>
                                    <a href="#" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="300ms">Read More</a>
                                </div>
                            </div>
                            <!-- Welcome Thumbnail -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-thumbnail">
                                    <img src="<?php echo base_url(); ?>uploads/about/picture-2.png" alt="" data-animation="slideInRight" data-delay="400ms">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--------------------------------- End Welcome Area --------------------------------->
    
    <!--------------------------------- Beginning About Us Area --------------------------------->
    <section class="uza-about-us-area">
        <div class="container">
            <div class="row align-items-center">

                <!-- About Thumbnail -->
                <div class="col-12 col-md-6">
                    <div class="about-us-thumbnail mb-80">
                        <img src="<?php echo base_url(); ?>tamplate/landing-page/img/bg-img/picture-2.jpg" alt="">
                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-md-6">
                    <div class="about-us-content mb-80">
                        <h2>About Me</h2>
                        <p>   
                            Hello, introduce my full name is Tiyan Addar Quthni Attirmidzi often called Tiyan Attirmidzi or Tiyan, 
                            I am a Developer who still has to learn much more in order to become an Expert Developer. 
                            I am also studying in one of the universities in Kendari City, Halu Oleo University. 
                            I am also working in one of the IT Consultant Companies and joined in the Research and Development Division since May 2019.
                        </p>
                        <a href="#" class="btn uza-btn btn-2 mt-4">Read More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Background Pattern -->
        <div class="about-bg-pattern">
            <img src="<?php echo base_url(); ?>tamplate/landing-page/img/core-img/curve-2.png" alt="">
        </div>

    </section>
    <!--------------------------------- End About Us Area --------------------------------->

    <!--------------------------------- Beginning Services Area --------------------------------->
    <section class="uza-services-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Services</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php foreach ($services as $key) { ?>
                    <div class="<?php echo $key->class; ?>">
                        <div class="single-service-area mb-80">
                            <!-- Service Icon -->
                            <div class="service-icon">
                                <i class="<?php echo $key->icon; ?>"></i>
                            </div>
                            <h5><?php echo $key->name; ?></h5>
                            <p><?php echo $key->description; ?></p>
                        </div>
                    </div>
                <?php }; ?>

            </div>
        </div>
    </section>
    <!--------------------------------- End Services Area --------------------------------->    

    <!--------------------------------- Beginning Portfolio Area --------------------------------->
    <section class="uza-portfolio-area section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Portfolio</h2>
                        <p>We stay on top of our industry by being experts in yours.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- Portfolio Slides -->
                <div class="portfolio-sildes owl-carousel">

                    <?php foreach ($portfolio as $key) { ?>
                        <!-- Single Portfolio Slide -->
                        <div class="single-portfolio-slide">
                            <img src="<?php echo base_url(); ?>tamplate/landing-page/img/bg-img/<?php echo $key->thumbnail; ?>" alt="">
                            <!-- Overlay Effect -->
                            <div class="overlay-effect">
                                <h4><?php echo $key->name; ?></h4>
                                <h6><?php echo $key->type; ?></h6>
                                <p><?php echo substr($key->description, 0, 100)." ..."; ?></p>
                            </div>
                            <!-- View More -->
                            <div class="view-more-btn">
                                <a href="<?php echo base_url().'portfolio/'.$key->slug; ?>"><i class="arrow_right"></i></a>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>

        <!-- Client Feedback Area Start -->
        <div class="clients-feedback-area mt-80 section-padding-80 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Testimonial Slides -->
                        <div class="testimonial-slides owl-carousel">

                            <?php foreach ($testimony as $key) { ?>
                                <!-- Single Testimonial Slide -->
                                <div class="single-testimonial-slide d-flex align-items-center">
                                    <!-- Testimonial Thumbnail -->
                                    <div class="testimonial-thumbnail">
                                        <img src="<?php echo base_url(); ?>tamplate/landing-page/img/bg-img/<?php echo $key->image; ?>" alt="">
                                    </div>
                                    <!-- Testimonial Content -->
                                    <div class="testimonial-content">
                                        <h4><?php echo $key->message; ?></h4>
                                        <!-- Ratings -->
                                        <div class="ratings">
                                            <?php for ($i=0; $i < $key->rate; $i++) { ?>
                                                <i class="icon_star"></i>
                                            <?php } ?>
                                        </div>
                                        <!-- Author Info -->
                                        <div class="author-info">
                                            <h5><?php echo $key->name; ?><span> - <?php echo $key->company; ?></span></h5>
                                        </div>
                                        <!-- Quote Icon -->
                                        <div class="quote-icon"><img src="<?php echo base_url(); ?>tamplate/landing-page/img/core-img/quote.png" alt=""></div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client Feedback Area End -->

        <!-- Border -->
        <div class="container">
            <div class="border-line"></div>
        </div>

        <!-- Background Curve -->
        <div class="portfolio-bg-curve">
            <img src="<?php echo base_url(); ?>tamplate/landing-page/img/core-img/curve-3.png" alt="">
        </div>
    </section>
    <!--------------------------------- End Portfolio Area --------------------------------->

    <!--------------------------------- Beginning Blog Area --------------------------------->
    <section class="uza-blog-area">
        <!-- Background Curve -->
        <div class="blog-bg-curve">
            <img src="<?php echo base_url(); ?>tamplate/landing-page/img/core-img/curve-4.png" alt="">
        </div>

        <!-- CTA Area Start -->
        <div class="uza-cta-area section-padding-0-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-8">
                        <div class="cta-content mb-80">
                            <h2>Interested in working with me?</h2>
                            <h6>Hit the button below or give us a call!</h6>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="cta-content mb-80">
                            <div class="call-now-btn">
                                <a href="#"><span>Call me :</span> (+62)82234355455</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA Area End -->

        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Latest Blogs</h2>
                        <p>Hit the button below or give us a call!</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-post bg-img mb-80" style="background-image: url(<?php echo base_url(); ?>tamplate/landing-page/img/bg-img/8.jpg);">
                        <!-- Post Content -->
                        <div class="post-content">
                            <span class="post-date"><span>23</span> August, 2018</span>
                            <a href="#" class="post-title">SEO: The Movie By Ignite Visibility</a>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut</p>
                            <a href="#" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-post bg-img mb-80" style="background-image: url(<?php echo base_url(); ?>tamplate/landing-page/img/bg-img/9.jpg);">
                        <!-- Post Content -->
                        <div class="post-content">
                            <span class="post-date"><span>13</span> December, 2018</span>
                            <a href="#" class="post-title">What Curling Irons Are The Best Ones</a>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut</p>
                            <a href="#" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-post bg-img mb-80" style="background-image: url(<?php echo base_url(); ?>tamplate/landing-page/img/bg-img/10.jpg);">
                        <!-- Post Content -->
                        <div class="post-content">
                            <span class="post-date"><span>08</span> July, 2018</span>
                            <a href="#" class="post-title">Amazon REV Workshop: Road to Seattle</a>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut</p>
                            <a href="#" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--------------------------------- End Blog Area --------------------------------->
