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
                                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
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

    <!-- ****** Gallery Area Start ****** -->
    <section class="uza-portfolio-area section-padding-80">

        <!-- Portfolio Menu -->
        <div class="portfolio-menu text-center mb-80">
            <button class="btn active" data-filter="*">All Portfolio</button>
            <?php foreach ($filter as $key) { ?>
                <button class="btn" data-filter=".<?php echo $key->target; ?>"><?php echo $key->name; ?></button>
            <?php } ?>
        </div>

        <div class="container-fluid">
            <div class="row uza-portfolio">
                
                <?php foreach ($portfolio as $key) { ?>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item <?php echo $key->filter; ?>">
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
                    </div>
                <?php } ?>

            </div>

            <div class="row">
                <div class="col-12 text-center mt-30">
                    <!-- <a href="#" class="btn uza-btn btn-3">Load More</a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Gallery Area End ****** -->