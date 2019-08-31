    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Portfolio</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>portfolio">Portfolio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detail</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="<?php echo base_url(); ?>tamplate/landing-page/img/core-img/curve-5.png" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** Portfolio Single Area Start ***** -->
    <section class="uza-portfolio-single-area section-padding-80">
        <div class="container">
            <div class="row justify-content-between align-items-end">
                <div class="col-12 col-md-6">
                    <div class="portfolio-details-text">
                        <h2><?php echo $detail[0]->name; ?></h2>
                        <h6><?php echo $detail[0]->type; ?></h6>
                        <p><?php echo $detail[0]->description; ?></p>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="portfolio-meta">
                        <h6>Client : <?php echo $detail[0]->client; ?></h6>
                        <h6>Date : <?php echo $detail[0]->date_release; ?></h6>
                        <h6>Location : <?php echo $detail[0]->location; ?></h6>
                        <h6>Status : <?php echo $detail[0]->stage; ?></h6>
                    </div>
                    <div class="portfolio-social-info d-flex align-items-center">
                        <p>Share:</p>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-feed" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="portfolio-thumbnail mt-80">
                        <img src="<?php echo base_url(); ?>tamplate/landing-page/img/bg-img/<?php echo $detail[0]->image; ?>" alt="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="portfolio-pager mt-80 d-flex align-items-center justify-content-between">
                        <!--
                            <a href="#"><i class="arrow_left"></i> Previous Post</a>
                            <a href="index.html">Back to home</a>
                            <a href="#">Next Post <i class="arrow_right"></i></a>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Portfolio Single Area End ***** -->