<body <?php body_class('sc-bg'); ?>>
<?php get_header(); get_template_part( 'navbar' ); ?>
<div class="sc-body container sc-front-columns">
    <div class="columns">
        <div class="column col-2 col-lg-1 hide-md">
        </div>
        <div class="column col-8 col-lg-10 col-md-12 p-centered">
            <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="sc-article p-centered">
                <div class="columns">
                    <div class="column col-7 col-lg-12"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('front-thumb',['class'=>'img-responsive sc-rounded'])?></a></div>
                    <div class="column col-5 col-lg-12 p-2 my-2 sc-article-titling">
                        <h2 class="card-title my-2"><a class="text-light" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                        <p class="card-subtitle text-gray mb-2">Posted on <?php echo get_the_date()?> by <?php the_author() ?></p>
                        <div><?php category_labels(); ?> <?php tag_labels(); ?></div>
                    </div>
                </div>
                <div class="card bg-dark">
                    <div class="card-body sc-article-body">
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