<div class="hide-sm">
<h2 class="text-bold text-light">Latest Videos</h2>
<div class="container">
<div class="columns">
<?php $yt_feed = simplexml_load_file("https://www.youtube.com/feeds/videos.xml?channel_id=UC2VN-QpZ49XvWBGiz97lvQA");
for ( $i = 0; $i < 4; $i++ ) : 
$url = $yt_feed->entry[$i]->link->attributes();
$videourl = explode("&amp;",$url['href']);
$video = str_replace("https://www.youtube.com/watch?v=","",$videourl[0]); ?>
<div class="column col-3">
    <div class="tile-content">
        <a target="__blank" class="text-no-hover" href="<?php echo $url['href'] ?>">
        <img loading="lazy" src="http://img.youtube.com/vi/<?php echo $video ?>/mqdefault.jpg" class="sc-rounded img-fit-contain img-responsive">
        <p class="mt-2 text-light text-small text-bold" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo $yt_feed->entry[$i]->title ?></p></a>
    </div>
</div>
<?php endfor; ?>
</div>
</div>
<div class="divider mt-0 mb-2"></div>
</div>