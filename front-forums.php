<?php $forum_feed = simplexml_load_file("https://forums.supercombo.gg/atom");
for ( $i = 0; $i < 9; $i++ ) : ?>
<div class="tile sc-rounded my-2">
    <div class="tile-content p-2">
        <p class="tile-title mb-0"><?php echo $forum_feed->entry[$i]->title; ?></p>
        <p class="tile-subtitle text-gray mb-2"><?php echo $forum_feed->entry[$i]->author->name; ?></p>
        <p class="tile-subtitle mb-1" style="word-break: break-word;"><?php echo atom_excerpt(strval($forum_feed->entry[$i]->content)) ?></p>
    </div>
</div>
<?php endfor; ?>
