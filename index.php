<!-- Begin Header -->
<?php get_header(); ?>
<!-- End Header -->

    <!-- Begin Section Container -->
    <section class="row">
      <div class="twelve columns">
          <!-- Begin Loop -->
          <?php
            if ( have_posts() ) {
              while ( have_posts() ) {
                the_post();
              } //end while
            } //end if
          ?>
          <!-- End Loop -->
      </div>
    </section>
    <!-- End Section Container -->

    <!-- Begin Footer -->
    <?php get_footer(); ?>
<!-- End Footer -->
