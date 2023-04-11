<body <?php body_class('sc-bg'); ?>>
<?php get_header(); get_template_part( 'navbar' ); ?>
<div class="sc-body container px-0">
    <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="card bg-gray mb-2 sc-article p-centered">
    <div class="card-image sc-banner">
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('front-thumb',['class' => 'img-responsive'])?></a>
    </div>
    <div class="card-header mb-2">
        <h2 class="card-title h1 mb-0"><a class="text-light" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <small class="card-subtitle text-gray">Posted on <?php echo get_the_date()?> by <?php the_author() ?></small><br>
        <div class="pt-2">
            <?php category_labels(); ?> <?php tag_labels(); ?>
        </div>
    </div>
    <div class="card-body">
        <?php the_content() ?>
    </div>
    </article>
    <?php endwhile; ?>
    <?php else : ?>
    <p>There's nothing here.</p>
    <?php endif; ?>
</div>
<?php get_footer();?>
</body>
</html>