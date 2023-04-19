<?php if ( is_user_logged_in() ) : ?>
<div class="panel sc-panel bg-dark">
<div class="panel-header">
    <h4 class="panel-title text-center mb-0 text-bold">FGC Streaming</h4>
</div>
<div class="panel-body mb-2">
    <div class="stream-box mb-2 columns col-gapless">
        <div class="column col-4 col-xl-12">
            <img src="<?php echo get_template_directory_uri() . '/images/thumb.jpg' ?>" class="sc-rounded img-fit-contain img-responsive">
        </div>
        <div class="column col-8 col-xl-12 p-2">
            <span class="text-tiny"><b>Streamer - Game</b></span><br>
            <span class="text-small">Stream Title</span>
            <div class="divider py-0"></div>
        </div>
    </div>
    <div class="stream-box mb-2 columns col-gapless">
        <div class="column col-4 col-xl-12">
            <img src="<?php echo get_template_directory_uri() . '/images/thumb.jpg' ?>" class="sc-rounded img-fit-contain img-responsive">
        </div>
        <div class="column col-8 col-xl-12 p-2">
            <span class="text-tiny"><b>Povertycast - Game</b></span><br>
            <span class="text-small">Stream Title</span>
            <div class="divider py-0"></div>
        </div>
    </div>
</div>
</div>
<?php endif; ?>