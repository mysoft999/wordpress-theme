<?php

$blog_info = get_bloginfo("name");

?>
<div class="site-branding">
    <div class="site-logo">
        <img src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>">
    </div><div class="site-title">
        <h1>
            <a href="<?php echo esc_url(home_url('/')) ?>">
                <?php echo esc_html($blog_info) ?>
            </a>
        </h1>
    </div>
</div>