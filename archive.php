<body <?php body_class('sc-bg'); ?>>
<?php get_header(); get_template_part( 'navbar' ); ?>
<div class="sc-body container sc-front-columns">
    <div class="columns">
        <div class="column col-2 col-lg-1 hide-md">
        </div>
        <div class="column col-8 col-lg-10 col-md-12 p-centered">
            <div class="bg-gray px-2 mb-2 sc-rounded">
            <?php echo bootstrap_pagination(); ?>
            </div>
            <?php get_template_part( 'front-boxes' ); ?>
            <div class="bg-gray px-2 sc-rounded">
            <?php echo bootstrap_pagination(); ?>
            </div>
        </div>
        <div class="column col-2 col-lg-1 hide-md">  
        </div>
    </div>
</div>
<?php get_footer();?>
</body>
</html>