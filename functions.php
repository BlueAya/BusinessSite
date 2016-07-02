<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
  /*--- Front Sidebar Widget ---*/
    register_sidebar( array(
        'name' => ('Front Sidebar Widget'),
        'id' => 'front-sidebar-widget',
        'description' => 'Widget for our sidebar on the front pages',
        'before_widget' => '<div class="widget-index-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
      ));

      /*--- Footer Left Widget ---*/
        register_sidebar( array(
            'name' => ('Footer Left Widget'),
            'id' => 'footer-left-widget',
            'description' => 'Widget for the left side of the footer',
            'before_widget' => '<div class="widget-footer-sidebar">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
          ));

          /*--- Footer Right Widget ---*/
            register_sidebar( array(
                'name' => ('Footer Right Widget'),
                'id' => 'footer-right-widget',
                'description' => 'Widget for the right side of the footer',
                'before_widget' => '<div class="widget-footer-sidebar">',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title' => '</h3>'
              ));
    }
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */
add_theme_support('menus');


/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' );



?>
