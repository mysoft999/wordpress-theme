<div class="breadcrumb-area">
    <div class="breadcrumb-nav">
        <a href="<?php echo esc_url(home_url("/")) ?>">
            <i class="fa fa-home"></i>首页</a><span><i class="fa fa-angle-right"></i></span><?php if (is_single()) { ?><?php the_category("<span><i class='fa fa-angle-right'></i></span>", "multiple");
        } elseif (is_category()) {
            echo get_category_parents($cat, true, "<span><i class='fa fa-angle-right'></i></span>");
        }
        ?>
    </div>
</div>