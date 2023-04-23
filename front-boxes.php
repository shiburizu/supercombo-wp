<?php $first = False; ?>
<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
$timelimit=1 * 86400; //days * seconds per day
$post_age = date('U') - get_post_time('U');
$json = file_get_contents( 'https://forums.supercombo.gg/api/discussions?filter%5Bq%5D=wordpressid:' . strval(get_the_ID()) );
$obj = json_decode($json);
if (count($obj->data) > 0) {
    $comments = $obj->data[0]->attributes->commentCount;
    if ( $comments > 0 ) {
        $comment_link = ' - <a class="text-bold" href="' . get_permalink() .'"><i class="fas fa-comment-alt"></i> ' . $comments . '</a>';
    } else {
        $comment_link = ' - <a class="text-bold" href="' . get_permalink() .'">Discuss</a>';
    }
} else {
    $comment_link = '';
}
?>
<?php if ( wcount() > 150 and has_post_thumbnail() ) : ?>
    <?php if ( is_front_page() and $first == False and !is_paged() ) :?>
        <?php $first = True; ?>
    <?php else : ?>
        <article class="sc-article-box sc-rounded columns col-gapless">
            <div class="column col-8 col-md-12 p-2 bg-dark">
                <div class="px-2 py-2 sc-article-box-title">
                    <span>
                        <figure class="avatar avatar-sm mr-1" data-initial="SC" style="background-color: black;">
                            <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="...">
                        </figure>
                        <?php if ($post_age < $timelimit) : ?>
                            <?php $post_time = esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago';
                                if ( str_contains($post_time, 'min') or str_contains($post_time, 'second') ) {
                                    $post_time = "Just now";
                                }
                            ?>
                            <p class="text-small text-gray d-inline mb-1">
                                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" class="text-bold">
                                    <?php the_author() ?>
                                </a> - <?php echo $post_time ?><?php echo $comment_link; ?></p>
                        <?php else: ?>
                            <p class="text-small text-gray d-inline mb-1">
                                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" class="text-bold">
                                    <?php the_author() ?>
                                </a> - <?php echo get_the_date() ?><?php echo $comment_link; ?></p>
                        <?php endif; ?>
                    </span>
                    <h2 class="h4 my-2"><a class="text-light text-bold" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                    <?php if ( has_excerpt() ) : ?>
                        <a class="mb-2 text-light text-small" href="<?php the_permalink() ?>"><?php echo get_the_excerpt() ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <a href="<?php the_permalink() ?>" class="column col-4 col-md-12 sc-thumb-bg" style="background: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'large') ?>')"></a>
        </article>
    <?php endif; ?>
<?php else : ?>
<article class="sc-article-box sc-rounded bg-dark p-2">
    <div class="px-2 py-2">
        <span>
            <figure class="avatar avatar-sm mr-1" data-initial="SC" style="background-color: black;">
                <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="...">
            </figure>
            <?php if ($post_age < $timelimit) : ?>
                <?php $post_time = esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago';
                    if ( str_contains($post_time, 'min') or str_contains($post_time, 'second') ) {
                        $post_time = "Just now";
                    }
                ?>
                <p class="text-small text-gray d-inline mb-1"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" class="text-bold"><?php the_author() ?></a> - <?php echo $post_time ?><?php echo $comment_link; ?></p>
            <?php else: ?>
                <p class="text-small text-gray d-inline mb-1"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" class="text-bold"><?php the_author() ?></a> - <?php echo get_the_date() ?><?php echo $comment_link; ?></p>
            <?php endif; ?>
        </span>
        <?php if ( wcount() > 150 ) : ?>
            <h2 class="h4 my-2"><a class="text-light text-bold" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <?php else : ?>
            <h2 class="h4 my-2"><a class="text-light text-bold" href="<?php the_permalink() ?>"><?php the_title() ?></a> <i class="sc-link fas fa-link" onclick="copyLink(event,'<?php the_permalink() ?>')"></i></h2>
        <?php endif; ?>
        <div class="pt-1 text-light">
            <?php if ( wcount() > 150 ) : ?>
            <a class="text-light" href="<?php the_permalink() ?>"><?php echo get_the_excerpt() ?></a>
            <?php else : ?>
            <?php the_content() ?>
            <?php endif; ?>
        </div>
    </div>
</article>
<?php endif; ?>
<?php endwhile; ?>
<?php else : ?>
<div class="text-center text-light">
    <p>Nothing here!</p>
</div>
<?php endif; ?>