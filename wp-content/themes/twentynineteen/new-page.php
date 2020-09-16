<?php
/**
 * Template Name: update-page
 */
get_header();

if (is_user_logged_in())
    echo do_shortcode('[input_data]');
else
    echo "<a id='no_login' href='http://wordpress/'>Пройдіть авторизацію</a>";

    get_footer();
?>

