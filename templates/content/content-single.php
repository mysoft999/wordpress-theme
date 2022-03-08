<?php get_template_part("templates/landing/post-landing") ?>

<div id="primary">
    <div class="primary-mask-top">
        <div></div>
    </div>
    <?php
    get_template_part("templates/sidebar/sidebar-left"); ?>
    <div class="site-content">
        <?php get_template_part("templates/breadcrumb/breadcrumb") ?>
        <main>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-content">
                    <?php
                    the_content();
                    ?>
                </div>
            </article>
        </main>
    </div>
    <?php
    get_template_part("templates/sidebar/sidebar-right");
    ?>
</div>