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
            <!-- <ul class="tags">
                <li><a>HTML5</a></li>
                <li><a>CSS3</a></li>
                <li><a>jQuery</a></li>
                <li><a>Ajax</a></li>
                <li><a>PHP5</a></li>
            </ul> -->



            <h1>this is from single .php file</h1>
            <p class="lead"><?php the_content(); ?></p>

            <blockquote>
                <p>Vivamus volutpat auctor metus, venenatis ornare mi dictum sit amet. Aliquam erat volutpat.
                </p>
                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>

            <p>Praesent ac quam sed magna gravida interdum. Vivamus sed nunc lobortis, tempor ante ut, gravida
                nibh.
                Praesent sed euismod odio. Maecenas dui dui, euismod quis lobortis quis, dignissim ut eros.
                Curabitur
                cursus lacinia sollicitudin. Aenean vitae erat imperdiet, egestas nisi non, placerat sapien. In
                nec
                commodo justo. Nunc posuere lacinia neque eu malesuada. Sed lacus lacus, tincidunt id faucibus
                eget,
                sagittis sed enim. Nunc nec dapibus odio.</p>

            <div class="post-info">
                <span class="autor"><i class="fab fa-fw fab-user"></i> <?php echo get_the_author(); ?></span>
                <span class="divider">|</span>
                <span class="date"><i class="fab fa-fw fab-clock-o"></i> <?php echo get_the_date(); ?></span>
                <!-- Share Buttons -->
                <div class="btn-group share-buttons pull-right hidden-xs">
                    <a href="#" target="_blank" class="btn"><i class="fab fa-facebook"></i> </a>
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
                            <a href="#">John Doe</a> <span class="divider">|</span> <span class="light-gray">1
                                hour
                                ago</span>
                        </div>
                        <p>Nam pellentesque laoreet augue sed facilisis. Suspendisse nec sollicitudin mauris.
                            Integer
                            fringilla a odio sit amet fermentum. Nunc nibh mauris, pretium eu risus et, finibus
                            facilisis lorem.</p>
                        <div class="media-footer">
                            <a href="#"><i class="fa fa-reply"></i> Reply</a>
                            <span class="divider"></span>
                            <i class="fa fa-thumbs-up"></i>
                            <span>0</span>
                            <i class="fa fa-thumbs-down"></i>
                        </div>

                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="images/blog/comments/comment_photo_2.png" alt="">
                            </a>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="#">Bryan Morris</a> <span class="divider">|</span> <span
                                        class="light-gray">5
                                        hours ago</span>
                                </div>
                                <p>Donec fermentum elementum massa nec imperdiet. Quisque iaculis accumsan elit
                                    eget
                                    porttitor.</p>
                                <div class="media-footer">
                                    <a href="#"><i class="fa fa-reply"></i> Reply</a>
                                    <span class="divider"></span>
                                    <i class="fa fa-thumbs-up"></i>
                                    <span>0</span>
                                    <i class="fa fa-thumbs-down"></i>
                                </div>
                            </div>
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
                    <h3>Leave a Comment</h3>
                </div>
                <form class="form-add-comment">
                    <div class="form-group">
                        <input class="form-control" placeholder="Your name" name="name">
                        <div class="form-control-border"></div>
                        <i class="form-control-icon fa fa-user"></i>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Message..." name="message"></textarea>
                        <div class="form-control-border"></div>
                        <i class="form-control-icon fa fa-comment"></i>
                    </div>
                    <button class="button" type="submit">Add comment</button>
                </form>
            </div>

        </div>

    </div>
</div>
</div>
<!-- /Single Post page -->

<?php get_footer();?>
</body>

</html>