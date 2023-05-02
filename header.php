<?php 

/**
 * The template for the header
 * Theme: sente
 * Author: Niall Tuohy
 
 */


?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <meta http-equiv="Content-Security-Policy" content="" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160989464-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-160989464-1');
        </script>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- <meta name="description" content="<?php bloginfo('description'); ?>" /> -->
        <link href="https://fonts.googleapis.com/css?family=Lato|Lora&display=swap" rel="stylesheet"> 
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
       <div class="header-wrapper-1">
        <div class="header-wrapper">
            <div class="header-container">
                 <div class="logo-container">     
                 <?php if ( function_exists( 'the_custom_logo' ) ) {
                       the_custom_logo();
                  }; ?>
                      </div> 
                <div class="site-title-wrapper">      
                  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>     
                       </div>
       
                <?php get_sidebar( 'top-right' ); ?>
            </div>
               </div>
                <div class="primary-nav-wrapper-1">
                 <div class="primary-nav-wrapper">
            <div class="primary-nav-container">
                <a href="javascript:void(0)" onclick="toggleNav(); moveSearch();">
                     <div class="nav-icon">
                         <div id="burger-icon"></div>
                         <div id="burger-icon"></div>
                         <div id="burger-icon"></div>
                    </div>
                    </a>
                 <?php wp_nav_menu(
                      array(
                        'theme_location'  => 'primary',
                        'container'       => 'nav',
                        'container_class' => 'primary-nav',
                        'menu_class'      => 'navbar',
                        'menu_id'         => 'navbar',

                      )
                    ); ?>
                    
                </div> 
                      
              </div>
              <?php get_sidebar( 'beneath-main-nav' ); ?>  
              </div>
        </div>