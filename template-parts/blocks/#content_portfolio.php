<?php
/**
 * BP-Block Template
 * Template part for displaying for portfolio section
 * 
 */
?>
<section class="pt-page pt-page-4" data-id="portfolio">
    <div class="section-title-block">
        <h2 class="section-title"><?php echo get_field("sec_title");?> </h2>
        <h5 class="section-description"><?php echo get_field("sec_sub_title");?></h5>
    </div>

    <!-- Portfolio Content -->
    <div class="portfolio-content">

        <!-- Portfolio filter -->
        <ul id="portfolio_filters" class="portfolio-filters">

            <?php
            $terms=get_terms('portfolio_category');
            foreach($terms as $term){?>
            <li>
                <a class="filter btn btn-sm btn-link"
                    data-group="<?php echo $term->slug;?>"><?php echo $term->name;?></a>
            </li>
            <?php }
            ?>

        </ul>
        <!-- End of Portfolio filter -->

        <!-- Portfolio Grid -->
        <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">

            <!-- Portfolio Item 1 -->
            <?php
            $args=array(
                'post_type'=>'portfolio',
                'post_per_page'=>4,
            );
            $query_port=new WP_Query($args);
            while( $query_port->have_posts()){
                $query_port->the_post(); 
                
                $termsArray=get_the_terms($post->ID,'portfolio_category');
                $termsSlug="";
                foreach($termsArray as $term){
                    $termsSlug.=$term->slug.'';
                }
            ?>
            <figure class="item" data-groups='<?php echo $termsSlug;?>'>
                <a class="ajax-page-load" href="<?php echo get_the_permalink(get_the_ID());?>">
                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                    <div>
                        <h5 class=" name"><?php echo wp_kses_post( get_the_title() ); ?></h5>
                        <small> <?php echo $term->name;?></small>
                        <i class="fa fa-file-text-o"></i>
                    </div>
                </a>
            </figure>
            <?php }
              wp_reset_postdata();

            ?>
            <!-- /Portfolio Item 1 -->





        </div>
        <!-- /Portfolio Grid -->

    </div>
    <!-- /Portfolio Content -->

</section>
<!-- /Portfolio Subpage -->