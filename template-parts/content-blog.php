<?php
/**
 * Template part for displaying blog
 */
?>
<article>
 <!-- Blog Post -->
               
                    <div class="media-block">
                      <a href="blog-post-1.html">
                        <img class="post-image img-responsive" src="images/blog/blog_post_2.jpg" alt="blog-post-2" />
                        <div class="mask"></div>
                        <div class="post-date"><span class="day">3</span><span class="month">Nov</span><!--<span class="year">2016</span>--></div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="#">jQuery</a></li>
                      </ul>
                      <a href="<?php the_permalink();?>"><h4 class="blog-item-title"><?php the_title();?></h4></a>
                    </div>
                  </div>
                </div>
                <!-- End of Blog Post  -->

</article>