<?php 

/**
 * The template for displaying all single posts
 *
 * Theme: sente
 * Author: Niall Tuohy
 
 */

get_header();

?>

<main class="two-column-wrapper">
        <div class="two-column-container">

<?php 
    
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_title('<h1>', '</h1>'); ?>
    <div class="post-meta">
        
        <p><?php echo get_the_date(); ?></p>
        <p>Posted by <?php the_author(); ?></p>
    
        </div>
        <div class="single-post-content">
            <?php the_content(); ?>
        </div>
    
    <div class="single-post-nav">
    <span class="single-post-nav-prev">
<?php previous_post_link('&laquo; %link', 'Previous: %title'); ?>
        </span>
    <span class="single-post-nav-next">
    
        <?php next_post_link('%link &raquo', 'Next: %title'); ?>
    
    </span>
    </div>

    
 
 <div class="post-comments">
<?php 

 
            
     if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
endwhile; 

else :

    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );

endif;
?>

</div>

    </div>

<aside class="right-sidebar">
               <div class="right-sidebar-content">
                    <?php get_sidebar('right') ?>
                </div>
           </aside>
    </main>
<?php
get_footer();
?>
