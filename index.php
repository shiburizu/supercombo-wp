<body <?php body_class('sc-bg'); ?>>
<?php get_header(); get_template_part( 'navbar' ); ?>
<div class="sc-body container">
    <div class="sc-featured">
    <?php get_template_part( 'front-featured' ); ?>
    </div>
    <h2 class="text-light text-bold">Latest Stories</h2>
    <div class="columns bg-dark sc-front-columns">
        <div class="column col-8 col-md-12 sc-posts" id="sc-posts">
            <?php get_template_part( 'front-boxes' ); ?>
            <div class="bg-gray px-2 sc-rounded">
            <?php echo bootstrap_pagination(); ?>
            </div>
        </div>
        <div class="column col-4 hide-md">
            <?php get_template_part( 'front-events' ); ?>
            <?php get_template_part( 'front-streams' ); ?>
            <?php get_template_part( 'front-community' ); ?>
        </div>
    </div>
</div>
<?php get_footer();?>
</body>
</html>