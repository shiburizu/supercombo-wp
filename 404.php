<body <?php body_class('sc-bg'); ?>>
<?php get_header(); get_template_part( 'navbar' ); ?>
<div class="sc-body container sc-front-columns">
    <div class="columns">
        <div class="column col-lg-10 col-md-12 p-centered">
            <h1 class="pt-2 text-center text-bold text-light">404 Not Found</h2> 
            <?php get_template_part( 'front-boxes' ); ?>
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