<?php
get_header();

while (have_posts()) :
    the_post();

    include "classes/theme.php";

    get_template_part("templates/content/content-single");

    // if (comments_open() || get_comments_number()) {
    //     comments_template();
    // }

    the_post_navigation(
        array(
            "next_text" => "<span class='meta-nav'>下一篇：</span><span class='post-title'>%title</span>",
            "prev_text" => "<span class='meta-nav'>上一篇：</span><span class='post-title'>%title</span>",
        )
    );
endwhile;

get_footer();
