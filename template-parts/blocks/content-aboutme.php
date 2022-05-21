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
                    <h3>Testimonials</h3>
                  </div>
                  <?php 
                  if(have_rows('sub_title_testimonial')):?>
                   <?php while( have_rows('sub_title_testimonial') ): the_row();?>
                   
                  <div class="testimonials owl-carousel">
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
                <?php endif; ?>
              </div>
               <!-- End of Testimonial 2 -->
                  </div>
                </div>
              </div>

              <!-- Services block -->
              <div class="block-title">
                <h3>Services</h3>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block"> 
                    <div class="service-info">
                      <img src="images/service/web_design.png" alt="Responsive Design">
                      <h4>Web Design</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block"> 
                    <div class="service-info">
                      <img src="images/service/copywrite.png" alt="Copywriter">
                      <h4>Copywriter</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block"> 
                    <div class="service-info">
                      <img src="images/service/ecommerce.png" alt="E-Commerce">
                      <h4>E-Commerce</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block"> 
                    <div class="service-info">
                      <img src="images/service/management.png" alt="Management">
                      <h4>Management</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End of Services block -->

              <!-- Clients block -->
              <div class="block-title">
                <h3>Clients</h3>
              </div>

              <div class="row">
                <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="#" target="_blank"><img src="images/clients/client_1.png" alt="image"></a>
                  </div>
                </div>

                <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="#" target="_blank"><img src="images/clients/client_2.png" alt="image"></a>
                  </div>
                </div>

                <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="#" target="_blank"><img src="images/clients/client_3.png" alt="image"></a>
                  </div>
                </div>

                <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="#" target="_blank"><img src="images/clients/client_4.png" alt="image"></a>
                  </div>
                </div>

                <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="#" target="_blank"><img src="images/clients/client_5.png" alt="image"></a>
                  </div>
                </div>

                <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="#" target="_blank"><img src="images/clients/client_6.png" alt="image"></a>
                  </div>
                </div>
              </div>
              <!-- End of Clients block -->

              <!-- Fun facts block -->
              <div class="block-title">
                <h3>Fun Facts</h3>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="fun-fact-block gray-bg"> 
                    <i class="pe-7s-icon pe-7s-smile"></i>
                    <h4>Happy Clients</h4>
                    <span class="fun-value">1,024</span>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="fun-fact-block"> 
                    <i class="pe-7s-icon pe-7s-alarm"></i>
                    <h4>Working Hours</h4>
                    <span class="fun-value">6,256</span>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="fun-fact-block gray-bg"> 
                    <i class="pe-7s-icon pe-7s-medal"></i>
                    <h4>Awards Won</h4>
                    <span class="fun-value">21</span>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="fun-fact-block"> 
                    <i class="pe-7s-icon pe-7s-coffee"></i>
                    <h4>Coffee Consumed</h4>
                    <span class="fun-value">20,000</span>
                  </div>
                </div>
              </div>
              <!-- End of Fun fucts block -->
            </section>
            <!-- End of About Me Subpage -->
