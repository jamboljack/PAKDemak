<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="<?php echo site_url('home'); ?>" class="logo">
        <img src="<?php echo base_url(); ?>images/logo.png" alt="">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <!-- <input type="text" class="form-control search" placeholder=" Cari Data"> -->
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="<?php echo base_url(); ?>images/avatar1_small.jpg">
                <span class="username"><?php echo $this->session->userdata('nama'); ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <!-- <li><a href="<?php // echo site_url('profil'); ?>"><i class=" fa fa-suitcase"></i>Profil</a></li> -->
                <li><a href="<?php echo site_url('home/logout'); ?>"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        <li>
            <!--<div class="toggle-right-box">
                <div class="fa fa-bars"></div>
            </div> -->
        </li>
    </ul>
    <!--search & user info end-->
</div>
</header>