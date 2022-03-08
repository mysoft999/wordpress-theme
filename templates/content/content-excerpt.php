<div class="post-item">
    <div class="post-item-wrap">
        <?php $has_thumbnail = has_post_thumbnail() ?>
        <div class="post-thumbnail">
            <div <?php if ($has_thumbnail) { ?>class="has-thumbnail" style="background-image:url(<?php the_post_thumbnail_url() ?>)" <?php } ?>>
                <div class="post-meta">
                    <div class="post-category">
                        <i class="fa fa-folder-o"></i><?php the_category() ?>
                    </div>
                    <div class="post-tag">
                        <i class="fa fa-tag"></i><?php the_tags("<ul><li>", "</li><li>", "</li></ul>") ?>
                    </div>
                    <div class="post-time">
                        <i class="fa fa-clock-o"></i><?php $time = get_the_time("Y-m-d"); ?><time datetime="<?php echo $time ?>">
                            <?php echo Theme::convert_date_string($time) ?>
                        </time>
                    </div>
                </div>
            </div>
        </div>
        <div class="post-title">
            <span>❊</span><a href="<?php the_permalink() ?>" target="_blank"><?php the_title() ?></a><span>❊</span>
        </div>
        <div class="post-excerpt">
            <?php the_excerpt() ?>
        </div>
    </div>
</div>