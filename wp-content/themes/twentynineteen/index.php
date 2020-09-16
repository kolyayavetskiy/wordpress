<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php
            wp_login_form(array(
                'echo' => true,
                'redirect' => "http://wordpress/list_of_users/",
                'form_id' => 'loginform',
                'label_username' => __('Username'),
                'label_password' => __('Password'),
                'label_remember' => __('Remember Me'),
                'label_log_in' => __('Log In'),
                'id_username' => 'user_login',
                'id_password' => 'user_pass',
                'id_remember' => 'rememberme',
                'id_submit' => 'wp-submit',
                'remember' => true,
                'value_username' => NULL,
                'value_remember' => false
            ));

            if (have_posts()) {

                // Load posts loop.
                while (have_posts()) {
                    the_post();
                    get_template_part('template-parts/content/content');
                }

                // Previous/next page navigation.
                twentynineteen_the_posts_navigation();

            } else {

                // If no content, include the "No posts found" template.
                get_template_part('template-parts/content/content', 'none');

            }
            ?>

        </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php
get_footer();
