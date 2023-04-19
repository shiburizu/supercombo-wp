<div class="panel sc-panel bg-dark">
<div class="panel-header">
    <h4 class="panel-title text-center mb-0 text-bold">Streaming Now</h4>
</div>
<div class="panel-body mb-2">
<?php
$json = file_get_contents('https://supercombo.gg/wp-content/frontstreams.json');
$json = json_decode($json);
foreach($json as $key => $value): ?>
<div class="stream-box columns col-gapless">
    <div class="column col-6 col-xl-12 pb-2">
        <a target="__blank" href="https://twitch.tv/<?php echo $key ?>">
        <img src="<?php echo $value->thumb ?>" class="sc-rounded img-fit-contain img-responsive">
        </a>
    </div>
    <div class="column col-6 col-xl-12 px-2 pb-2">
        <span class="text-small text-bold"><a target="__blank" href="https://twitch.tv/<?php echo $key ?>"><?php echo $key ?></a></span><br>
        <span class="text-tiny text-bold"><?php echo $value->game ?></span><br>
    </div>
</div>
<span class="text-small text-tiny"><?php echo $value->title ?></span>
<div class="divider pb-2"></div>
<?php endforeach; ?>
</div>
</div>