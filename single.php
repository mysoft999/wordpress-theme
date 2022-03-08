<?php
get_header();

while (have_posts()) :
    the_post();

    include "classes/theme.php";

    get_template_part("templates/content/content-single");

    // if (comments_open() || get_comments_number()) {
    //     comments_template();
    // }

    // the_post_navigation(
    //     array(
    //         "next_text" => "<p class='meta-nav'>next post</p><p class='post-title'>%title</p>",
    //         "prev_text" => "<p class='meta-nav'>pre post</p><p class='post-title'>%title</p>",
    //     )
    // );
    //echo get_the_post_navigation();
endwhile;

get_footer();
