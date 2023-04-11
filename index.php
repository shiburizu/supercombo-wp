<body <?php body_class('sc-bg'); ?>>
<?php get_header(); get_template_part( 'navbar' ); ?>
<div class="sc-body container">
    <div class="sc-page p-centered bg-dark py-1">   
    <div class="m-2 px-2 bg-gray">
        <?php echo bootstrap_pagination(); ?>
    </div>
    <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="columns bg-gray mx-2 py-2 mt-2" style="min-height: 185px;">
        <div class="column col-4 col-md-12">
            <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail('large',['class' => 'img-responsive'])?>
            <?php else: ?>
                <div class="bg-dark" style="display: block;">
                    <div class="sc-thumb-categories">
                        <div>
                            <?php category_labels(); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="column">
            <h2 class="mb-0"><a class="text-light" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
            <small class="text-gray">Posted on <?php echo get_the_date()?> by <?php the_author() ?></small>
            <p class="mb-1"><?php echo get_the_excerpt() ?></p>
        </div>
    </div>
    <?php endwhile; ?>
    <?php else : ?>
    <article>
        <p>There's nothing here.</p>
    </article>
    <?php endif; ?>
    <div class="m-2 px-2 bg-gray">
        <?php echo bootstrap_pagination(); ?>
    </div>
</div>
</div>
<?php get_footer();?>
</body>
</html>