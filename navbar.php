<div class="top-shadow hide-md"></div>
<div class="navbar-parent mb-2 p-fixed">
    <div class="navbar-container bg-dark">
    <header class="navbar py-2">
            <section class="navbar-section">
                <h1 class="my-0 mx-2"><a class="text-light" href="<?php echo home_url()?>"><b>SuperCombo.gg</b></a></h3>
                <?php menu_output('sites-menu') ?>
            </section>
            <section class="navbar-center hide-md">
                <input class="form-input" type="text" id="search" placeholder="Search Articles, Events, Wikis...">
            </section>
            <section class="navbar-section">
                <div class="dropdown game-dropdown dropdown-right hide-md">
                    <a href="#" class="py-0 btn btn-link dropdown-toggle" tabindex="0">
                        <img src="<?php echo get_template_directory_uri() . '/images/SFV-logo.png' ?>">
                    </a>
                    <ul class="bg-gray menu">
                    <li class="menu-item">
                        <a href="#">Wiki</a>
                    </ul>
                </div>
                <div class="dropdown game-dropdown dropdown-right hide-md">
                    <a href="#" class="py-0 btn btn-link dropdown-toggle" tabindex="0">
                        <img src="<?php echo get_template_directory_uri() . '/images/Ssf2turbologo.png' ?>">
                    </a>
                    <ul class="bg-gray menu">
                    <li class="menu-item">
                        <a href="#">Wiki</a>
                    </ul>
                </div>
                <div class="dropdown game-dropdown dropdown-right hide-md">
                    <a href="#" class="py-0 btn btn-link dropdown-toggle" tabindex="0">
                        <img src="<?php echo get_template_directory_uri() . '/images/UMvC3Logo.png' ?>">
                    </a>
                    <ul class="bg-gray menu">
                    <li class="menu-item">
                        <a href="#">Wiki</a>
                    </ul>
                </div>
                <a href="#" class="btn text-light btn-lg btn-link show-md">Menu</a>
            </section>
    </header>
    </div>
    <div class="navbar-container bg-gray hide-md">
    <header class="navbar">
            <section class="navbar-section text-large">
                <?php menu_output('category-menu') ?>
            </section>
            <section class="navbar-section text-large">
                <span class="text-gray mx-2">Join our community</span>
                <a href="https://twitch.com/supercombogg"><span class="mx-2 text-light fab fa-twitch"></span></a>
                <a href="https://twitter.com/supercombogg"><span class="mx-2 text-light fab fa-twitter"></span></a>
                <a href="https://youtube.com/@supercombogg"><span class="mx-2 text-light fab fa-youtube"></span></a>
                <a href="https://supercombo.gg/discord"><span class="mx-2 text-light fab fa-discord "></span></a>
                <button class="mr-2 btn btn-primary"><a class="mx-2 text-light text-large" href="https://supercombo.gg/patreon">Become a Patron</a></button>
            </section>
    </header>
    </div>
</div>