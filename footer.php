<footer class="container-fluid">
    555 Circle Loop | Orlando, FL 555555 | 555-555-5555

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
  <script type="text/javascript">
      $( ".imghover" ).hover(
          function() {
              $(".hidden").removeClass("hidden").addClass("textover" );
              }, function() {
              $( ".textover" ).removeClass( "textover" ).addClass("hidden");
          }
      );
  </script>
  <script src="<?php echo esc_url( get_template_directory_uri() . '/js/bootstrap.min.js' ); ?>"></script>
</body>
</html>
