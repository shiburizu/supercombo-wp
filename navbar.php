<div class="navbar-container bg-dark">
    <header class="topnav navbar">
            <section class="navbar-section">
                <a class="text-light" href="<?php echo home_url()?>"><img style="max-height: 32px;" class="img-responsive mr-2" src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>"></a>
                <?php
                wp_nav_menu( array( 
                    'theme_location' => 'sites-menu',
                    'container' => '',
                    'menu_class' => 'sc-menu hide-lg'
                    ) ); 
                ?>
            </section>
            <section class="navbar-section">
            <span class="text-gray text-tiny hide-xl mx-2 hide-xl" style="white-space: nowrap;">Join our community</span>
                <a href="https://supercombo.gg/discord"><span class="hide-lg mx-2 text-light fab fa-discord "></span></a>
                <a href="https://twitch.com/supercombogg"><span class="hide-lg mx-2 text-light fab fa-twitch"></span></a>
                <a href="https://twitter.com/supercombogg"><span class="hide-lg mx-2 text-light fab fa-twitter"></span></a>
                <a href="https://youtube.com/@supercombogg"><span class="hide-lg mx-2 text-light fab fa-youtube"></span></a>
                <button class="mx-2 btn btn-sm btn-primary"><a class="text-light text-bold" href="https://supercombo.gg/patreon">Become a Patron</a></button>
                <div class="hide-lg"><?php get_search_form(); ?></div>
                <button class="show-lg btn btn-primary" onclick="openMenu()"><i class="px-1 fas fa-bars"></i></button> 
            </section>
    </header>
</div>
<?php get_template_part( 'mobile-menu' ); ?>