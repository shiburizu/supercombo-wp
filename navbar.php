<div class="navbar-container py-2">
    <div class="navbar-outer">
    <header class="navbar mb-2">
            <section class="navbar-section hide-md px-2">
                <?php menu_output('sites-menu') ?>
            </section>
            <section class="navbar-section navbar-center" style="justify-content: center;">
                <h1 class="my-2 h3 mx-2"><a class="text-light" href="<?php echo home_url()?>"><b>SuperCombo.gg</b></a></h3>
            </section>
            <section class="navbar-section">
            <span class="text-gray hide-xl mx-2 hide-xl" style="white-space: nowrap;">Join our community</span>
                <a href="https://supercombo.gg/discord"><span class="hide-lg mx-2 text-light fab fa-discord "></span></a>
                <a href="https://twitch.com/supercombogg"><span class="hide-lg mx-2 text-light fab fa-twitch"></span></a>
                <a href="https://twitter.com/supercombogg"><span class="hide-lg mx-2 text-light fab fa-twitter"></span></a>
                <a href="https://youtube.com/@supercombogg"><span class="hide-lg mx-2 text-light fab fa-youtube"></span></a>
                <button class="hide-lg ml-2 btn btn-primary"><a class="text-light text-bold" href="https://supercombo.gg/patreon">Become a Patron</a></button>
                <a href="#" class="show-lg text-light mx-2">Menu</a>
            </section>
    </header>
    </div>
    <div class="navbar-outer hide-lg">
    <header class="navbar bg-gray sc-rounded">
    <section class="navbar-section px-2">
            <div class="dropdown game-dropdown dropdown-left">
                <a href="#" class="py-0 btn btn-link dropdown-toggle" tabindex="0">
                    <img src="<?php echo get_template_directory_uri() . '/images/SFV-logo.png' ?>">
                </a>
                <ul class="bg-gray menu">
                <li class="menu-item">
                    <a href="#">Wiki</a>
                </ul>
            </div>
            <div class="dropdown game-dropdown dropdown-left">
                <a href="#" class="py-0 btn btn-link dropdown-toggle" tabindex="0">
                    <img src="<?php echo get_template_directory_uri() . '/images/Ssf2turbologo.png' ?>">
                </a>
                <ul class="bg-gray menu">
                <li class="menu-item">
                    <a href="#">Wiki</a>
                </ul>
            </div>
            <div class="dropdown game-dropdown dropdown-left">
                <a href="#" class="py-0 btn btn-link dropdown-toggle" tabindex="0">
                    <img src="<?php echo get_template_directory_uri() . '/images/UMvC3Logo.png' ?>">
                </a>
                <ul class="bg-gray menu">
                <li class="menu-item">
                    <a href="#">Wiki</a>
                </ul>
            </div>
            </section>
            <section class="navbar-section navbar-center text-large" style="justify-content: center;">
            <ul class="text-light text-bold text-small tab tab-block mb-0">
                <li class="tab-item">
                    <a href="#">Hardware</a>
                </li>
                <li class="tab-item active">
                    <a href="#">Hardware</a>
                </li>
                <li class="tab-item">
                    <a href="#">Hardware</a>
                </li>
            </ul>
            </section>
            <section class="navbar-section px-2">
                <?php get_search_form(); ?>
            </section>
    </header>
    </div>
</div>