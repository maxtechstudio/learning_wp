<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>La Pizzeria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>
    <header class="site-header">
    <div class="container">
        <div class="logo">
            <a href="<?php echo  esc_url(home_url('/') ); ?>">
                <img src="<?php echo get_template_directory_uri(). '/img/logo.svg';  ?>" class="logo_svg">
                <!-- <h1><?php echo get_template_directory_uri(); ?></h1> -->
            </a>
        </div>
        <!-- logo end -->
        <div class="header-information">
            <div class="social-menu">
                    <?php 
                        $args=array(
                            'theme_location'=>'social-menu',
                            'container' =>'nav',
                            'container_class' => 'socials',
                            'container_id' => 'socials',
                            'link_before' => '<span class="sr-text">',
                            'link_after' => '</span>'
                        );
                        wp_nav_menu($args);
                    ?>
            </div> <!-- end of social icon div -->
            <div class="menu-info">
                <p>kathmanud,nepapl</p>
                <p>phone Number:01-525243</p>
            </div> <!-- menu info information end -->
        </div>
        </div><!--container close-->
    </header>
    <div class="main-menu">
        <div class="navigation">
            <?php  
                $args=array(
                    'theme_location'=> 'header-menu',
                    'container' => 'nav',
                    'container_class'=> 'site-nav'
                );
                wp_nav_menu($args);                
                ?>
        </div>
    </div>