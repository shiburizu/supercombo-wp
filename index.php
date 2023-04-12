<body <?php body_class('sc-bg'); ?>>
<?php get_header(); get_template_part( 'navbar' ); ?>
<div class="sc-body container">
    <div class="columns bg-dark sc-front-columns">
        <div class="column col-3 hide-md">
            <?php get_template_part( 'front-events' ); ?>
            <?php get_template_part( 'front-forums' ); ?>
            <?php get_template_part( 'front-wiki' ); ?>
        </div>
        <div class="column col-6 col-md-12 sc-posts" id="sc-posts">
            <?php get_template_part( 'front-boxes' ); ?>
            <div class="bg-gray px-2 sc-rounded">
            <?php echo bootstrap_pagination(); ?>
            </div>
        </div>
        <div class="column col-3 hide-md">  
            <?php get_template_part( 'front-streams' ); ?>
            <?php get_template_part( 'front-twitter' ); ?>
            <?php get_template_part( 'front-resources' ); ?>
        </div>
    </div>
</div>
<?php get_footer();?>
</body>
</html>