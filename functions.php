<?php

register_sidebar(array(
    'name'              => 'home-sidebar',
    'before_widget'     => '<li id="%1$s" class="boxed widget %2$s">',
    'after_widget'      => '</li>',
    'before_title'      => '<h3 class="widgettitle">',
    'after_title'       => '</h3>',
));

?>
