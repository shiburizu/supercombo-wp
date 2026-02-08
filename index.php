<?php get_header(); ?>
<body <?php body_class('sc-bg'); ?>>
<?php get_template_part( 'navbar' ); ?>
<div class="sc-body container">
    <div style="min-height: 100px; max-height: 100px;">
        <div id="top-banner"></div>
    </div>
    <?php get_template_part( 'front-ambox' ); ?>
    <div class="sc-featured">
    <?php get_template_part( 'front-featured' ); ?>
    </div>
    <?php if (is_home()) : ?>
    <?php get_template_part( 'front-youtube' ); ?>
    <?php endif; ?>
    <div id="below-fold-banner"></div>
    <h2 class="pt-2 text-bold text-light">Latest Stories</h2>
    <div class="columns bg-dark sc-front-columns">
        <div class="column col-8 col-lg-12 sc-posts mb-2 pb-2" id="sc-posts">
            <?php get_template_part( 'front-boxes' ); ?>
            <?php echo get_next_posts_link('<div class="bg-primary p-2 sc-rounded text-large text-center text-bold">More Stories</div>') ?>
        </div>
        <div class="column col-4 col-lg-12">
            <?php get_template_part( 'front-radio-player' ); ?>
            <?php get_template_part( 'front-bsky' ); ?>
            <div id="sidebar-banner-1"></div>
            <?php get_template_part( 'front-streams' ); ?>
            <?php get_template_part( 'front-community' ); ?>
            <div id="sidebar-banner-2"></div>
            <?php get_template_part( 'front-youtube-sidebar' ); ?>
            <div id="sidebar-banner-3"></div>
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

    window['nitroAds'].createAd('below-fold-banner', {
        "delayLoading" : true,
        "sizes": [
            [
            "970",
            "90"
            ],
            [
            "728",
            "90"
            ],
            [
            "320",
            "50"
            ],
            [
            "320",
            "100"
            ]
        ],
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