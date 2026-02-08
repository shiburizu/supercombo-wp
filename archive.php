<?php get_header(); ?>
<body <?php body_class('sc-bg'); ?>>
<?php get_template_part( 'navbar' ); ?>
<div class="sc-body container sc-front-columns">
    <div style="min-height: 100px; max-height: 100px;">
        <div id="top-banner"></div>
    </div>
    <div class="columns sc-archive">
        <div class="column col-lg-12 p-centered">
            <div class="text-light">
            <?php if ( !is_front_page() ) : ?>
            <h1 class="h2 text-bold"><?php echo get_the_archive_title() ?></h1>
            <p><?php the_archive_description() ?></p>
            <?php else: ?>
            <h1 class="h2 pt-2 text-bold">All Posts</h2>
            <?php endif; ?>
            <?php echo bootstrap_pagination(); ?>
            <?php get_template_part( 'front-boxes' ); ?>
            <?php echo bootstrap_pagination() ?>
            </div>
        </div>
        <div class="column col-4 col-lg-12">
            <?php get_template_part( 'sidebar-top' ); ?>
            <?php get_template_part( 'front-streams' ); ?>
            <div style="margin: 0.2rem 0rem;"><div id="sidebar-banner-1"></div></div>
            <?php get_template_part( 'front-community' ); ?>
            <div style="margin: 0.2rem 0rem;"><div id="sidebar-banner-2"></div></div>
            <?php get_template_part( 'front-youtube-sidebar' ); ?>
            <div style="margin: 0.2rem 0rem;"><div id="sidebar-banner-3"></div></div>
        </div>
    </div>
    <div style="padding-top: 0.4rem; max-height: 270px;">
        <div id="bottom-banner"></div>
    </div>
</div>
<?php get_footer();?>
</body>

<script>
    window['nitroAds'].createAd('news-anchor', {
        "format": "anchor-v2",
        "anchor": "bottom",
        "anchorBgColor": "rgb(0 0 0 / 40%)",
        "anchorClose": true,
        "anchorPersistClose": false,
        "anchorStickyOffset": 0,
        "mediaQuery": "(min-width: 0px)"
        });

    window['nitroAds'].createAd('top-banner', {
        "delayLoading" : true,
        "report": {
            "enabled": true,
            "icon": true,
            "wording": "Report Ad",
            "position": "bottom-right-side"
        }
        });

    window['nitroAds'].createAd('sidebar-banner-1', {
            "delayLoading" : true,
            "sizes": [
                [
                "300",
                "250"
                ],
                [
                "336",
                "280"
                ]
            ],
            "report": {
                "enabled": true,
                "icon": true,
                "wording": "Report Ad",
                "position": "bottom-right-side"
            }
            });

    window['nitroAds'].createAd('sidebar-banner-2', {
            "delayLoading" : true,
            "sizes": [
                [
                "300",
                "250"
                ],
                [
                "336",
                "280"
                ]
            ],
            "report": {
                "enabled": true,
                "icon": true,
                "wording": "Report Ad",
                "position": "bottom-right-side"
            }
            });

    window['nitroAds'].createAd('sidebar-banner-3', {
            "delayLoading" : true,
            "sizes": [
                [
                "300",
                "600"
                ],
                [
                "320",
                "480"
                ],
                [
                "160",
                "600"
                ]
            ],
            "report": {
                "enabled": true,
                "icon": true,
                "wording": "Report Ad",
                "position": "bottom-right"
            }
            });

    window['nitroAds'].createAd('bottom-banner', {
    "delayLoading": true,
    "report": {
        "enabled": true,
        "icon": true,
        "wording": "Report Ad",
        "position": "bottom-right"
    }
    });
</script>
</html>