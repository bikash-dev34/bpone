<?php 
/**
 * BP- Blocks
 * Template part for displaying Blog
 */
?>
<section class="pt-page pt-page-5" data-id="blog">
    <div class="section-title-block">
        <?php
         $s1=get_field("sec_blog_title");
         $s2=get_field("sec_blog_sub_title");?>
        <h2 class="section-title"><?php echo $s1;?></h2>
        <h5 class="section-description"><?php echo $s2;?></h5>
    </div>
    <div class="blog-masonry">
        <!-- Blog Post  -->

        <?php
          $argsblog=array(
          'post_type'=>'post',
          'posts_per_page'=>'',                  
           );
          $blogone=new WP_Query($argsblog);?>

        <?php // Checks if there is any posts
            if( $blogone->have_posts()):
            //While have any posts , show them to us
                       
            while( $blogone->have_posts()): $blogone->the_post();

          ?>
        <div class="item">
            <div class="blog-card">
                <!-- content of post is inserted here from another file i.e index.php -->
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