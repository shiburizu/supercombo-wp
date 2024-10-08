<?php get_header(); ?>
<body <?php body_class('sc-bg'); ?>>
<?php get_template_part( 'navbar' ); ?>
<div class="sc-body container sc-front-columns">
    <div class="columns sc-archive">
        <div class="column col-lg-12 p-centered">
            <div class="text-light">
            <?php if ( !is_front_page() ) : ?>
            <h1 class="h2 text-bold"><?php echo get_the_archive_title() ?></h1>
            <p><?php the_archive_description() ?></p>
            <?php else: ?>
            <h1 class="h2 pt-2 text-bold">All Posts</h2>
            <?php endif; ?>
            <?php echo bootstrap_pagination(); ?>
            <?php get_template_part( 'front-boxes' ); ?>
            <?php echo bootstrap_pagination() ?>
            </div>
        </div>
        <div class="column col-4 col-lg-12">
            <?php get_template_part( 'front-radio-player' ); ?>
            <?php get_template_part( 'front-bsky' ); ?>
            <?php get_template_part( 'front-streams' ); ?>
            <?php get_template_part( 'front-community' ); ?>
            <?php get_template_part( 'front-youtube-sidebar' ); ?>
        </div>
    </div>
</div>
<?php get_footer();?>
</body>
</html>