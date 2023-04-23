<div class="panel sc-panel bg-dark">
<div class="panel-header pb-2 px-0">
    <h4 class="panel-title text-center mb-2 text-bold">Streaming Now</h4>
</div>
<div class="panel-body mb-2 px-0">
<?php
$json = file_get_contents('https://supercombo.gg/wp-content/frontstreams.json');
$json = json_decode($json);
foreach($json as $key => $value): ?>
<div class="divider my-0"></div>
<div class="stream-box columns col-gapless p-2" style="overflow-x: hidden;">
    <div class="column col-6 col-xl-12 p-2">
        <a target="__blank" href="https://twitch.tv/<?php echo $key ?>">
        <img loading="lazy" src="<?php echo $value->thumb ?>" class="sc-rounded img-fit-contain img-responsive">
        </a>
    </div>
    <div class="column col-6 col-xl-12 px-2">
        <span class="text-tiny text-bold"><a target="__blank" href="https://twitch.tv/<?php echo $key ?>"><?php echo $key ?></a></span><br>
        <span class="text-tiny text-bold"><?php echo $value->game ?></span><br>
        <p class="text-small text-tiny mb-2"><?php echo $value->title ?></p>
    </div>
</div>
<?php endforeach; ?>
</div>
</div>