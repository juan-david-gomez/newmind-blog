<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Free Portfolio Template : Resumae </title>
    <!--REQUIRED STYLE SHEETS-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    </head>
<body>
    <!-- NAV SECTION -->
    <section class="home-sec">
      <div class="container-fluid">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-1 text-center">
              
              <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>">  
                <img src="<?php bloginfo('template_directory') ?>/assets/img/logo.png" height="85" width="115" alt="">   
              </a>
          
            </div>
            <div class="col-xs-10">
              
              <div class="navbar navbar-newmid ">
                  
                  <div class="">
                      <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>
                      </div>
                        <!-- Nav     -->
                        <?php 
                             /**
                            * Displays a navigation menu
                            * @param array $args Arguments
                            */
                            $args = array(
                              'theme_location' => 'principal',
                              'container' => 'nav',
                              'container_id' => 'nav',
                              'container_class'   => 'collapse navbar-collapse',
                              'menu_class'        => 'nav navbar-nav',
                              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                              'walker'            => new wp_bootstrap_navwalker()
                            );
                          
                            wp_nav_menu( $args );
                        ?>
                  </div>
              </div>
            </div>      
        </div>
      </div>
    </section>