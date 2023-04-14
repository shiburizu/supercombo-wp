<body <?php body_class('sc-bg'); ?>>
<?php get_header(); get_template_part( 'navbar' ); ?>
<div class="sc-body container sc-front-columns">
    <div class="columns">
        <div class="column col-2 col-lg-1 hide-md">
        </div>
        <div class="column col-8 col-lg-10 col-md-12 p-centered">
            <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="sc-article p-centered">
                <?php if ( has_post_thumbnail() ): ?>
                <div class="columns pt-2 mt-2">
                    <div class="column col-7 col-lg-12"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('front-thumb',['class'=>'img-responsive sc-rounded'])?></a></div>
                    <div class="column col-5 col-lg-12 pt-2 my-0 sc-article-titling">
                        <h2 class="card-title my-2"><a class="text-light text-bold" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                        <?php if ( has_excerpt() ): ?>
                        <p class="card-subtitle text-light mb-2"><?php echo get_the_excerpt() ?></p>
                        <?php endif; ?>
                        <span class="mb-2">
                            <figure class="avatar avatar-sm mr-1" data-initial="SC" style="background-color: black;">
                                <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="...">
                            </figure>
                            <p class="text-small text-gray d-inline"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" class="text-bold"><?php the_author() ?></a> | <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?></p>
                        </span>
                        <div class="text-gray"><?php category_labels(); ?></div>
                        <div><?php tag_labels(); ?></div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="card bg-dark sc-article-body">
                    <?php if ( ! has_post_thumbnail() ): ?>
                        <div class="card-header pt-0 text-center">
                            <h2 class="my-2 pb-2"><a class="text-light text-bold" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                            <?php if ( has_excerpt() ): ?>
                            <p class="card-subtitle text-light mb-2"><?php echo get_the_excerpt() ?></p>
                            <?php endif; ?>
                            <span class="mb-2">
                                <figure class="avatar avatar-sm mr-1" data-initial="SC" style="background-color: black;">
                                    <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="...">
                                </figure>
                                <p class="text-small text-gray d-inline"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" class="text-bold"><?php the_author() ?></a> | <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?></p>
                            </span>
                            <div class="text-gray"><?php category_labels(); ?></div>
                            <div><?php tag_labels(); ?></div>
                        </div>
                    <?php endif ?>
                    <div class="card-body">
                        <?php the_content() ?>
                    </div>
                </div>
            </article>
            <?php endwhile; ?>
            <?php else : ?>
            <p>There's nothing here.</p>
            <?php endif; ?>
        </div>
        <div class="column col-2 col-lg-1 hide-md">  
        </div>
    </div>
</div>
<?php get_footer();?>
</body>
</html>