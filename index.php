<?php get_header(); ?>
<body <?php body_class('sc-bg'); ?>>
<?php get_template_part( 'navbar' ); ?>
<div class="sc-body container">
    <div class="sc-featured">
    <?php get_template_part( 'front-featured' ); ?>
    </div>
    <?php if (is_home()) : ?>
    <h2 class="text-bold text-light">Latest Stories</h2>
    <?php endif; ?>
    <div class="columns bg-dark sc-front-columns">
        <div class="column col-8 col-md-12 sc-posts mb-2 pb-2" id="sc-posts">
            <?php get_template_part( 'front-boxes' ); ?>
            <?php echo get_next_posts_link('<div class="bg-primary p-2 sc-rounded text-large text-center text-bold">More Stories</div>') ?>
        </div>
        <div class="column col-4 col-md-12">
            <?php get_template_part( 'front-events' ); ?>
            <?php get_template_part( 'front-streams' ); ?>
            <?php get_template_part( 'front-community' ); ?>
        </div>
    </div>
</div>
<?php get_footer();?>
</body>
</html>