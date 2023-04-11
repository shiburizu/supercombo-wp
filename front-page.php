<body <?php body_class('sc-bg'); ?>>
<?php get_header(); get_template_part( 'navbar' ); ?>
<div class="sc-body container">
    <div class="columns py-2 bg-dark sc-front-columns">
        <div class="column col-3 hide-md">
            <?php get_template_part( 'front-events' ); ?>
            <?php get_template_part( 'front-forums' ); ?>
            <?php get_template_part( 'front-wiki' ); ?>
        </div>
        <div class="column col-6 col-md-12 px-0">
            <?php get_template_part( 'front-articles' ); ?>
        </div>
        <div class="column col-3 hide-md">  
            <?php get_template_part( 'front-join' ); ?>
            <?php get_template_part( 'front-streams' ); ?>
            <?php get_template_part( 'front-twitter' ); ?>
            <?php get_template_part( 'front-resources' ); ?>
        </div>
    </div>
</div>
<?php get_footer();?>
</body>
</html>