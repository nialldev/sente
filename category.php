<?php 
/**
 * The template for the category page
 * Theme: sente
 * Author: Niall Tuohy
 
 */
?>

<!-- Template: category -->

<?php

get_header();

?>


            <?php if ( get_header_image() ) : ?>
    <header class="header">
    
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
    
</header>
<?php endif; ?>
       

       <main class="posts-wrapper">
        <div class="posts-container"> 
            <div class="latest-news">
                      <h1>Category: </h1>
                      <h2><?php echo the_category(); ?></h2>
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
    
<?php get_footer();
?>