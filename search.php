<?php get_header(); ?>
<body <?php body_class('sc-bg'); ?>>
<?php get_template_part( 'navbar' ); ?>
<div class="sc-body container sc-front-columns">
    <div class="columns sc-archive">
        <div class="column col-lg-10 col-md-12">
            <div class="text-light">
            <div class="divider pb-2"></div>
            <h1 class="h2 text-bold">Search: <?php echo get_search_query(); ?></h1> 
            <div class="divider"></div>
            <?php echo bootstrap_pagination(); ?>
            </div>
            <?php get_template_part( 'front-boxes' ); ?>
            <div class="text-light">
            <?php echo bootstrap_pagination() ?>
            </div>
        </div>
        <div class="column col-4 col-md-12">
            <?php get_template_part( 'sidebar-top' ); ?>
            <?php get_template_part( 'front-events' ); ?>
            <?php get_template_part( 'front-streams' ); ?>
            <?php get_template_part( 'front-community' ); ?>
        </div>
    </div>
</div>
<?php get_footer();?>
</body>
</html>