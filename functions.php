<?php
function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'style-fa', get_template_directory_uri() . '/fontawesome/css/all.css' );
	wp_enqueue_style( 'style-icons', get_template_directory_uri() . '/spectre/dist/spectre-icons.css' );
    wp_enqueue_style( 'jqui-style', get_template_directory_uri() . '/js/jquery-ui/jquery-ui.min.css' );
    wp_enqueue_script( 'jq-script', get_template_directory_uri() . '/js/jquery-ui/external/jquery/jquery.js');
    wp_enqueue_script( 'jqui-script', get_template_directory_uri() . '/js/jquery-ui/jquery-ui.min.js');
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js');
}
function wcount(){
    ob_start();
    the_content();
    $content = ob_get_clean();
    return sizeof(explode(" ", $content));
}
function category_labels() {
    $categories = get_the_category();
    $separator = ' | ';
    $output = '';
    if ( ! empty( $categories ) ) {
        foreach( $categories as $category ) {
            $output .= '<a class="text-uppercase text-bold" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
        }
        echo trim( $output, $separator );
    }
}
function category_titles() {
    $categories = get_the_category();
    $separator = ', ';
    $output = '';
    if ( ! empty( $categories ) ) {
        foreach( $categories as $category ) {
            $output .= '<a class="text-bold h4" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
        }
        echo trim( $output, $separator );
    }
}
function tag_labels() {
    $categories = get_the_tags();
    $separator = ' ';
    $output = '';
    if ( ! empty( $categories ) ) {
        foreach( $categories as $category ) {
            $output .= '<a class="text-bold text-small" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">#' . esc_html( $category->name ) . '</a>' . $separator;
        }
        echo trim( $output, $separator );
    }
}
function register_my_menus() {
    register_nav_menus(
        array(
            'sites-menu' => __( 'Sites Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
//Loads template customtemplate.php from your theme folder on page 2+ of the 'main page'
function my_second_main_template($template){
    if (is_home() && is_paged()){
         $alternate_template = locate_template( 'archive.php');
         if(!empty($alternate_template))
              $template =$alternate_template;
    }
    return $template;
}
add_filter('template_include','my_second_main_template');
add_action( 'init', 'register_my_menus' );
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );
add_image_size( 'front-thumb', 1200, 630, true);
/**
 * @param WP_Query|null $wp_query
 * @param bool $echo
 * @param array $params
 *
 * @return string|null
 * 
 * Using Bootstrap 4? see https://gist.github.com/mtx-z/f95af6cc6fb562eb1a1540ca715ed928
 * 
 * Accepts a WP_Query instance to build pagination (for custom wp_query()),
 * or nothing to use the current global $wp_query (eg: taxonomy term page)
 * - Tested on WP 5.7.1
 * - Tested with Bootstrap 5.0 (https://getbootstrap.com/docs/5.0/components/pagination/)
 * - Tested on Sage 9.0.9
 *
 * INSTALLATION:
 * add this file content to your theme function.php or equivalent
 *
 * USAGE:
 *     <?php echo bootstrap_pagination(); ?> //uses global $wp_query
 * or with custom WP_Query():
 *     <?php
 *      $query = new \WP_Query($args);
 *       ... while(have_posts()), $query->posts stuff ... endwhile() ...
 *       echo bootstrap_pagination($query);
 *     ?>
 */
function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true, $params = [] ) {
    if ( null === $wp_query ) {
        global $wp_query;
    }
    if (is_home() && !is_paged()){
        echo "<div class='p-2 text-bold text-center h4'>" . get_next_posts_link('More Stories') . "</div>";
        return null;
    }
    
    $add_args = [];

    //add query (GET) parameters to generated page URLs
    /*if (isset($_GET[ 'sort' ])) {
        $add_args[ 'sort' ] = (string)$_GET[ 'sort' ];
    }*/

    $pages = paginate_links( array_merge( [
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'format'       => '?paged=%#%',
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'total'        => $wp_query->max_num_pages,
            'type'         => 'array',
            'show_all'     => false,
            'end_size'     => 3,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => __( '« Prev' ),
            'next_text'    => __( 'Next »' ),
            'add_args'     => $add_args,
            'add_fragment' => ''
        ], $params )
    );

    if ( is_array( $pages ) ) {
        //$current_page = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
        $pagination = '<nav aria-label="Page navigation"><ul class="pagination" style="justify-content: center;">';

        foreach ( $pages as $page ) {
            $pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
        }

        $pagination .= '</ul></nav>';

        if ( $echo ) {
            echo $pagination;
        } else {
            return $pagination;
        }
    }

    return null;
}
/**
 * Notes:
 * AJAX:
 * - When used with wp_ajax (generate pagination HTML from ajax) you'll need to provide base URL (or it'll be admin-ajax URL)
 * - Example for a term page: bootstrap_pagination( $query, false, ['base' => get_term_link($term) . '?paged=%#%'] )
 *
 * Images as next/prev:
 * - You can use image as next/prev buttons
 * - Example: 'prev_text' => '<img src="' . get_stylesheet_directory_uri() . '/assets/images/prev-arrow.svg">',
 *
 * Add query parameters to page URLs
 * - If you need custom URL parameters on your page URLS, use the "add_args" attribute
 * - Example (before paginate_links() call):
 * $arg = [];
 * if (isset($_GET[ 'sort' ])) {
 *  $args[ 'sort' ] = (string)$_GET[ 'sort' ];
 * }
 * ...
 * 'add_args'     => $args,
 */


/**
 * Return the archive title depending on which page is being displayed.
 */
function get_archive_title() {
	global $wp_query;
	$prefix = '';
	$title = '';

	if ( is_category() ) {
		$prefix = __( 'Category Archives:' );
		$title = '<span>' . single_cat_title( '', false ) . '</span>';

	} elseif ( is_tag() ) {
		$prefix = __( 'Tag Archives:' );
		$title = '<span>' . single_tag_title( '', false ) . '</span>';

	} elseif ( is_author() ) {
		the_post();
		$prefix = __( 'Author Archive:' );
		$title = '<span><a href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>';
		rewind_posts();
	} elseif ( is_day() ) {
		$prefix = __( 'Daily Archives:' );
		$title = '<span>' . get_the_date() . '</span>';

	} elseif ( is_month() ) {
		$prefix = __( 'Monthly Archives:' );
		$title = '<span>' . get_the_date( 'F Y' ) . '</span>';

	} elseif ( is_year() ) {
		$prefix = __( 'Yearly Archives:' );
		$title = '<span>' . get_the_date( 'Y' ) . '</span>';

	} elseif ( ! empty( $wp_query->query_vars['taxonomy'] ) ) {
		$value = get_query_var( $wp_query->query_vars['taxonomy'] );
		$term = get_term_by( 'slug',$value,$wp_query->query_vars['taxonomy'] );
		$tax = get_taxonomy( $wp_query->query_vars['taxonomy'] );
		$prefix = $tax->label . ':';
		$title = $term->name;
	}

	if ( empty( $title ) ) {
        $title = __( 'Archives' );
	} else {
        $title = $prefix . " " . $title;
    }

	return $title;
}

function get_most_viewed_posts() {
	global $wpdb;
	$default_args = array(
		'number'    => 5,
		'post_type' => 'post',
		'show_date' => false,
		'days'    => 7,
	);
	$args = $default_args;
	$start_date = gmdate( 'Y-m-d', strtotime( "-{$args['days']} days" ) );
	$end_date   = gmdate( 'Y-m-d', strtotime( 'tomorrow midnight' ) );
	$sql        = $wpdb->prepare( "SELECT p.id, SUM(visitors) As visitors, SUM(pageviews) AS pageviews FROM {$wpdb->prefix}koko_analytics_post_stats s JOIN {$wpdb->posts} p ON s.id = p.id WHERE p.id > 0 AND s.date >= %s AND s.date <= %s AND p.post_type = %s AND p.post_status = 'publish' GROUP BY s.id ORDER BY pageviews DESC LIMIT 0, %d", array( $start_date, $end_date, $args['post_type'], $args['number'] ) );
	$results    = $wpdb->get_results( $sql );
	if ( empty( $results ) ) {
		return array();
	}

	$ids = wp_list_pluck( $results, 'id' );
	$r = new WP_Query(
		array(
			'posts_per_page'      => -1,
			'post__in'            => $ids,
			'orderby'             => 'post__in',
			'post_type'           => $args['post_type'],
			'no_found_rows'       => true,
			'ignore_sticky_posts' => true,
		)
	);
	return $r->posts;
}
?>