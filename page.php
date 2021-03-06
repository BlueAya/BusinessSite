<?php get_header(); ?>

<!-- Begin Section Container -->
<div class="container-fluid">
      <div class="container">
            <!-- Begin Loop -->
            <?php
              if ( have_posts() ) {
                while ( have_posts() ) {
                  the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                  <?php
                  } //end while
              } //end if
            ?>
            <!-- End Loop -->
        </div>

      <div class="four columns">
        <?php get_sidebar(); ?>
      </div>

  </div>
<!-- End Section Container -->
<?php get_footer(); ?>
