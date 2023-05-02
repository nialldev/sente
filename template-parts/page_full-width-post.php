<?php 

/* Template Name: Full Width Post 
Template Post Type: post

*/

get_header();
?>


<main class="full-width-template">
    <section class="full-width-area">
        <?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
               
                        <div class="page_full-width-post-title-wrapper"><?php the_title('<h1>', '</h1>'); ?></div>
                
                <div class="post-meta">
        
                    <p><?php echo get_the_date(); ?></p>
                    <p>Posted by <?php the_author(); ?></p>

                </div>
                <div class="single-post-content">
                <?php 
                the_content(); 
				?>
        </div>
                
                    
			<?php endwhile; // End of the loop.
			?>
    </section>
    
    
</main>


<?php
get_footer();
                   
?>