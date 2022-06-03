<?php
/**
 * This is portfolio block single
 */
    ?>
<div id="portfolio-page" class="portfolio-page-content">
    <div class="container">
        <div class="portfolio-nav">
            <div id="portfolio-close-button" class="portfolio-close-button">
                <a href="#portfolio"><i class="fa fa-close"></i></a>
            </div>
        </div>

        <div class="portfolio-title">
            <?php $title=get_field('heading_portfolio');?>
            <h1><?php  echo $title ;?></h1>
        </div>

        <div class="row">
            <div class="col-sm-7 col-md-7 portfolio-block">
                <div class="owl-carousel portfolio-page-carousel">
                    <!-- <?php 
                    // if(have_rows())?> -->
                    <div class="item">
                        <img src="<?php the_post_thumbnail_url();?>" alt="" />
                    </div>

                </div>
                <?php the_content();?>
                <div class="portfolio-page-video embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="<?php the_permalink(); ?>"></iframe>
                </div>

                <!--
                <div class="portfolio-page-image">
                    <img src="images/portfolio/portfolio_details/1_1.jpg" alt="">
                </div>
                -->

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
                    <h3>Description</h3>
                </div>
                <ul class="project-general-info">
                    <li>
                        <p><i class="fa fa-user"></i> Bikash Rai Single-portfolio,php
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-globe"></i>
                            <a href="#" target="_blank">www.project-site.com</a>
                        </p>
                    </li>
                    <li>
                        <p><i class="fa fa-calendar"></i> 06 June,2022</p>
                    </li>
                </ul>

                <p class="text-justify">
                    singleportolio content Aliquam euismod aliquam massa, quis eleifend dui sodales vitae.
                    Interdum et malesuada fames ac ante ipsum primis in faucibus.
                </p>
                <!-- /Project Description -->

                <!-- Technology -->
                <div class="tags-block">
                    <div class="block-title">
                        <h3>Technology</h3>
                    </div>
                    <ul class="tags">
                        <li><a>HTML5</a></li>
                        <li><a>CSS3</a></li>
                        <li><a>jQuery</a></li>
                        <li><a>Ajax</a></li>
                        <li><a>PHP5</a></li>
                    </ul>
                </div>
                <!-- /Technology -->

                <!-- Share Buttons -->
                <div class="btn-group share-buttons">
                    <div class="block-title">
                        <h3>Share</h3>
                    </div>
                    <a href="#" target="_blank" class="btn"><i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" target="_blank" class="btn"><i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" target="_blank" class="btn"><i class="fa fa-dribbble"></i>
                    </a>
                </div>
                <!-- /Share Buttons -->
            </div>
        </div>
    </div>
</div>