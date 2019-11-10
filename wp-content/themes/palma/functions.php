<?php

if ( function_exists('register_sidebar') )
	register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '',
        'after_title' => '',
    ));


/* SET UP SLIDESHOW XML FILE OF PHOTOS REFRESHER */

register_activation_hook(__FILE__, 'activate_slideshow_updater');
add_action('update_slideshow_function', 'update_slideshow_event');

function activate_slideshow_updater() {
	wp_schedule_event(time(), 'hourly', 'update_slideshow_event');
}

function update_slideshow_function() {
	// do something every hour

         // test that this function is fired by sending me the date
         wp_mail(get_option('admin_email'), sprintf(__('[%s] Scheduled event on the hour'), get_option('blogname')), time());

}

/* END SLIDESHOW REFRESHER */

?>
