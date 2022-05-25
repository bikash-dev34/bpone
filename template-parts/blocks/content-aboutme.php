<?php 
/**
 * BP-Block Template.
 * Template part for displaying about section
 */
?>

<section class="pt-page pt-page-2" data-id="about_me">
    <div class="section-title-block">
        <h2 class="section-title"><?php echo get_field('section_title');?></h2>
        <h5 class="section-description"><?php echo get_field('section_sub_title');?></h5>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-6 subpage-block">
            <div class="general-info">
                <h3><?php echo get_field('sub_heading');?></h3>
                <?php echo get_field('sub_description');?>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 subpage-block">
            <div class="block-title">
                <h3><?php echo get_field('sub_title');?></h3>
            </div>
            <?php if(have_rows('sub_title_testimonial')):?>
            <div class="testimonials owl-carousel">
                <?php while( have_rows('sub_title_testimonial') ): the_row();?>
                <!-- Testimonial 2 -->
                <div class="testimonial-item">
                    <!-- Testimonial Content -->
                    <div class="testimonial-content">
                        <div class="testimonial-text">
                            <p><?php echo get_sub_field('client_opinion');?></p>
                        </div>
                    </div>
                    <!-- /Testimonial Content -->
                    <!-- Testimonial Author -->
                    <div class="testimonial-credits">
                        <!-- Picture -->
                        <div class="testimonial-picture">
                            <!-- <img src="images/testimonials/testimonila_photo_2.png" alt=""> -->
                            <img src="<?php wp_get_attachment_image('client_image');?>" alt="">
                        </div>
                        <!-- /Picture -->
                        <!-- Testimonial author information -->
                        <div class="testimonial-author-info">
                            <p class="testimonial-author"><?php echo get_sub_field('client_name');?></p>
                            <p class="testimonial-firm"><?php echo get_sub_field('client_company');?></p>
                        </div>
                    </div>
                    <!-- /Testimonial author information -->
                </div>
                <!-- End of Testimonial  -->
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <!-- End of Testimonial 2 -->
        </div>
    </div>


    <!-- Services block -->
    <div class="block-title">
        <h3><?php echo get_field('section_2_heading');?></h3>
    </div>
    <?php 
                if(have_rows('service_content')):?>
    <div class="row">
        <?php 
                  while(have_rows('service_content')):the_row();
                  
                    $service_img=get_sub_field('service_image');
                    $service_title=get_sub_field('service_title');
                    $service_desc=get_sub_field('service_description');
                  ?>
        <div class="col-sm-6 col-md-3 subpage-block">

            <div class="service-block">


                <div class="service-info">
                    <img src="<?php echo wp_get_attachment_image($service_img,'full');?>" alt="Responsive Design">
                    <h4><?php echo $service_title;?></h4>
                    <p><?php echo $service_desc;?></p>
                </div>
            </div>
        </div>
        <?php endwhile;?>
    </div>
    <?php endif;?>
    <!-- End of Services block -->
    <!-- Clients block -->
    <div class="block-title">
        <h3><?php echo get_field('section_3_heading');?></h3>
    </div>
    <?php
               if(have_rows('client')):?>
    <div class="row">
        <?php 
                  while(have_rows('client')):the_row();
                  
                    $client_logo=get_sub_field('client_logo'); 
                  ?>
        <div class="col-sm-4 col-md-2 subpage-block">
            <div class="client_block">
                <a href="#" target="_blank"><img src="<?php echo wp_get_attachment_image_src($client_logo,'full');?>"
                        alt="image"></a>
            </div>
        </div>
        <?php endwhile;?>
    </div>
    <?php endif;?>
    <!-- End of Clients block -->

    <!-- Fun facts block -->
    <div class="block-title">
        <h3><?php echo get_field('section_4_heading')?></h3>
    </div>

    <?php if(have_rows('facts_activity')):?>
    <div class="row">
        <?php while(have_rows('facts_activity')):the_row();?>
        <div class="col-sm-6 col-md-3 subpage-block">

            <div class="fun-fact-block gray-bg">
                <i class="pe-7s-icon pe-7s-smile"></i>
                <h4><?php echo get_sub_field('heading');?>
                </h4>
                <span class="fun-value">
                    <?php echo get_sub_field('activity_count');?>
                </span>
            </div>
        </div>
        <?php endwhile;?>
    </div>
    <?php endif;?>
    <!-- End of Fun fucts block -->
</section>
<!-- End of About Me Subpage -->