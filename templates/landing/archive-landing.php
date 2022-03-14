<div class="archive-landing">
    <div class="archive-info">
        <h1 class="info">
            <?php echo get_the_archive_title() ?>
            <?php if (!is_author()) {
                echo get_the_post_type_description();
            } ?>
        </h1>
        <div class="block-corner-deco">
            <span class="tl">❊</span>
            <span class="tr">❊</span>
            <span class="bl">❊</span>
            <span class="br">❊</span>
        </div>
        <div class="block-edge-deco arc">
            <span class="t"></span>
            <span class="r"></span>
            <span class="b"></span>
            <span class="l"></span>
        </div>
    </div>
</div>