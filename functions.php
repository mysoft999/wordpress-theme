<?php
//add site css js
function wp_load_css_js()
{
    wp_enqueue_style("style", get_template_directory_uri() . "/style.css", null, null, "screen");
    wp_enqueue_style("font-awesome", get_template_directory_uri() . "/assets/includes/font-awesome-4.7.0/css/font-awesome.min.css", null, null, "screen");
    wp_enqueue_script("site-function", get_template_directory_uri() . "/assets/js/bundle.js", [], null, true);
}
add_action("wp_enqueue_scripts", "wp_load_css_js");
//remove unused default actions from wp_head hook
remove_action("wp_head", "wp_resource_hints", 2);
remove_action("wp_head", "feed_links", 2);
remove_action("wp_head", "feed_links_extra", 3);
remove_action("wp_head", "rsd_link");
remove_action("wp_head", "wlwmanifest_link");
remove_action("wp_head", "print_emoji_detection_script", 7);
remove_action("wp_head", "wp_shortlink_wp_head", 10);
//remove_action("wp_head", "wp_print_styles", 8);
remove_action("wp_head", "wp_print_head_scripts", 9);
remove_action("wp_head", "locale_stylesheet");
//remove_action("wp_head", "wp_custom_css_cb", 101);
remove_action("wp_head", "rest_output_link_wp_head", 10);
remove_action("wp_head", "index_rel_link");
remove_action("wp_head", "parent_post_rel_link", 10, 0);
remove_action("wp_head", "start_post_rel_link", 10, 0);
remove_action("wp_head", "adjacent_posts_rel_link_wp_head", 10, 0);
remove_action("wp_head", "wp_oembed_add_host_js");
remove_action("wp_head", "wp_oembed_add_discovery_links");
remove_action("wp_print_styles", "print_emoji_styles");
//remove unused styles
function remove_styles()
{
    wp_dequeue_style("global-styles");
}
add_action("wp_enqueue_scripts", "remove_styles", 100);

register_nav_menu("primary", "顶部导航菜单");

add_theme_support("custom-background");
add_theme_support("post-thumbnails");
add_theme_support("title-tag");
add_theme_support(
    'custom-logo',
    array(
        'height'               => 100,
        'width'                => 100,
        'flex-width'           => true,
        'flex-height'          => true,
        'unlink-homepage-logo' => true,
    )
);
