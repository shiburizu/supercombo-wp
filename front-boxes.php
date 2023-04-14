<?php $i = 1; ?>
<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
$timelimit=1 * 86400; //days * seconds per day
$post_age = date('U') - get_post_time('U');
?>
<?php if ( has_post_thumbnail() ) : ?>
    <?php if ( is_front_page() and $i == 1 and !is_paged() ) :?>
    <article class="sc-article-box sc-rounded columns col-gapless">
        <div class="column col-12 p-2 sc-rounded-bottom bg-dark">
            <div class="px-2 py-2 sc-article-box-title">
                <span>
                    <figure class="avatar avatar-sm mr-1" data-initial="SC" style="background-color: black;">
                        <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="...">
                    </figure>
                    <?php if ($post_age < $timelimit) : ?>
                        <p class="text-small text-gray d-inline mb-1"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" class="text-bold"><?php the_author() ?></a> | <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?></p>
                    <?php else: ?>
                        <p class="text-small text-gray d-inline mb-1"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" class="text-bold"><?php the_author() ?></a> | <?php echo get_the_date() ?></p>
                    <?php endif; ?>
                </span>
                <h2 class="h3 my-2"><a class="text-light text-bold" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                <span class="text-gray"><?php category_labels(); ?></span>
                <?php if ( has_excerpt() ) : ?>
                <div class="mt-2">
                    <a class="text-light" href="<?php the_permalink() ?>"><?php echo get_the_excerpt() ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <a href="<?php the_permalink() ?>" class="column col-12 sc-rounded-top sc-thumb-bg-big" style="background: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'large') ?>')">
        </a>
    </article>
    <?php $i++; ?>
    <?php else : ?>
    <article class="sc-article-box sc-rounded columns col-gapless">
        <div class="column col-7 col-xl-12 p-2 sc-rounded-left bg-dark">
            <div class="px-2 py-2 sc-article-box-title">
                <span>
                    <figure class="avatar avatar-sm mr-1" data-initial="SC" style="background-color: black;">
                        <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="...">
                    </figure>
                    <?php if ($post_age < $timelimit) : ?>
                        <p class="text-small text-gray d-inline mb-1"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" class="text-bold"><?php the_author() ?></a> | <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?></p>
                    <?php else: ?>
                        <p class="text-small text-gray d-inline mb-1"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" class="text-bold"><?php the_author() ?></a> | <?php echo get_the_date() ?></p>
                    <?php endif; ?>
                </span>
                <h2 class="h3 my-2"><a class="text-light text-bold" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                <span class="text-gray"><?php category_labels(); ?></span>
                <?php if ( has_excerpt() ) : ?>
                <div class="mt-2">
                    <a class="text-light" href="<?php the_permalink() ?>"><?php echo get_the_excerpt() ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <a href="<?php the_permalink() ?>" class="column col-5 col-xl-12 sc-rounded-right sc-thumb-bg" style="background: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'large') ?>')">
        </a>
    </article>
    <?php endif; ?>
<?php else : ?>
<article class="sc-article-box sc-rounded bg-dark p-2">
    <div class="px-2 py-2">
        <span>
            <figure class="avatar avatar-sm mr-1" data-initial="SC" style="background-color: black;">
                <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="...">
            </figure>
            <?php if ($post_age < $timelimit) : ?>
                <p class="text-small text-gray d-inline mb-1"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" class="text-bold"><?php the_author() ?></a> | <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?></p>
            <?php else: ?>
                <p class="text-small text-gray d-inline mb-1"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" class="text-bold"><?php the_author() ?></a> | <?php echo get_the_date() ?></p>
            <?php endif; ?>
        </span>
        <h2 class="h3 my-2"><a class="text-light text-bold" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <span class="text-gray"><?php category_labels(); ?></span>
        <div class="mt-2 text-light">
            <?php if ( wcount() >= 250 and has_excerpt() ) : ?>
            <a  class="text-light" href="<?php the_permalink() ?>"><?php echo get_the_excerpt() ?></a>
            <?php else : ?>
            <?php the_content() ?>
            <?php endif; ?>
        </div>
    </div>
</article>
<?php endif; ?>
<?php endwhile; ?>
<?php else : ?>
<div>
    <p>There's nothing here.</p>
</div>
<?php endif; ?>