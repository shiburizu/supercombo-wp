<?php $forum_feed = simplexml_load_file("https://forums.supercombo.gg/atom");
for ( $i = 0; $i < 10; $i++ ) : ?>
<div class="tile">
    <?php $post_time = esc_html( human_time_diff( strtotime(strval($forum_feed->entry[$i]->updated)), current_time('timestamp') ) ) . ' ago';
        if ( str_contains($post_time, 'min') or str_contains($post_time, 'second') ) {
            $post_time = "just now";
        }
    ?>
    <div class="tile-content mx-2">
        <a target="__blank" href="<?php echo $forum_feed->entry[$i]->id; ?>"class="tile-title mb-0"><?php echo $forum_feed->entry[$i]->title; ?></a>
        <p class="tile-subtitle text-gray mb-2">By <?php echo $forum_feed->entry[$i]->author->name; ?> <?php echo $post_time ?></p>
        <p class="mb-1 text-tiny" style="word-break: break-word;"><?php echo atom_excerpt(strval($forum_feed->entry[$i]->content)) ?></p>
    </div>
</div>
<?php if ( $i != 9 ) : ?>
<div class="divider"></div>
<?php endif; ?>
<?php endfor; ?>