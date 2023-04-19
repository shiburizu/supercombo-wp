<?php get_header(); ?>
<body <?php body_class('sc-bg'); ?>>
<?php get_template_part( 'navbar' ); ?>
<div class="sc-body container sc-front-columns">
    <div class="columns sc-archive">
        <div class="column col-lg-10 col-md-12 p-centered">
            <div class="text-light">
                <div class="divider pb-2"></div>
                <div class="tile">
                    <div class="tile-icon">
                        <figure class="avatar avatar-lg" data-initial="SC" style="background-color: black;">
                            <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="...">
                        </figure>
                    </div>
                    <div class="ml-2 tile-content">
                        <h1 class="tile-title text-bold mt-2"><?php echo str_replace('Author: ','',get_the_archive_title()) ?></h1>
                        <p><?php the_archive_description() ?></p>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
            <?php echo bootstrap_pagination(); ?>
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