<h2 class="pt-2 text-light text-bold">Top Stories</h2>
<div class="px-2 pb-2 mb-2">
<?php $featured = get_most_viewed_posts(); for ($i = 0; $i <= 4; $i++) : ?>
    <div class="columns sc-featured-border">
    <?php if (has_post_thumbnail($featured[$i])) : ?>
    <div class="p-2 col-9 d-flex" style="flex-direction: column; justify-content: center;"> 
        <h5 class="text-bold mb-0"><a class="text-light" href="<?php the_permalink($featured[$i]) ?>"><?php echo $featured[$i]->post_title; ?></a></h5>
        <span class="mt-1">
        <p class="text-gray d-inline mb-1"><a class="text-bold text-tiny" href="<?php echo get_author_posts_url( $featured[$i]->post_author ) ?>"><?php echo the_author_meta( 'display_name' , $featured[$i]->post_author ); ?></a><span class="text-tiny"> | <?php echo esc_html( human_time_diff( get_the_time('U', $featured[$i]), current_time('timestamp') ) ) . ' ago'; ?></span></p>
        </span>
    </div>
    <a href="<?php the_permalink($featured[$i]) ?>" class="column col-3 sc-thumb-top" style="background: url('<?php echo get_the_post_thumbnail_url($featured[$i]->ID,'medium') ?>')">   
    </a>
    </div>
    <?php else: ?>
    <div class="p-2 col-12 d-flex" style="flex-direction: column; justify-content: center;"> 
        <h5 class="text-bold mb-0"><a class="text-light" href="<?php the_permalink($featured[$i]) ?>"><?php echo $featured[$i]->post_title; ?></a></h5>
        <span class="mt-1">
        <p class="text-gray d-inline mb-1"><a class="text-bold text-tiny" href="<?php echo get_author_posts_url( $featured[$i]->post_author ) ?>"><?php echo the_author_meta( 'display_name' , $featured[$i]->post_author ); ?></a><span class="text-tiny"> | <?php echo get_the_date('',$featured[$i]) ?></span></p>
        </span>
    </div>
    </div>
    <?php endif; ?>
    <?php if ($i != 4) :?>
    <div class="divider"></div>
    <?php endif; ?>
<?php endfor; ?>
</div>