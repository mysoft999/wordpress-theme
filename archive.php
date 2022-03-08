<?php
get_header();

get_template_part("templates/landing/archive-landing");

?>
<div id="primary">
    <div class="primary-mask-top">
        <div></div>
    </div>
    <?php
    get_template_part("templates/sidebar/sidebar-left"); ?>
    <div class="site-content">
        <?php get_template_part("templates/breadcrumb/breadcrumb") ?>
        <main>
            <div class="post-list">
                <?php
                if (have_posts()) {
                    include "classes/theme.php";
                    while (have_posts()) {
                        the_post();
                        get_template_part("templates/content/content-excerpt");
                    }
                }
                ?>
            </div>
        </main>
    </div>
    <?php
    get_template_part("templates/sidebar/sidebar-right");
    ?>
</div>
<?php get_footer() ?>