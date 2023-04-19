<div class="modal modal-lg bg-dark" id="sc-modal">
  <a href="#close" class="modal-overlay bg-dark" aria-label="Close"></a>
  <div class="modal-container bg-dark">
    <div class="modal-header py-0 bg-dark">
        <img class="img-responsive p-2 mb-2 p-centered" style="max-width: 300px; width 100%;" src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>">
        <div class="columns">
            <form role="search" class="pr-2" style="flex: 1;" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div class="input-group">
                    <input class="form-input input-lg bg-gray" type="search" class="search-field" name="s" placeholder="Search..." value="<?php echo get_search_query(); ?>">
                    <button class="btn btn-primary btn-lg input-group-btn"><i class="fas fa-search"></i></button> 
                </div>        
            </form>
            <div class="d-flex" style="justify-content: end;">
                    <button class="btn btn-primary btn-lg btn-action" onclick="closeMenu()"><i class="fas fa-times"></i></button>
            </div>
        </div>
    </div>
    <div class="modal-body py-0 px-2">
        <div class="divider"></div>
        <div class="content">
            <?php wp_nav_menu( array( 
            'theme_location' => 'mobile-menu',
            'container' => '',
            'menu_class' => ''
            ) ); 
            ?>
        </div>
        <div class="divider"></div>
    </div>
    <div class="modal-footer">
    </div>
  </div>
</div>