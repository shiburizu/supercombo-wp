<?php get_header(); ?>
<body <?php body_class('sc-bg'); ?>>
<?php get_template_part( 'navbar' ); ?>
<div class="sc-body container sc-front-columns text-light d-flex" style="flex-direction: column; align-items: center;">
    <h1 class="pt-2 text-bold">404 Not Found</h2> 
    <p>Nothing here!</p>
    <div style="max-width: 500px;">
    <?php get_template_part( 'sidebar-top' ); ?>
    </div>
</div>
<?php get_footer();?>
</body>
</html>