<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<div class="container-fluid">
    <h2 id="abouttitle">Make an Appointment</h2>
    <div class="nopadding col-sm-6">
        <?php wd_form_maker(1); ?>
    </div>
    <div class="col-sm-6">
        <p class="contactpara">
            Slick's Auto Shop
            <br>
            5555 Circle Loop
            <br>
            Orlando, FL 55555
            <br>
            555-555-5555
        </p>
        <p class="contactpara contacttimepara">
            Monday: 9:00AM - 6:00PM
            <br>
            Tuesday: 9:00AM - 6:00PM
            <br>
            Wednesday: 9:00AM - 6:00PM
            <br>
            Thursday: 9:00AM - 6:00PM
            <br>
            Friday: 9:00AM - 6:00PM
            <br>
            Saturday: 9:00AM - 6:00PM
        </p>
        <iframe class="img-responsive map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56094.29090343581!2d-81.44866854014217!3d28.512861356981333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e77bbb64254d8b%3A0xa0d7216e12e08560!2sAutoZone!5e0!3m2!1sen!2sus!4v1469903399765" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>
<?php get_footer(); ?>
