<div class="navbar-parent mb-2 p-fixed">
    <div class="navbar-container bg-dark">
    <header class="navbar p-2">
            <section class="navbar-section">
                <h1 class="my-0 h3 mx-2"><a class="text-light" href="<?php echo home_url()?>"><b>SuperCombo.gg</b></a></h3>
                <div class="hide-md">
                <?php menu_output('sites-menu') ?>
                </div>
            </section>
            <section class="navbar-center hide-lg">
                <?php get_search_form(); ?>
            </section>
            <section class="navbar-section">
                <div class="dropdown game-dropdown dropdown-right hide-lg">
                    <a href="#" class="py-0 btn btn-link dropdown-toggle" tabindex="0">
                        <img src="<?php echo get_template_directory_uri() . '/images/SFV-logo.png' ?>">
                    </a>
                    <ul class="bg-gray menu">
                    <li class="menu-item">
                        <a href="#">Wiki</a>
                    </ul>
                </div>
                <div class="dropdown game-dropdown dropdown-right hide-lg">
                    <a href="#" class="py-0 btn btn-link dropdown-toggle" tabindex="0">
                        <img src="<?php echo get_template_directory_uri() . '/images/Ssf2turbologo.png' ?>">
                    </a>
                    <ul class="bg-gray menu">
                    <li class="menu-item">
                        <a href="#">Wiki</a>
                    </ul>
                </div>
                <div class="dropdown game-dropdown dropdown-right hide-lg">
                    <a href="#" class="py-0 btn btn-link dropdown-toggle" tabindex="0">
                        <img src="<?php echo get_template_directory_uri() . '/images/UMvC3Logo.png' ?>">
                    </a>
                    <ul class="bg-gray menu">
                    <li class="menu-item">
                        <a href="#">Wiki</a>
                    </ul>
                </div>
                <a href="#" class="show-lg text-light mx-2">Menu</a>
            </section>
    </header>
    </div>
    <div class="navbar-container bg-gray hide-lg">
    <header class="navbar px-2">
            <section class="navbar-section text-large">
                <?php menu_output('category-menu') ?>
            </section>
            <section class="navbar-section text-large">
                <span class="text-gray mx-2 hide-xl">Join our community</span>
                <a href="https://supercombo.gg/discord"><span class="mx-2 text-light fab fa-discord "></span></a>
                <a href="https://twitch.com/supercombogg"><span class="mx-2 text-light fab fa-twitch"></span></a>
                <a href="https://twitter.com/supercombogg"><span class="mx-2 text-light fab fa-twitter"></span></a>
                <a href="https://youtube.com/@supercombogg"><span class="mx-2 text-light fab fa-youtube"></span></a>
                <button class="mr-2 btn btn-primary" style="border-radius: 0px !important; border-color: transparent !important;"><a class="text-light text-large" href="https://supercombo.gg/patreon">Become a Patron</a></button>
            </section>
    </header>
    </div>
</div>