<?php 

/**
 * The template for the footer
 * Theme: sente
 * Author: Niall Tuohy
 
 */
         
         ?>
          
          
          <footer>
           
           
           <div class="footer-wrapper">
             
           <?php wp_nav_menu(
              array(
                'theme_location'  => 'secondary',
                'container'       =>  NULL,
                'container_class' =>  NULL,
                'menu_class'      => 'footer-navbar',
                'menu_id'         => 'footer-navbar',

              )
            ); ?>
            </div>
        </footer>
        <div class="sign">
           <div class="sign-container">
               <small class="by"><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sente' ) ); ?>">Powered by Wordpress</a>. Theme design by Niall Tuohy &copy; <?php echo date("Y"); ?></small>
            </div>
            </div>
            
        <?php wp_footer(); ?>
        <script type="text/javascript" src="../eidogo-player-1.2/player/js/board.js"></script>
    </body>
</html>