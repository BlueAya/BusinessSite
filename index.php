<!-- Begin Header -->
<?php get_header(); ?>
<!-- End Header -->
<?php echo do_shortcode( '[responsive_slider]' ); ?>

    <!-- Begin Section Container -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <h2><span class="glyphicon glyphicon-asterisk" style="color: #F68657"></span>Technology</h2>
                <p>Our shop is kept up to date with the latest technology so we can better serve you and your vehicle</p>
            </div>
            <div class="col-sm-6 col-md-4">
                <h2><span class="glyphicon glyphicon-asterisk" style="color: #F68657"></span>Certified</h2>
                <p>Here at Slick's, all of our mechanics are up to date on certifications.</p>
            </div>
            <div class="clearfix visible-sm-block">

            </div>
            <div class="col-sm-6 col-md-4">
                <h2><span class="glyphicon glyphicon-asterisk" style="color: #F68657"></span>Customer Service</h2>
                <p>We dedicate our time to you, the customer, and making sure you're satisfied.</p>
            </div>

            <div class="col-sm-6 col-md-4">
                <h2><span class="glyphicon glyphicon-asterisk" style="color: #F68657"></span>Prices</h2>
                <p>Rest assured knowing that we strive to offer competitive prices year round.</p>
            </div>
            <div class="col-sm-6 col-md-4">
                <h2><span class="glyphicon glyphicon-asterisk" style="color: #F68657"></span>Warranty</h2>
                <p>We give you peace of mind with warranties on all of our services offered.</p>
            </div>
            <div class="col-sm-6 col-md-4">
                <h2><span class="glyphicon glyphicon-asterisk" style="color: #F68657"></span>Free Diagnostics</h2>
                <p>All services are accompanied with a free full diagnostic test of your vehicle.</p>
            </div>
        </div>

            <!-- Begin Loop -->
                <!-- <?php if ( have_posts() ) {
                    while ( have_posts() ) {
                      the_post(); ?> -->
                  <!-- <div>
                      <div class="index-thumbnail">
                      <?php if ( has_post_thumbnail() ) { ?>
                                <?php the_post_thumbnail('thumbnail'); ?>
                            <?php }
                      ?>
                    </div>
                        <div>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                    </div> -->

                      <?php
                      } //end while
                  } //end if
                ?>
                <!-- End Loop -->
      <!-- <div>
          <?php dynamic_sidebar('front-sidebar-widget'); ?>
      </div> -->
    </div class="container">
    <!-- End Section Container -->

    <!-- Begin Footer -->
    <?php get_footer(); ?>
<!-- End Footer -->
