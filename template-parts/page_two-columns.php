<?php 

/* Template Name: Two Column Page */ 

get_header();
?>

	<div class="page_two-column-wrapper">
             <div class="page_two-column-container"> 
                    
            <?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
               <div class="page-intro-title">
                        <div class="page_two-column-title-wrapper"><?php the_title('<h1>', '</h1>'); ?></div>
                    </div>
                <div class="page-content">
                <?php 
                the_content(); 
				?>
                    </div>
                    
			<?php endwhile; // End of the loop.
			?>
			</div>
			<aside class="right-sidebar">
               <div class="right-sidebar-content">
                    <?php get_sidebar('right') ?>
                </div>
           </aside>
        </div>


<?php
get_footer();
                   
?>