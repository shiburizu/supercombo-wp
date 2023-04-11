<?php  while ( have_posts() ) : the_post(); ?>
<?php if ( has_post_thumbnail() ) : ?>
<div class="sc-article-box columns col-gapless" onclick="location.href = '<?php the_permalink() ?>';">
    <div class="column col-8 col-md-12 p-2 sc-highlight sc-rounded-left bg-gray">
        <div class="px-2 py-2 sc-article-box-title">
            <h2 class="h3 mb-2"><?php the_title() ?></h2>
            <span><?php category_labels(); ?><p class="text-small text-gray d-inline mx-2">Posted on <?php echo get_the_date()?> by <?php the_author() ?></p></span>
            <p class="mt-2 mb-1"><?php echo get_the_excerpt() ?></p>
        </div>
    </div>
    <div class="column col-4 col-md-12 sc-rounded-right sc-thumb-bg" style="background: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'large') ?>')">
    </div>
</div>
<?php else : ?>
<div class="sc-article-box sc-highlight sc-rounded bg-gray p-2" onclick="location.href = '<?php the_permalink() ?>';">
    <div class="px-2 pt-2">
        <h2 class="h3 mb-2"><?php the_title() ?></h2>
        <span><?php category_labels(); ?><p class="text-small text-gray d-inline mx-2">Posted on <?php echo get_the_date()?> by <?php the_author() ?></p></span>
        <div class="inline-post mt-2 mb-1">
            <?php the_content() ?>
        </div>
    </div>
</div>
<?php endif; ?>
<?php endwhile; ?>