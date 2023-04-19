<?php $first = False; ?>
<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
$timelimit=1 * 86400; //days * seconds per day
$post_age = date('U') - get_post_time('U');
?>
<?php if ( has_post_thumbnail() and is_front_page() and $first == False and !is_paged() ) : ?>
    <div class="columns bg-dark" style="align-items: center;">
        <div class="column col-7 col-lg-12">
            <article class="sc-article-box columns col-gapless">
                <div class="col-12 p-2 mx-2">
                    <div class="sc-article-box-title">
                    <h2 class="mt-2 mb-1"><a class="text-light text-bold" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                    <?php if ( has_excerpt() ) : ?>
                    <a class="text-light" href="<?php the_permalink() ?>"><?php echo get_the_excerpt() ?></a>
                    <?php endif; ?>
                    <span class="mt-2">
                        <figure class="avatar avatar-sm mr-1" data-initial="SC" style="background-color: black;">
                            <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="...">
                        </figure>
                        <?php if ($post_age < $timelimit) : ?>
                            <p class="text-small text-gray d-inline mb-1"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" class="text-bold"><?php the_author() ?></a> | <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?></p>
                        <?php else: ?>
                            <p class="text-small text-gray d-inline mb-1"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" class="text-bold"><?php the_author() ?></a> | <?php echo get_the_date() ?></p>
                        <?php endif; ?>
                    </span>
                    </div>
                </div>
                <a href="<?php the_permalink() ?>" class="column col-12 sc-thumb-bg-big" style="background: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'large') ?>')">
                </a>
            </article>
            <div class="divider pb-2"></div>
        </div>
        <div class="column col-5 col-lg-12">
            <h2 class="text-bold">Top Stories</h2>
            <div class="px-2">
            <?php $featured = get_most_viewed_posts(); for ($i = 0; $i <= 4; $i++) : ?>
                <div class="columns sc-featured-border">
                <?php if (has_post_thumbnail($featured[$i])) : ?>
                <div class="p-2 col-9 d-flex" style="flex-direction: column; justify-content: center;"> 
                    <h5 class="text-bold mb-0"><a class="text-light" href="<?php the_permalink($featured[$i]) ?>"><?php echo $featured[$i]->post_title; ?></a></h5>
                    <span class="mt-1">
                        <?php if ($post_age < $timelimit) : ?>
                            <p class="text-small text-gray d-inline mb-1"><a href="<?php echo get_author_posts_url( $featured[$i]->post_author ) ?>" class="text-bold"><?php echo the_author_meta( 'display_name' , $featured[$i]->post_author ); ?></a> | <?php echo esc_html( human_time_diff( get_the_time('U', $featured[$i]), current_time('timestamp') ) ) . ' ago'; ?></p>
                        <?php else: ?>
                            <p class="text-small text-gray d-inline mb-1"><a href="<?php echo get_author_posts_url( $featured[$i]->post_author ) ?>" class="text-bold"><?php echo the_author_meta( 'display_name' , $featured[$i]->post_author ); ?></a> | <?php echo get_the_date('',$featured[$i]) ?></p>
                        <?php endif; ?>
                    </span>
                </div>
                <a href="<?php the_permalink($featured[$i]) ?>" class="column col-3 sc-thumb-top" style="background: url('<?php echo get_the_post_thumbnail_url($featured[$i]->ID,'medium') ?>')">   
                </a>
                </div>
                <?php else: ?>
                <div class="p-2 col-12 d-flex" style="flex-direction: column; justify-content: center;"> 
                    <h5 class="text-bold mb-0"><a class="text-light" href="<?php the_permalink($featured[$i]) ?>"><?php echo $featured[$i]->post_title; ?></a></h5>
                    <span class="mt-1">
                        <?php if ($post_age < $timelimit) : ?>
                            <p class="text-gray d-inline mb-1"><a class="text-bold text-tiny" href="<?php echo get_author_posts_url( $featured[$i]->post_author ) ?>"><?php echo the_author_meta( 'display_name' , $featured[$i]->post_author ); ?></a><span class="text-tiny"> | <?php echo esc_html( human_time_diff( get_the_time('U', $featured[$i]), current_time('timestamp') ) ) . ' ago'; ?></span></p>
                        <?php else: ?>
                            <p class="text-gray d-inline mb-1"><a class="text-bold text-tiny" href="<?php echo get_author_posts_url( $featured[$i]->post_author ) ?>"><?php echo the_author_meta( 'display_name' , $featured[$i]->post_author ); ?></a><span class="text-tiny"> | <?php echo get_the_date('',$featured[$i]) ?></span></p>
                        <?php endif; ?>
                    </span>
                </div>
                </div>
                <?php endif; ?>
                <?php if ($i != 4) :?>
                <div class="divider"></div>
                <?php endif; ?>
            <?php endfor; ?>
            </div>
        </div>
    </div>
    <?php $first = True; ?>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>