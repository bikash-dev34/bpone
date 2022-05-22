<?php 
/**
 * BP- Blocks
 * Template part for displaying Blog
 */
?>
<!-- Blog Subpage -->
            <section class="pt-page pt-page-5" data-id="blog">
              <div class="section-title-block">
                <h2 class="section-title">Blog</h2>
                <h5 class="section-description">My Diary</h5>
              </div>
              <div class="blog-masonry">
                <!-- Blog Post  -->

                 <?php
                 $argsblog=array(
                   'post_type'=>'post',
                   'posts_per_page'=>'3',
                  
                  
                 );
                 $blogone=new WP_Query($argsblog);?>

                     <?php // Checks if there is any posts
                      if( $blogone->have_posts()):
                        //While have any posts , show them to us
                       
                        while( $blogone->have_posts()): $blogone->the_post();

                        ?>
                         <div class="item">
                           <div class="blog-card">
                         <?php get_template_part('template-parts/content','blog');?>
                            </div>
                         </div>
                        <?php 
                        endwhile;
                        wp_reset_postdata();

                  
                      endif;?>
                
              
             </div>
             <!-- End of Blog Post -->
            </section> 
            