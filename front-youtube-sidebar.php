<div class="panel sc-panel bg-dark">
<div class="panel-header pb-2 px-0" style="border-bottom: 1px solid #2c2c2c;">
    <h4 class="panel-title text-center mb-2 text-bold "><a target="_blank" class="text-light" href="https://youtube.com/@SuperComboGG">@SuperComboGG on YouTube <span class="hide-lg mx-2 text-light fab fa-youtube"></span></a></h4>
</div>
<div class="panel-body pt-2 mt-2">
<?php $yt_feed = simplexml_load_file("https://www.youtube.com/feeds/videos.xml?channel_id=UC2VN-QpZ49XvWBGiz97lvQA");
for ( $i = 0; $i < 4; $i++ ) : 
$url = $yt_feed->entry[$i]->link->attributes();
$videourl = explode("&amp;",$url['href']);
$video = str_replace("https://www.youtube.com/watch?v=","",$videourl[0]); ?>
<div class="tile-content">
    <a target="__blank" class="text-no-hover" href="<?php echo $url['href'] ?>">
    <img loading="lazy" src="http://img.youtube.com/vi/<?php echo $video ?>/maxresdefault.jpg" class="sc-rounded img-fit-contain img-responsive">
    <p class="mt-2 text-light text-small text-bold"><?php echo $yt_feed->entry[$i]->title ?></p></a>
</div>
<?php endfor; ?>
</div>
</div>