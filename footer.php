<footer class="site-footer">
    <div class="footer-wrap">
        <div class="copyright">
            <span>&copy;</span><span>2022</span><span><?php echo get_bloginfo("name") ?></span>
        </div>
        <div class="acknowledgements">
            <div class="ack-wp">
                <span>Powered By</span><a href="https://wordpress.org" target="_blank" title="WordPress是一款能让您建立出色网站、博客或应用程序的开源软件">WordPress</a>
            </div>
            <div class="ack-separate">❊</div>
            <div class="ack-theme">
                <a href="https://gitee.com/vbzxc/wordpress-theme" target="_blank" title="复古中国风WordPress主题">梦回长安</a><span>主题</span>
            </div>
        </div>
        <div class="extra-info">其余信息</div>
    </div>
</footer>

</div>
<!--site-wrap-->

<div id="back-to-top" class="hidden">
    <div><i class="fa fa-arrow-up"></i></div>
</div>
<div id="post-img-gallery" style="display: none;">
    <div class="gallery-close" title="退出画廊">
        <i class="fa fa-close"></i>
    </div>
    <div class="gallery-mover">
        <div class="icon" title="前一张"><i class="fa fa-chevron-left"></i></div>
    </div>
    <div class="gallery-content">
        <div class="current-img-index"></div>
        <div class="img-container" id="post-imgs-collection">
        </div>
        <div class="current-img-description"></div>
    </div>
    <div class="gallery-mover">
        <div class="icon" title="后一张"><i class="fa fa-chevron-right"></i></div>
    </div>
</div>
<div id="mask">
    <div id="popup-message">
        <div class="popup-title"></div>
        <div class="popup-wrap">
            <div class="message-body"></div>
            <div>
                <button class="button-has-bg">
                    <div class="button-body">确定</div>
                </button><button class="button-has-bg">
                    <div class="button-body">取消</div>
                </button>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>

</html>