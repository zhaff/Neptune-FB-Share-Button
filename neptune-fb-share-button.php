<?php
/**
 * Plugin Name: Neptune FB Share Button
 * Plugin URI: http://www.neptunescripts.com
 * Description: Add FB Share Button to the end of every posts and pages.
 * Version: 1.0
 * Author: Neptune Scripts
 * Author URI: http://www.neptunescripts.com
 * License: GPL2+
 */
if (!defined('ABSPATH')) {
    exit;
}

add_filter('the_content', 'nscom_add_fb_button');

function nscom_add_fb_button($content)
{
    global $post;

    $layout = get_option('nscom_layout');
    $size = get_option('nscom_size');

    $content = $content . ('<br /><div class="fb-share-button" data-href="' . get_permalink($post->ID) . '" data-layout="' . $layout . '" data-size="' . $size . '" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>');

    return $content;
}
add_filter('wp_head', 'nscom_add_header');

function nscom_add_header()
{
    ?>
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=189027251153531";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <?php
}
add_action('admin_menu', 'nscom_admin_options');

function nscom_admin_options()
{
    add_menu_page('FB Options', 'FB Options', 'manage_options', 'nsfb_options', 'nscom_save_options', 'dashicons-admin-generic', '25.2');
}

function nscom_save_options()
{
    $success = false;

    if (isset($_POST['layout'])) {
        update_option('nscom_layout', $_POST['layout']);
        $success = true;
    }

    if (isset($_POST['size'])) {
        update_option('nscom_size', $_POST['size']);
        $success = true;
    }

    $layout = stripslashes(get_option('nscom_layout'));
    $size = stripslashes(get_option('nscom_size'));

    require_once ( plugin_dir_path(__FILE__) . 'admin_form.php');
}
