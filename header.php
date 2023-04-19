<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php if (is_page() or is_single()) : ?>
        <meta name="description" content="<?php echo wp_strip_all_tags(get_the_excerpt()) ?>">
        <meta property="og:type" content="article" />
        <meta property="og:updated_time" content="<?php echo get_post_timestamp(null,'modified') ?>" />
        <meta property="article:published_time" content="<?php echo get_post_timestamp() ?>" />
        <meta property="article:modified_time" content="<?php echo get_post_timestamp(null,'modified') ?>" />
        <?php $categories = get_the_category(); if ($categories != false) : foreach ($categories as $c) : ?>
            <meta property="article:section" content="<?php echo $c->name;?>">
        <?php endforeach ?>
        <?php endif; ?>
        <?php $tags = get_the_tags(); if ($tags != false) : foreach ($tags as $t) : ?>
            <meta property="article:tag" content="<?php echo $t->name;?>">
        <?php endforeach ?>
        <?php endif; ?>
        <?php if (has_post_thumbnail()) : ?>
            <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(null,'front-thumb') ?>" />
        <?php else: ?>
            <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/sc_ogp.png" />
        <?php endif; ?>
    <?php elseif (is_archive()) : ?>
        <meta name="description" content="<?php echo wp_strip_all_tags(the_archive_description()) ?>">
        <meta property="og:type" content="website" />
        <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/sc_ogp.png" />
    <?php else: ?>
        <meta name="description" content="<?php echo bloginfo( 'description' ); ?>">
        <meta property="og:type" content="website" />
        <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/sc_ogp.png" />
    <?php endif; ?>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@SuperComboGG" />
    <meta property="og:title" content="<?php echo trim(wp_title('',false,'right')) ?>" />
    <meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>" />
    <meta property="og:url" content="<?php global $wp; echo home_url(add_query_arg(array($_GET), $wp->request));?>" />
    <meta name="twitter:widgets:theme" content="dark">
    <meta name="twitter:widgets:conversation" content="none">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php wp_title(' - ',true,'right')?><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
</head>