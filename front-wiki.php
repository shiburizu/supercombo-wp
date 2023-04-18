<?php $wiki_feed = simplexml_load_file("https://wiki.supercombo.gg/api.php?hidebots=1&urlversion=1&days=7&limit=20&action=feedrecentchanges&feedformat=atom");
for ( $w = 0; $w < 10; $w++ ) : ?>
<div class="tile">
    <?php $post_time = esc_html( human_time_diff( strtotime(strval($wiki_feed->entry[$w]->updated)), current_time('timestamp') ) ) . ' ago';
        if ( str_contains($post_time, 'min') or str_contains($post_time, 'second') ) {
            $post_time = "just now";
        }
    ?>
    <div class="tile-content mx-2">
        <a target="__blank" href="<?php echo $wiki_feed->entry[$w]->id; ?>"class="tile-title mb-0"><?php echo $wiki_feed->entry[$w]->title; ?></a>
        <p class="tile-subtitle text-gray mb-2">By <?php echo $wiki_feed->entry[$w]->author->name; ?> <?php echo 
        $post_time ?></p>
        <a target="__blank" href="<?php echo $wiki_feed->entry[$w]->id; ?>" class="mb-1 text-tiny text-light" style="word-break: break-word;"><?php echo atom_excerpt(strval($wiki_feed->entry[$w]->summary)) ?></a>
    </div>
</div>
<?php if ( $w != 9 ) : ?>
<div class="divider"></div>
<?php endif; ?>
<?php endfor; ?>