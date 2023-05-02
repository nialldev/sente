<?php
/**
 * The template for displaying all single pages
 * Theme: sente
 * Author: Niall Tuohy
 
 */

get_header();
?>

	<div class="page-container">
              
                <div class="page-content">    
            <?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
               <div class="page-intro-title">
                        <div class="title-wrapper"><?php the_title('<h1>', '</h1>'); ?></div>
                    </div>
                
                <?php 
                the_content(); 
				?>
                    </div>
                    
			<?php endwhile; // End of the loop.
			?>
</div>
<?php
get_footer();
