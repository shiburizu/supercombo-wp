<?php get_header(); ?>
<body <?php body_class('sc-bg'); ?>>
<?php get_template_part( 'navbar' ); ?>
<div class="sc-body container sc-front-columns">
    <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="sc-article p-centered">
        <div class="card bg-dark sc-article-body p-centered">
            <div class="card-header px-0 mb-2">
                <h1 class="h2 mb-2 pb-2 text-center"><a class="text-light text-bold" href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
                <?php if ( wcount() > 150 ) : ?>
                    <?php if ( has_post_thumbnail() ) : ?>
                    <div class="sc-post-thumb sc-rounded" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'post-thumb') ?>')"></div>
                    <?php endif; ?>
                    <div class="columns pt-2 sc-author-meta">
                    <div class="column col-8 col-md-12 py-2">
                        <figure class="avatar avatar-lg mr-1" data-initial="SC" style="background-color: black;">
                            <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="...">
                        </figure>
                        <p class="text-gray d-inline"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" class="text-bold">By <?php the_author() ?></a> | <?php echo get_the_date() ?></p>
                    </div>
                    <div class="column col-4 col-md-12 text-gray sc-author-meta-tags" style="display: flex; flex-direction: column; justify-content: center;">
                        <div><?php category_labels(); ?></div>
                        <div><?php tag_labels(); ?></div>
                        <div><?php if (intval(get_comments_number()) == 1) : echo "<a href='#discussion'>" . get_comments_number() . " comment</a>"; elseif (intval(get_comments_number()) > 1): echo "<a href='#discussion'>" . get_comments_number() . " comments</a>"; else: echo "<a href='#discussion'>Discuss</a>"; endif; ?></div>
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
            <a id="discussion" class="text-no-hover">
            <div class="card-body <?php if ( wcount() <= 150 ) : echo "sc-rounded pb-2"; else: echo "px-0"; endif;?>">
                <?php the_content() ?>
                <?php if ( comments_open() ) : ?>
                    <div class="show-lg py-2">
                        <span class="text-light text-bold h4">Discuss with our community</span>
                        <button class="btn btn-primary text-bold" onclick="openCommentsMenu()">Open Discussion Section</button>
                    </div>
                <?php endif; ?>
                    <?php if ( wcount() <= 150 ): ?>
                        <div class="divider"></div>
                        <div class="columns sc-author-meta">
                        <span class="column col-md-12 py-2">
                            <figure class="avatar avatar-lg mr-1" data-initial="SC" style="background-color: black;">
                                <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="...">
                            </figure>
                            <p class="text-gray d-inline"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" class="text-bold">By <?php the_author() ?></a> | <?php echo get_the_date() ?></p>
                        </span>
                        <div class="column col-md-12 sc-author-meta-tags" style="display: flex; flex-direction: column; justify-content: center;">
                            <div><?php category_labels(); ?></div>
                            <div><?php tag_labels(); ?></div>
                        </div>
                        </div>
                    <?php endif; ?>
            </div>
            <div class="card-footer px-0">
            <?php if ( wcount() > 150 ): ?>
            <div class="divider pb-2"></div>
            <?php endif; ?>
            <?php if ( comments_open() ) : ?>
            <section class="mb-2 pb-2 hide-lg">
                <span class="text-light text-bold h4">Discuss with our community</span>
            </section>
            <div class="mb-2 pb-2 hide-lg"><?php comments_template();?></div>
            <?php endif;?>
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