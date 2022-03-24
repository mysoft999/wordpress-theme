<nav id="site-navigation">
    <div class="mobile-nav-icon" title="打开/关闭菜单"><i class="fa fa-navicon"></i></div>
    <?php
    wp_nav_menu(
        array(
            'theme_location'  => 'primary',
            'menu_class'      => 'menu-wrapper',
            'container_class' => 'primary-menu-container',
            'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
            'fallback_cb'     => false,
        )
    )
    ?>
</nav>