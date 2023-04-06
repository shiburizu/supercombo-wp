<body <?php body_class('sc-bg'); ?>>
<?php get_header(); get_template_part( 'navbar' ); ?>
<div class="container py-2">
    <div class="columns">
        <div class="column col-3">
            <div class="bg-dark p-2 mb-2">
                <?php get_header(); get_template_part( 'front-events' ); ?>
            </div>
            <div class="bg-dark p-2 my-2">
                <?php get_header(); get_template_part( 'front-forums' ); ?>
            </div>
            <div class="bg-dark p-2 my-2">
                <?php get_header(); get_template_part( 'front-wiki' ); ?>
            </div>
        </div>
        <div class="column col-6">
            <div class="bg-dark p-2">
                <?php get_header(); get_template_part( 'front-articles' ); ?>
            </div>
        </div>
        <div class="column col-3">  
        <div class="bg-dark p-2 mb-2">
                <?php get_header(); get_template_part( 'front-join' ); ?>
            </div>
            <div class="bg-dark p-2 mb-2">
                <?php get_header(); get_template_part( 'front-streams' ); ?>
            </div>
            <div class="bg-dark p-2 my-2">
                <?php get_header(); get_template_part( 'front-resources' ); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>
</body>
</html>