<aside class="site-sidebar-right">
    <div class="sidebar-top button-has-bg">
        <div class="button-body">侧边栏2</div>
    </div>
    <div class="sidebar-body" id="widget-mount-right">
        <div class="sidebar-item post-catalogues">
            <div>
                <div class="sidebar-item-title">分类</div>
                <div class="sidebar-item-body">
                    <?php wp_list_categories(array(
                        "title_li" => "",
                        "show_count" => 1,
                    )) ?>
                </div>
            </div>
        </div>
        <div class="sidebar-item post-tag-cloud">
            <div>
                <div class="sidebar-item-title">标签云</div>
                <div class="sidebar-item-body">
                    <?php wp_tag_cloud(array(
                        "show_count" => 1,
                        "smallest" => 0.6,
                        "largest" => 1.2,
                        "unit" => "rem"
                    )) ?>
                </div>
            </div>
        </div>
        <div class="sidebar-item post-calendar">
            <div>
                <div class="sidebar-item-title">日历</div>
                <div class="sidebar-item-body">
                    <?php get_calendar() ?>
                </div>
            </div>
        </div>
    </div>
</aside>