<?php $forum_feed = simplexml_load_file("https://forums.supercombo.gg/atom");
for ( $i = 0; $i < 10; $i++ ) : ?>
<div class="tile">
    <div class="tile-content mx-2">
        <a target="__blank" href="<?php echo $forum_feed->entry[$i]->id; ?>"class="tile-title mb-0"><?php echo $forum_feed->entry[$i]->title; ?></a>
        <p class="tile-subtitle text-gray mb-2">By <?php echo $forum_feed->entry[$i]->author->name; ?></p>
        <p class="mb-1 text-tiny" style="word-break: break-word;"><?php echo atom_excerpt(strval($forum_feed->entry[$i]->content)) ?></p>
    </div>
</div>
<?php if ( $i != 9 ) : ?>
<div class="divider"></div>
<?php endif; ?>
<?php endfor; ?>