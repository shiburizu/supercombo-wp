<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if ( has_post_thumbnail() ) : ?>
<div class="sc-article-box sc-rounded columns col-gapless">
    <div class="column col-7 col-xl-12 p-2 sc-rounded-left bg-dark">
        <div class="px-2 py-2 sc-article-box-title">
            <h2 class="h3 mb-2"><a class="text-light text-bold" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
            <span><?php category_labels(); ?><p class="text-small text-gray d-inline mx-2">Posted on <?php echo get_the_date()?> by <?php the_author() ?></p></span>
            <div class="mt-2">
                <a class="text-light" href="<?php the_permalink() ?>"><?php echo get_the_excerpt() ?></a>
            </div>
        </div>
    </div>
    <a href="<?php the_permalink() ?>" class="column col-5 col-xl-12 sc-rounded-right sc-thumb-bg" style="background: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'large') ?>')">
    </a>
</div>
<?php else : ?>
<div class="sc-article-box sc-rounded bg-dark p-2">
    <div class="px-2 py-2">
        <h2 class="h3 mb-2"><a class="text-light text-bold" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <span><?php category_labels(); ?><p class="text-small text-gray d-inline mx-2">Posted on <?php echo get_the_date()?> by <?php the_author() ?></p></span>
        <div class="mt-2 text-light">
            <?php if ( wcount() >= 250 ) : ?>
            <p><?php echo get_the_excerpt() ?></p>
            <?php else : ?>
            <?php echo the_content() ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php else : ?>
<div>
    <p>There's nothing here.</p>
</div>
<?php endif; ?>