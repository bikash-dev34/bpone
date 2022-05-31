<?php 
/**
 * BP-Block Template
 * Template part for displaying for resume section
 * 
 */
?>

<section class="pt-page pt-page-3" data-id="resume">
    <div class="section-title-block">
        <?php 
        $sec1_title=get_field("section_title");
        $sec1_sub_title=get_field("section_sub_title");
        ?>
        <h2 class="section-title">
            <?php echo $sec1_title;?>
        </h2>
        <h5 class="section-description">
            <?php echo $sec1_sub_title;?> </h5>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-4 subpage-block">
            <div class="block-title">
                <?php
                $event_1_name=get_field("event_program_1");
                ?>
                <h3>
                    <?php echo $event_1_name;?>
                </h3>
            </div>
            <div class="timeline">
                <!-- Single event -->
                <?php 
                if(have_rows("event_1")):?>
                <div class="timeline-event te-primary">
                    <?php 
                    while(have_rows("event_1")):the_row();
                    $score=get_sub_field("cgpa-percntage");
                    $program=get_sub_field("programme");
                    $college_name=get_sub_field("school_college_name");
                    $desription=get_sub_field("description");
                    ?>
                    <h5 class="event-date">
                        <?php echo $score;?> </h5>
                    <h4 class="event-name"> <?php echo $program;?></h4>
                    <span class="event-description"> <?php echo $college_name;?></span>
                    <p> <?php echo $desription;?></p>

                    <?php endwhile?>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 subpage-block">
            <div class="block-title">
                <?php
                 $event_2_name=get_field("event_program_2");
                ?>
                <h3>
                    <?php echo $event_2_name;?>
                </h3>
            </div>
            <div class="timeline">
                <!-- Single event -->
                <?php
                if(have_rows("event_2")):?>
                <div class="timeline-event te-primary">
                    <?php
                    while(have_rows("event_2")):the_row();
                    $period=get_sub_field("period");
                    $dsignation=get_sub_field("designation");
                    $company=get_sub_field("company_name");
                    $role=get_sub_field("description");
                    ?>
                    <h5 class="event-date">
                        <?php echo $period;?>
                    </h5>
                    <h4 class="event-name"><?php echo $dsignation;?>
                    </h4>
                    <span class="event-description"><?php echo $company;?></span>
                    <p><?php echo $role;?></p>
                    <?php endwhile;?>
                </div>
                <?php endif;?>
                <!-- Single event -->
            </div>
        </div>

        <div class="col-sm-6 col-md-4 subpage-block">
            <div class="block-title">
                <?php
                 $event_3_name=get_field("event_program_3");
                ?>
                <h3><?php echo $event_3_name;?></h3>
            </div>
            <?php
                if(have_rows("event_3")):?>
            <div class="skills-info">
                <?php
                 while(have_rows("event_3")):the_row();
                 $skill_name=get_sub_field("skill_title");
                ?>
                <h4> <?php echo $skill_name;?>
                </h4>
                <div class="skill-container">
                    <div class="skill-percentage skill-1"></div>
                </div>
                <?php endwhile;?>
            </div>
            <?php endif;?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="download-cv-block">
                <a class="button" target="_blank" href="http://bpone.loc/wp-content/uploads/2022/05/Bikash-CV-min.pdf">
                    <?php echo get_field("cv_download");?></a>
            </div>
        </div>
    </div>
</section>
<!-- End Resume Subpage -->