<footer class="row">
    <div class="eight columns">
        <!-- <h3>Left Column</h3> -->
        <?php dynamic_sidebar('footer-left-widget') ?>
    </div>
    <div class="four columns">
        <!-- <h3>Right Column</h3> -->
        <?php dynamic_sidebar('footer-right-widget') ?>
    </div>

</footer>


</div> <!-- End Container -->
  <?php wp_footer(); ?>
  <script src="<?php echo esc_url( get_template_directory_uri() . '/js/jquery-3.1.0.min.js' ); ?>"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() . '/js/bootstrap.min.js' ); ?>"></script>
</body>
</html>
