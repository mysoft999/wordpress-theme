<aside class="site-sidebar-left">
    <div class="sidebar-top button-has-bg">
        <div class="button-body">侧边栏1</div>
    </div>
    <div class="sidebar-body" id="widget-mount-left">
        <div class="sidebar-item recent-posts">
            <div class="sidebar-item-title">最近发布</div>
            <div class="sidebar-item-body">
                <ul>
                    <?php
                    $recent_posts = wp_get_recent_posts(array("post_status" => "publish"));
                    foreach ($recent_posts as $p) {
                        echo "<li><a href='" . get_permalink($p["ID"]) . "' target='_blank'>" . $p["post_title"] . "</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="sidebar-item monthly-archives">
            <div class="sidebar-item-title">每月归档</div>
            <div class="sidebar-item-body">
                <ul>
                    <?php wp_get_archives(array("show_post_count" => true)) ?>
                </ul>
            </div>
        </div>
    </div>
</aside>