<body <?php body_class('sc-bg'); ?>>
<?php get_header(); get_template_part( 'navbar' ); ?>
<div class="sc-body container sc-front-columns">
    <div class="columns">
        <div class="column col-lg-10 col-md-12 p-centered">
            <div class="bg-gray pt-1 px-2 sc-rounded" style="margin-bottom: 0.7rem;">
            <?php if ( !is_front_page() ) : ?>
            <h2 class="pt-2 mb-0 text-center text-bold"><?php echo get_archive_title(); ?></h2> 
            <?php else: ?>
            <h2 class="pt-2 mb-0 text-center text-bold">All Posts</h2> 
            <?php endif; ?>
            <?php echo bootstrap_pagination(); ?>
            </div>
            <?php get_template_part( 'front-boxes' ); ?>
            <div class="bg-gray px-2 sc-rounded">
            <?php echo bootstrap_pagination(); ?>
            </div>
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