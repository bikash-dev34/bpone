<?php
/**
 * It is use to dispaly blog list post
 */

?>
<div class="media-block">
    <?php if ( has_post_thumbnail()) : ?>
    <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail("thumbnail"); ?>
        <div class=" mask"></div>
        <?php 
           $post_date = get_the_date( 'Y' );   
           $post_month = get_the_date( 'M-d' );   
        ?>
        <div class=" post-date"><span class="day"><?php echo $post_month;?></span><span
                class="month"><?php echo $post_date;?></span></div>
    </a>
    <?php endif; ?>
</div>
<div class="post-info">
    <ul class="category">
        <li><a href="<?php echo esc_url( get_the_permalink() );?>">

            </a>
        </li>
    </ul>
    <a href="<?php the_permalink(); ?>">
        <h4 class="blog-item-title"><?php echo wp_kses_post( get_the_title() ); ?></h4>
    </a>
</div>