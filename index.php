<!-- Begin Header -->
<?php get_header(); ?>
<!-- End Header -->

    <!-- Begin Section Container -->
    <button class="btn btn-default" type="button" name="button">Hello this is a test</button>
    <section>
      <div>
          <!-- Begin Loop -->
              <?php if ( have_posts() ) {
                  while ( have_posts() ) {
                    the_post(); ?>
                <div>
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
                  </div>

                    <?php
                    } //end while
                } //end if
              ?>
              <!-- End Loop -->
      </div>
      <div>
          <?php dynamic_sidebar('front-sidebar-widget'); ?>
      </div>
    </section>
    <!-- End Section Container -->

    <!-- Begin Footer -->
    <?php get_footer(); ?>
<!-- End Footer -->
