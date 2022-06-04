<?php get_header();?>



<div id="main" class="site-main">
    <div class="page-wrapper">
        <?php 
    $url = home_url( '/' );?>
        <a class="blog-back-button" href="<?php echo $url;?>"><i class=" fa fa-angle-left"></i></a>

        <div class="blog-post-main-image">
            <img class="post-image img-responsive" src="<?php the_post_thumbnail('medium');?>"
                alt="<?php the_title_attribute(); ?>" />
        </div>

        <div class="blog-post-content">
            <h1><?php the_title();?></h1>
            <p class="lead"><?php the_content(); ?></p>



            <div class="post-info">
                <span class="autor"><i class="fab fa-fw fab-user"></i> <?php echo get_the_author(); ?></span>
                <span class="divider">|</span>
                <span class="date"><i class="fab fa-fw fab-clock-o"></i> <?php echo get_the_date(); ?></span>
                <!-- Share Buttons -->
                <div class="btn-group share-buttons pull-right hidden-xs">
                    <a href="https://www.facebook.com/Bikash.Sunabhat.Rai/" target="_blank" class="btn"><i
                            class="fab fa-facebook"></i> </a>
                    <a href="#" target="_blank" class="btn"><i class="fab fa-instagram"></i> </a>
                    <a href="#" target="_blank" class="btn"><i class="fab fa-linkedin"></i> </a>
                </div>
                <!-- /Share Buttons -->
            </div>
            <div class="post-comments">
                <div class="block-title">
                    <h3>Comments (3)</h3>
                </div>
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="images/blog/comments/comment_photo_1.png" alt="">
                    </a>
                    <div class="media-body">
                        <div class="media-heading">
                            <a href="#">John Doe</a> <span class="divider">|</span> <span class="light-gray">12
                                hours ago</span>
                        </div>
                        <p>Nulla tincidunt augue lacinia purus scelerisque fringilla. Donec venenatis
                            volutpat
                            lacus, ac efficitur ligula imperdiet id. Nunc gravida ullamcorper metus, ut
                            gravida
                            velit condimentum vel.</p>
                        <div class="media-footer">
                            <a href="#"><i class="fa fa-reply"></i> Reply</a>
                            <span class="divider"></span>
                            <i class="fa fa-thumbs-up"></i>
                            <span>0</span>
                            <i class="fa fa-thumbs-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="post-comment-add">
        <div class="block-title">

            <?php comment_form();?>
        </div>

    </div>

</div>

</div>
</div>
</div>
<!-- /Single Post page -->

<?php get_footer();?>
</body>

</html>