<?php get_header(); ?>
<body <?php body_class('sc-bg'); ?>>
<?php get_template_part( 'navbar' ); ?>
<div class="sc-body container">
    <?php get_template_part( 'front-ambox' ); ?>
    <div class="sc-featured">
    <?php get_template_part( 'front-featured' ); ?>
    </div>
    <?php if (is_home()) : ?>
    <?php get_template_part( 'front-youtube' ); ?>
    <?php endif; ?>
    <h2 class="pt-2 text-bold text-light">Latest Stories</h2>
    <div class="columns bg-dark sc-front-columns">
        <div class="column col-8 col-lg-12 sc-posts mb-2 pb-2" id="sc-posts">
            <?php get_template_part( 'front-boxes' ); ?>
            <?php echo get_next_posts_link('<div class="bg-primary p-2 sc-rounded text-large text-center text-bold">More Stories</div>') ?>
        </div>
        <div class="column col-4 col-lg-12">
            <?php get_template_part( 'front-radio-player' ); ?>
            <?php get_template_part( 'front-bsky' ); ?>
            <div style="margin: 0.8rem 0rem;"><div id="sidebar-banner-1"></div></div>
            <?php get_template_part( 'front-streams' ); ?>
            <?php get_template_part( 'front-community' ); ?>
            <div style="margin: 0.8rem 0rem;"><div id="sidebar-banner-2"></div></div>
            <?php get_template_part( 'front-youtube-sidebar' ); ?>
            <div style="margin: 0.8rem 0rem;"><div id="sidebar-banner-3"></div></div>
        </div>
    </div>
</div>
<?php get_footer();?>
</body>
</html>