<nav role="navigation">

  <?php wp_nav_menu(array(
    'container' => 'div',                           // remove nav container
    'container_class' => 'menu',                 // class of container (should you choose to use it)
    'menu' => __( 'The Mobile Menu', 'guybrush' ),  // nav name
    'menu_class' => 'nav mobile-nav',               // adding custom nav class
    'theme_location' => 'mobile-nav',                 // where it's located in the theme
    'before' => '',                                 // before the menu
    'after' => '',                                  // after the menu
    'link_before' => '',                            // before each link
    'link_after' => '',                             // after each link
    'depth' => 0,                                   // limit the depth of the nav
    'fallback_cb' => ''                             // fallback function (if there is one)
  )); ?>

</nav>
