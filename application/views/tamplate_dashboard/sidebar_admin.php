<body class="theme-blue">

    <!--------------------------------- Beginning Page Loader --------------------------------->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please Wait...</p>
        </div>
    </div>
    <!--------------------------------- End Page Loader --------------------------------->

    <!--------------------------------- Beginning Overlay For Sidebars --------------------------------->
    <div class="overlay"></div>
    <!--------------------------------- End Overlay For Sidebars --------------------------------->

    <!--------------------------------- Beginning Search Bar --------------------------------->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!--------------------------------- End Search Bar --------------------------------->

    <!--------------------------------- Beginning Side Bar --------------------------------->

    <section>

        <!--------------------------------- Beginning Left Sidebar --------------------------------->

        <aside id="leftsidebar" class="sidebar">

            <!-- Beginning User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url();?>upload/img/user/<?php echo $user[0]->image; ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $user[0]->first_name; ?> <?php echo $user[0]->last_name; ?></div>
                    <div class="email"><?php echo $user[0]->email; ?></div>
                </div>
            </div>
            <!-- End User Info -->
            
            <!-- Beginning Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="<?php if($this->uri->segment(2)==''){echo "active";}?>">
                        <a href="<?php echo base_url(); ?>admin">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li class="header">LANDING PAGE</li>
                    <li class="<?php if($this->uri->segment(2)=='benefits'){echo "active";}?>">
                        <a href="<?php echo base_url(); ?>admin/benefits">
                            <i class="material-icons">spellcheck</i>
                            <span>Manfaat</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(2)=='project'){echo "active";}?>">
                        <a href="<?php echo base_url(); ?>admin/project">
                            <i class="material-icons">view_module</i>
                            <span>Services</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(2)=='testimoni'){echo "active";}?>">
                        <a href="<?php echo base_url(); ?>admin/testimoni">
                            <i class="material-icons">textsms</i>
                            <span>Testimoni</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(2)=='media'){echo "active";}?>">
                        <a href="<?php echo base_url(); ?>admin/media">
                            <i class="material-icons">perm_media</i>
                            <span>Media</span>
                        </a>
                    </li>
                    <li class="header">OTHER</li>
                    <li class="<?php if($this->uri->segment(2)=='settings'){echo "active";}?>">
                        <a href="<?php echo base_url(); ?>admin/settings">
                            <i class="material-icons">settings</i>
                            <span>Pengaturan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>login/logout">
                            <i class="material-icons">logout</i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Menu -->

            <!-- Beginning Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="<?php echo base_url(); ?>" target="_blank"><?php echo $company[0]->name; ?></a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0
                </div>
            </div>
            <!-- End Footer -->

        </aside>

        <!--------------------------------- End Left Sidebar --------------------------------->

    </section>

    <!--------------------------------- End Side Bar --------------------------------->

</body>
</html>