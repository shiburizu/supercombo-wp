<body <?php body_class('sc-bg'); ?>>
<?php get_header(); get_template_part( 'navbar' ); ?>
<div class="sc-body container">
    <header class="navbar subnav hide-lg mb-2">
        <section class="navbar-section text-bold text-large">
            <?php menu_output('category-menu') ?>  
        </section>
        <section class="navbar-section">
            <?php get_search_form(); ?>
        </section>
    </header>
    <div class="columns bg-dark sc-front-columns">
        <div class="column col-8 col-md-12 sc-posts" id="sc-posts">
            <?php get_template_part( 'front-boxes' ); ?>
            <div class="bg-gray px-2 sc-rounded">
            <?php echo bootstrap_pagination(); ?>
            </div>
        </div>
        <div class="column col-4 hide-md">  
            <?php get_template_part( 'front-streams' ); ?>
            <?php get_template_part( 'front-events' ); ?>
            <?php get_template_part( 'front-community' ); ?>
        </div>
    </div>
</div>
<?php get_footer();?>
</body>
</html>