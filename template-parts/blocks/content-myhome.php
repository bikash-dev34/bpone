<?php 
/**
 * BP-Block Template.
 * Template part for displaying home section
 */
?>
<div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
          <!-- Subpages -->
          <div class="subpages">

            <!-- Home Subpage -->
             <section class="pt-page pt-page-1 section-with-bg section-paddings-0" style="background-image: url(images/home_page_bg_1.jpg);" data-id="home">
              <div class="home-page-block-bg">
                <div class="mask"></div>
              </div>
              <div class="home-page-block">
                <div class="v-align">
                  <h2><?php echo get_field('my_name');?></h2>
                  <div id="rotate" class="text-rotate">
                    <?php 
                    //check rows exists
                    if(have_rows('my_designation')):
                      //loop through rows
                      while(have_rows('my_designation')):the_row();
                      //Load the sub field value
                      $sub_designation=get_sub_field('my_post');?>
                    <div>
                      <p class="home-page-description"><?php echo $sub_designation;?></p>
                    </div>
                    <?php endwhile;?>
                    <?php else:?>
                      <div>
                      <p class="home-page-description"><?php echo ("You have other talents");?></p>
                    </div>
                      <?php endif;?>
                  </div>

                  <div class="block end" style="text-align: center">
                 
                    <ul class="info-list">
                     <?php 
                  $rows=get_sub_field('my_information');
                      if( $rows ) { 
                    foreach($rows as $row){
                      $title=$row['title'];
                      $detail=$row['detail']; ?>
                      <li><span class="title"><?php echo('$title');?> </span><span class="value"><?php echo('$detail');?></span></li>
                     
                    </ul>
                    
                   <?php }}?>
                  </div>
                </div>
              </div>
            </section>
            <!-- End of Home Subpage -->
  