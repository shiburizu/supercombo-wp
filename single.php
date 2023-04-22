<?php get_header(); ?>
<body <?php body_class('sc-bg'); ?>>
<?php get_template_part( 'navbar' ); ?>
<div class="sc-body container sc-front-columns">
    <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="sc-article p-centered">
        <div class="card bg-dark sc-article-body p-centered">
            <div class="card-header px-0 mb-2">
                <h1 class="h2 mb-2 pb-2 text-center"><a class="text-light text-bold" href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
                <?php if ( wcount() > 250 ) : ?>
                    <?php if ( has_post_thumbnail() ) : ?>
                    <div class="sc-post-thumb sc-rounded" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'post-thumb') ?>')"></div>
                    <?php endif; ?>
                    <?php if ( has_excerpt() ) : ?>
                    <p class="p-2 mt-2 mb-0 sc-featured-border text-light text-bold"><?php echo get_the_excerpt() ?></p>
                    <?php endif; ?>
                    <div class="columns pt-2">
                    <span class="column col-md-12 py-2">
                        <figure class="avatar avatar-lg mr-1" data-initial="SC" style="background-color: black;">
                            <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="...">
                        </figure>
                        <p class="text-gray d-inline"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" class="text-bold">By <?php the_author() ?></a> | <?php echo get_the_date() ?></p>
                    </span>
                    <div class="column col-md-12 text-right text-gray" style="display: flex; flex-direction: column; justify-content: center;">
                        <div><?php category_labels(); ?></div>
                        <div><?php tag_labels(); ?></div>
                    </div>
                    </div>
                    <div class="divider"></div>
                    <div class="text-center">
                    <button class="btn btn-primary btn-action s-circle mx-1">
                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" class="fb-xfbml-parse-ignore"><span class="mx-2 text-light fab fa-facebook"></span></a>
                    </button>       
                    <button class="btn btn-primary btn-action s-circle mr-1">
                        <a title="Share this on Twitter" href="https://twitter.com/intent/tweet?text=<?php echo get_the_title() ?>&via=SuperComboGG&url=<?php echo urlencode( get_permalink() ); ?>" title='Tweet Me'><span class="mx-2 text-light fab fa-twitter"></span></a>
                    </button>
                    <button class="btn btn-primary btn-action s-circle">
                        <a target="_blank" href="https://www.reddit.com/submit?url=<?php echo urlencode( get_permalink() ); ?>"><span class="mx-2 text-light fab fa-reddit-alien    "></span></a>
                    </button>  
                    </div>
                    <div class="divider pb-2"></div>
                <?php else: ?>
                    <div class="pb-2 text-center">
                            <button class="btn btn-primary btn-action s-circle mx-1">
                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" class="fb-xfbml-parse-ignore"><span class="mx-2 text-light fab fa-facebook"></span></a>
                            </button>    
                            <button class="btn btn-primary btn-action s-circle mr-1">
                                <a title="Share this on Twitter" href="https://twitter.com/intent/tweet?text=<?php echo get_the_title() ?>&via=SuperComboGG&url=<?php echo urlencode( get_permalink() ); ?>" title='Tweet Me'><span class="mx-2 text-light fab fa-twitter"></span></a>
                            </button>
                            <button class="btn btn-primary btn-action s-circle">
                                <a target="_blank" href="https://www.reddit.com/submit?url=<?php echo urlencode( get_permalink() ); ?>"><span class="mx-2 text-light fab fa-reddit-alien    "></span></a>
                            </button>  
                    </div>
                <?php endif; ?>
            </div>
            <div class="card-body <?php if ( wcount() <= 250 ) : echo "sc-rounded pb-2"; else: echo "px-0"; endif;?>">
                <?php the_content() ?>
                    <?php if ( wcount() <= 250 ): ?>
                        <div class="divider"></div>
                        <div class="columns">
                        <span class="column col-md-12">
                            <figure class="avatar avatar-lg mr-1" data-initial="SC" style="background-color: black;">
                                <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="...">
                            </figure>
                            <p class="text-gray d-inline"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" class="text-bold">By <?php the_author() ?></a> | <?php echo get_the_date() ?></p>
                        </span>
                        <div class="column col-md-12 text-right" style="display: flex; flex-direction: column; justify-content: center;">
                            <div><?php category_labels(); ?></div>
                            <div><?php tag_labels(); ?></div>
                        </div>
                        </div>
                    <?php endif; ?>
            </div>
            <div class="card-footer px-0">
            <?php if ( has_post_thumbnail() ): ?>
            <div class="divider pb-2"></div>
            <?php endif; ?>
            <div>
                <?php comments_template();?>
            </div>
            <?php get_template_part( 'related_posts' ); ?>
            </div>
        </div>
    </article>
    <?php endwhile; ?>
    <?php else : ?>
    <p>There's nothing here.</p>
    <?php endif; ?>
</div>
<?php get_footer();?>
</body>
</html>