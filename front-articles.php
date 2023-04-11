<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="card bg-gray sc-article p-centered">
    <?php if ( has_post_thumbnail() ) : ?>
    <div class="card-image">
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('front-thumb',['class' => 'img-responsive'])?></a>
    </div>
    <div class="card-header">
        <h2 class="text-bold card-title mt-2 mb-0"><a class="text-light" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <small class="card-subtitle text-gray">Posted on <?php echo get_the_date()?> by <?php the_author() ?></small>
    </div>
    <div class="card-body">
        <?php the_excerpt() ?>
    </div>
    <?php else : ?>
    <div class="card-header">
        <h2 class="text-bold card-title mt-2 mb-0"><a class="text-light" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <small class="card-subtitle text-gray">Posted on <?php echo get_the_date()?> by <?php the_author() ?></small>
    </div>
    <div class="card-body">
        <?php the_content() ?>
    </div>
    <?php endif; ?>
</div>
<?php endwhile; ?>
<?php else : ?>
<article>
    <p>There's nothing here.</p>
</article>
<?php endif; ?>
<div class="bg-gray px-2">
<?php echo bootstrap_pagination(); ?>
</div>