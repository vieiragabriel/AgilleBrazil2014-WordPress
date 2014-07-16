<?php
/**
 * Created by PhpStorm.
 * User: gabrielvieira
 * Date: 15/07/14
 * Time: 23:05
 */
function ab2014_widgets_init() {

    register_sidebar( array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'ab2014_widgets_init' );

?>