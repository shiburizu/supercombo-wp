<?php 
$currentPage = get_query_var('paged');
// General arguments
$posts = new WP_Query(array(
    'post_type' => 'post', // Default or custom post type
    'posts_per_page' => 10, // Max number of posts per page
    'paged' => $currentPage
));
if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>
<article>
    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('post-thumbnail',['class' => 'img-responsive'])?></a>
    <div class="py-0 px-1">
        <h2 class="mt-2 mb-0"><a class="text-light" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <div class="pt-0">
            <small class="text-gray">Posted on <?php echo get_the_date()?> by <?php the_author() ?></span></small>
        </div>
        <div class="pt-1">
            <?php the_excerpt() ?>
        </div>
    </div>
    <div class="divider"></div>
</article>
<?php endwhile; ?>
<?php else : ?>
<article>
    <p>There's nothing here.</p>
</article>
<?php endif; ?>
<?php echo "<div class='page-nav-container'>" . paginate_links(array(
    'total' => $posts->max_num_pages,
    'prev_text' => __('<'),
    'next_text' => __('>')
)) . "</div>"; ?>