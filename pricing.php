<?php
/*
Template Name: Pricing
*/
?>
<?php get_header(); ?>

<div class="container-fluid">
    <h2 id="abouttitle">Pricing</h2>
    <div class="container">
        <div class="firstpricingrow row">
            <div class="image col-sm-4">
                <h3>Oil Change</h3>
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/oilchange.png" alt="Oil Change" />

            </div>
            <div class="image col-sm-4">
                <h3>Brakes</h3>
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/brakes.png" alt="Brakes" />

            </div>
            <div class="image col-sm-4">
                <h3>Transmission</h3>
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/engine.png" alt="Engine" />

            </div>

        </div>

        <!-- 2nd Row of Pricing Images -->

        <div id="secondrow" class="pricingmargin row">
            <div class="image col-sm-4">
                <h3>Tires</h3>
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/tire.png" alt="Tire" />

            </div>
            <div class="image col-sm-4">
                <h3>Air Conditioning</h3>
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/ac.png" alt="AC" />

            </div>
            <div class="image col-sm-4">
                <h3>Electrical</h3>
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/electrical.png" alt="Electrical" />

            </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>
