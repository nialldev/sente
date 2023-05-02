<?php

/**
 * The template for displaying 404 pages (Not Found)
 */


get_header(); 

?>
    <main class="two-column-wrapper">
        <div class="two-column-container">
                <div class="not-found">
             <h1><?php _e('Error 404', 'sente'); ?></h1>
               <h2><?php _e('Oops! This page cannot be found.', 'sente'); ?></h2>
               <p><?php _e('Please ensure you typed the correct address into the URL bar and try again or select a page from the main menu.', 'sente'); ?></p>
                </div>
        </div>
        <aside class="right-sidebar">
               <div class="right-sidebar-content">
                    <?php get_sidebar('right') ?>
                </div>
           </aside>
</main>
<?php get_footer(); ?>
