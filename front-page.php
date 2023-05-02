<?php 

/**
 * The template for the home page
 * Theme: sente
 * Author: Niall Tuohy
 
 */

get_header();

?>
 
 <header class="header">
    
 <?php echo do_shortcode('[metaslider id="6726"]'); ?>

</header>

<div class="home-wrapper">
	<section class="beneath-home-banner">
		<?php get_sidebar( 'beneath-home-banner' ); ?>
	</section>
    <section class="feature-blocks">
        <div class="feature1">
            <?php get_sidebar( 'home-first' ); ?>
        </div>
        <div class="feature2">
            <?php get_sidebar( 'home-second' ); ?>
        </div>
        <div class="feature3">
            <?php get_sidebar( 'home-third' ); ?>
        </div>    
            </section>

    <main class="posts-wrapper">
        <div class="posts-container"> 
            <div class="latest-news">
                <h1>Latest News</h1>
            </div>
            
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div class="home-posts-content">
                       <?php the_title('<h2 class="loop-headers"><a href="' . get_permalink( get_the_ID() ) . '">', '</a></h2>'); ?>
                       <div class="loop-post-meta">
                            <p><?php echo get_the_date(); ?></p>
                            <p>Posted by <?php the_author(); ?></p>
                        </div>
                       <div class="post-content">
                        <?php if ( has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail(); ?>
                        </a>
                        <?php endif; ?>

                        <?php the_excerpt(); ?>
                    </div><!--end .post-content-->
                   </div><!--end .home-post-content-->
                <?php 

                endwhile; 

                else :

                    _e( 'There are currently no posts available.', 'textdomain' );

                endif;


                ?>
            <div class="loop-pagination">
                <div class="prev">
                    <?php previous_posts_link() ?>
                </div>
                <div class="next">
                    <?php next_posts_link(); ?>
                </div>
                </div>
        </div><!--end .post-container-->

           <aside class="right-sidebar">
               <div class="right-sidebar-content">
                    <?php get_sidebar('right') ?>
                </div>
           </aside>
    
    </main><!--.posts-wrapper-->
</div><!-- end .home-wrapper --> 


                                  
                                    
 <?php  get_footer(); ?>
        
        
    
