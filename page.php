<?php get_header(); ?>
<body <?php body_class('sc-bg'); ?>>
<?php get_template_part( 'navbar' ); ?>
<div class="sc-body container sc-front-columns">
    <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="sc-article p-centered">
        <div class="card bg-dark sc-article-body p-centered">
            <div class="card-header px-0 pb-2 mb-2">
                <h1 class="h2 mb-2 pb-2 text-center"><a class="text-light text-bold" href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
                <?php if ( wcount() >= 150 ) : ?>
                    <?php if ( has_post_thumbnail() ) : ?>
                    <div class="sc-post-thumb sc-rounded" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'post-thumb') ?>')"></div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="card-body <?php if (wcount() < 150) : echo "sc-rounded"; else: echo "p-0"; endif;?>">
                <?php the_content() ?>
                    <?php if ( wcount() < 150 ): ?>
                        <div class="divider"></div>
                    <?php endif; ?>
            </div>
            <div class="card-footer px-0">
            </div>
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