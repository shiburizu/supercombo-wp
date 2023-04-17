<?php $first = False; ?>
<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
$timelimit=1 * 86400; //days * seconds per day
$post_age = date('U') - get_post_time('U');
?>
<?php if ( has_post_thumbnail() and is_front_page() and $first == False and !is_paged() ) : ?>
    <div class="columns col-gapless bg-dark">
        <div class="column col-1 hide-md"></div>
        <div class="column col-6 col-lg-12">
            <article class="sc-article-box columns col-gapless mx-2">
                <div class="col-12 p-2 mx-2">
                    <div class="sc-article-box-title">
                    <h2 class="mt-2"><a class="text-light text-bold" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
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
        </div>
        <div class="column col-4 hide-lg">
            <div class="mx-2">
                <h2 class="text-bold">Top Stories</h2>
                <?php 
                    $results = $wpdb->get_results("SELECT * FROM `wp_koko_analytics_post_stats` WHERE `date` >= 'dateadd(day, -7, getdate())' AND `visitors` > 0 AND `pageviews` > 0"); 
                    echo var_dump($results);
                ?>
            </div>
        </div>
        <div class="column col-1 hide-md"></div>
    </div>
    <?php $first = True; ?>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>