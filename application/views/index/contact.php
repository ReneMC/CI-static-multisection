<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $heading; ?>
                <small>Subheading</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="active">Contact</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <!-- Map Column -->
        <div class="col-md-8">
            <!-- Embedded Google Map -->
            <iframe width="100%"
                    height="400px"
                    frameborder="0"
                    scrolling="no"
                    marginheight="0"
                    marginwidth="0"
                    src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=32.6358915,-115.4792783&amp;spn=56.506174,79.013672&amp;t=m&amp;z=15&amp;output=embed">
            </iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-md-4">
            <h3>Contact Details</h3>
            <p>
                3481 Melrose Place<br>Beverly Hills, CA 90210<br>
            </p>
            <p><i class="fa fa-phone"></i>
                <abbr title="Phone">P</abbr>: (123) 456-7890</p>
            <p><i class="fa fa-envelope-o"></i>
                <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">name@example.com</a>
            </p>
            <p><i class="fa fa-clock-o"></i>
                <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
            <ul class="list-unstyled list-inline list-social-icons">
                <li>
                    <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
        <div class="col-md-8">
            <h3>Send us a Message</h3>
            <?php $this->load->helper('form');?>
            <?php $attributes = array('name' => 'sentMessage', 'id' => 'contactForm', 'novalidate' => 'novalidate'); ?>
            <?php echo form_open('Contact/send_mail', $attributes); ?>
                <div class="control-group form-group">
                    <div class="controls">
                        <?php echo form_label('Full Name:'); ?>
                        <?php echo form_input(array(
                            'type' => 'text',
                            'class' => 'form-control',
                            'id' => 'name',
                            'name' => 'name',
                            'value' => set_value('name'),
                            'required' => 'required',
                            'data-validation-required-message' => 'Please enter your name.')); ?>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <?php echo form_label('Phone Number:'); ?>
                        <?php echo form_input(array(
                            'type' => 'tel',
                            'class' => 'form-control',
                            'id' => 'phone',
                            'name' => 'phone',
                            'value' => set_value('phone'),
                            'required' => 'required',
                            'data-validation-required-message' => 'Please enter your phone number.')); ?>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <?php echo form_label('Email Address:'); ?>
                        <?php echo form_input(array(
                            'type' => 'email',
                            'class' => 'form-control',
                            'id' => 'email',
                            'name' => 'email',
                            'value' => set_value('email'),
                            'required' => 'required',
                            'data-validation-required-message' => 'Please enter your email address.')); ?>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <?php echo form_label('Message:'); ?>
                        <?php echo form_textarea(array(
                            'rows' => '10',
                            'cols' => '100',
                            'class' => 'form-control',
                            'id' => 'message',
                            'name' => 'message',
                            'value' => set_value('message'),
                            'required data-validation-required-message' => 'Please enter your message.',
                            'maxlength' => '999',
                            'style' => 'resize:none')); ?>
                    </div>
                </div>
                <div id="success"></div>
                <?php echo validation_errors(); ?>
                <?php if(isset($message)){ echo "<strong>".$message."</strong><br><br>"; } ?>

                <!-- For success/fail messages -->
                <?php echo form_submit(array('type' => 'submit', 'class' => 'btn btn-primary'),'Send Message'); ?>
            <?php echo form_close(); ?>
        </div>
    </div>
    <!-- /.row -->

    <hr>