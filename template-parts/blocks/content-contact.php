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
                <h3>Get in Touch</h3>
            </div>
            <p>Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum
                egestas. Integer ultrices libero sed justo vehicula, eget tincidunt tortor tempus.</p>
            <div class="contact-info-block">
                <div class="ci-icon">
                    <i class="pe-7s-icon pe-7s-map-marker"></i>
                </div>
                <div class="ci-text">
                    <h5>Los Angeles, USA</h5>
                </div>
            </div>

            <div class="contact-info-block">
                <div class="ci-icon">
                    <i class="pe-7s-icon pe-7s-mail"></i>
                </div>
                <div class="ci-text">
                    <h5>alexsmith@example.com</h5>
                </div>
            </div>
            <div class="contact-info-block">
                <div class="ci-icon">
                    <i class="pe-7s-icon pe-7s-call"></i>
                </div>
                <div class="ci-text">
                    <h5>+123 654 78900</h5>
                </div>
            </div>
            <div class="contact-info-block">
                <div class="ci-icon">
                    <i class="pe-7s-icon pe-7s-check"></i>
                </div>
                <div class="ci-text">
                    <h5>Freelance Available</h5>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-6 subpage-block">
            <div class="block-title">
                <h3>Contact Form</h3>
            </div>
            <form id="contact-form" method="post" action="contact_form/contact_form.php">

                <div class="messages"></div>

                <div class="controls">
                    <div class="form-group">
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name"
                            required="required" data-error="Name is required.">
                        <div class="form-control-border"></div>
                        <i class="form-control-icon fab fa-user"></i>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <input id="form_email" type="email" name="email" class="form-control"
                            placeholder="Email Address" required="required" data-error="Valid email is required.">
                        <div class="form-control-border"></div>
                        <i class="form-control-icon fa fa-envelope"></i>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me"
                            rows="4" required="required" data-error="Please, leave me a message."></textarea>
                        <div class="form-control-border"></div>
                        <i class="form-control-icon fa fa-comment"></i>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"
                        data-callback="correctCaptcha"></div>

                    <input type="submit" class="button btn-send" value="Send message">
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