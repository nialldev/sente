<?php 

/* Template Name: Full Width 
Template Post Type: post, page

*/

get_header();
?>


<main class="full-width-template">
    <section class="full-width-area">
        <?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
               <div class="page-intro-title">
                        <div class="title-wrapper"><?php the_title('<h1>', '</h1>'); ?></div>
                    </div>
                
                <?php 
                the_content(); 
				?>
                
                    
			<?php endwhile; // End of the loop.
			?>
    </section>
    
    
</main>


<?php
get_footer();
                   
?>