<footer class="bg-dark d-flex" style="justify-content: center;">
    <div class="sc-footer columns">
        <div class="column col-6 col-lg-12 text-center d-flex p-2" style="flex-direction: column; justify-content: center;">
            <img class="img-responsive p-2" src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>">
            <div class="text-gray">
                <p class="my-2"><?php echo bloginfo( 'description' ); ?></p>
                <p class="my-2 text-bold">Est. X.XXX.MMXXI</p>
            </div>
        </div>
        <div class="column col-6 col-lg-12 d-flex p-2" style="flex-direction: column; justify-content: center;">
            <div class="sc-rounded p-2 m-2">
            <?php wp_nav_menu( array( 
                    'theme_location' => 'footer-menu',
                    'container' => '',
                    'menu_class' => 'bg-dark'
            ) ); ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer() ?>