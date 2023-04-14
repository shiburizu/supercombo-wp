<?php
    $related = new WP_Query(
        array(
            'category__in'   => wp_get_post_categories( $post->ID ),
            'posts_per_page' => 3,
            'post__not_in'   => array( $post->ID )
        )
    );
?>
<div class="mb-2 pb-2">
<span class="text-light text-bold h4">More from <?php category_titles() ?></span>
</div>
<?php if( $related->have_posts() ) : while ( $related->have_posts() ) : $related->the_post(); ?>
<?php if ( has_post_thumbnail() ) : ?>
    <?php?>
    <article class="sc-article-box sc-rounded columns col-gapless">
        <div class="column col-7 col-xl-12 p-2 sc-rounded-left bg-dark">
            <div class="px-2 py-2 sc-article-box-title">
                <span>
                    <figure class="avatar avatar-sm mr-1" data-initial="SC" style="background-color: black;">
                        <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="...">
                    </figure>
                    <p class="text-small text-gray d-inline mb-1"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" class="text-bold"><?php the_author() ?></a> | <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?></p>
                </span>
                <h2 class="h3 my-2"><a class="text-light text-bold" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
            </div>
        </div>
        <a href="<?php the_permalink() ?>" class="column col-5 col-xl-12 sc-rounded-right sc-thumb-bg" style="background: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'large') ?>')">
        </a>
    </article>
<?php else : ?>
<article class="sc-article-box sc-rounded bg-dark p-2">
    <div class="px-2 py-2">
        <span>
            <figure class="avatar avatar-sm mr-1" data-initial="SC" style="background-color: black;">
                <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="...">
            </figure>
            <p class="text-small text-gray d-inline mb-1"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" class="text-bold"><?php the_author() ?></a> | <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?></p>
        </span>
        <h2 class="h3 my-2"><a class="text-light text-bold" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
    </div>
</article>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<?php endwhile; ?>
<?php endif; ?>