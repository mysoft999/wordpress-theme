<?php $has_thumbnail = has_post_thumbnail() ?>
<div class="post-landing" <?php if ($has_thumbnail) { ?> style="background-image:url(<?php the_post_thumbnail_url() ?>)" <?php } ?>>
    <div class="post-info">
        <?php the_title("<h1>", "</h1>") ?>
        <div class="middle-separate-line">
            <div></div>
            <div>❊</div>
            <div></div>
        </div>
        <?php $time = get_the_time("Y-m-d"); ?>
        <time datetime="<?php echo $time ?>">
            <?php echo Theme::convert_date_string($time) ?>
        </time>
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