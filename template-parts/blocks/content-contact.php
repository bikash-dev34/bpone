<section class="pt-page pt-page-6" data-id="contact">
    <div class="section-title-block">
        <?php
        $se_title=get_field("s_title");
        $se_sub_title=get_field("s_sub_title");
       ?>
        <h2 class="section-title"><?php echo $se_title;?></h2>
        <h5 class="section-description"><?php echo $se_sub_title;?></h5>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-6 subpage-block">
            <div class="block-title">
                <?php 
                $contet_title=get_field("content_title");
                $content_des=get_field("content_description");?>
                <h3>
                    <?php echo $contet_title;?>
                </h3>
            </div>
            <p>
                <?php echo $content_des;?>
            </p>


            <?php 
                if(have_rows('contact_list_widget','option')):?>
            <?php 
                while (have_rows('contact_list_widget','option')) : the_row();
                $icon_for= get_sub_field('icon');
                $info_text = get_sub_field('contact_info');
                ?>
            <div class="contact-info-block">

                <div class="ci-icon">
                    <i class="pe-7s-icon pe-7s-<?php echo $icon_for;?>"></i>
                </div>
                <div class="ci-text">
                    <h4> <?php echo $info_text;?></h4>
                </div>

            </div>
            <?php endwhile;?>
            <?php endif;?>

        </div>

        <div class="col-sm-6 col-md-6 subpage-block">
            <div class="block-title">
                <h3>Contact Form</h3>
            </div>
            <!-- <form id="contact-form" method="post" action="contact_form/contact_form.php"> -->
            <form id="contact-form" method="post" action="">
                <div class="messages"></div>

                <div class="controls">
                    <?php echo do_shortcode('[contact-form-7 id="260" title="Contact Me"]');?>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End Contact Subpage -->
</div>
</div>
<!-- /Page changer wrapper -->
</div>
<!-- /Main Content -->

<?php get_header();?>