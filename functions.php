<?php

register_sidebar(array(
    'name'              => 'home-sidebar',
    'before_widget'     => '<li id="%1$s" class="boxed widget %2$s">',
    'after_widget'      => '</li>',
    'before_title'      => '<h3 class="widgettitle">',
    'after_title'       => '</h3>',
));

if (function_exists('register_nav_menus')) {
    register_nav_menus(array(
        'bottom_header'     => 'Bottom (grey) header menu',
    ));
}

?>
