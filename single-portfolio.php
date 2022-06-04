<?php
/**
 * This is portfolio block single
 */
    ?>
<div id="portfolio-page" class="portfolio-page-content">
    <div class="container">
        <div class="portfolio-nav">
            <div id="portfolio-close-button" class="portfolio-close-button">
                <a href="#portfolio"><i class="fa fa-times" aria-hidden="true"></i></a>
            </div>
        </div>

        <div class="portfolio-title">
            <?php $title=get_field('heading_portfolio');?>
            <h1><?php  echo $title ;?></h1>
        </div>

        <div class="row">
            <div class="col-sm-7 col-md-7 portfolio-block">
                <div class="owl-carousel portfolio-page-carousel">
                    <?php 
                    if(have_posts()):?>
                    <?php while(have_posts()):the_post();?>
                    <div class="item">
                        <img src="<?php the_post_thumbnail_url();?>" alt="" />
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".portfolio-page-carousel").owlCarousel({
                        smartSpeed: 1200,
                        items: 1,
                        loop: true,
                        dots: true,
                        nav: true,
                        navText: false,
                        margin: 10,
                    });
                });
                </script>
            </div>

            <div class="col-sm-5 col-md-5 portfolio-block">
                <!-- Project Description -->
                <div class="block-title">
                    <h3> <?php echo the_title(); ?></h3>
                </div>
                <ul class="project-general-info">
                    <li>
                        <p><i class="fa fa-user"></i> Bikash Rai
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-globe"></i>
                            <a href="#" target="_blank">www.bikashinfo.com.np</a>
                        </p>
                    </li>
                    <li>
                        <p><i class="fa fa-calendar"></i> 06 June,2022</p>
                    </li>
                </ul>

                <p class="text-justify">
                    <?php echo the_content(); ?>
                </p>


                <!-- Share Buttons -->
                <div class="btn-group share-buttons">
                    <div class="block-title">
                        <h3>Share</h3>
                    </div>
                    <a href="https://www.facebook.com/Bikash.Sunabhat.Rai/" target="_blank" class="btn"><i
                            class="fab fa-facebook"></i>
                    </a>
                    <a href="#" target="_blank" class="btn"><i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" target="_blank" class="btn"><i class="fab fa-instagram"></i>
                    </a>
                </div>
                <!-- /Share Buttons -->
            </div>
        </div>
    </div>
</div>