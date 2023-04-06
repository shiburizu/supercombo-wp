<article>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><a class="text-light" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('post-thumbnail',['class' => 'img-responsive'])?></a>
    <div class="pt-2">
        <?php the_excerpt() ?>
    </div>
    <div class="divider"></div>
<?php endwhile; ?>
<?php else : ?>
    <p>There's nothing here.</p>
<?php endif; ?>
</article>