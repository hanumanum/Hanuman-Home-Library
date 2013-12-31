<?php

// Register Book Post Type
function custom_book_post_type() {

	$labels = array(
		'name'                => _x( 'Books', 'Post Type General Name', 'hanuman-home-library' ),
		'singular_name'       => _x( 'Book', 'Post Type Singular Name', 'hanuman-home-library' ),
		'menu_name'           => __( 'Books', 'hanuman-home-library' ),
		'parent_item_colon'   => __( 'Parent Book:', 'hanuman-home-library' ),
		'all_items'           => __( 'All Books', 'hanuman-home-library' ),
		'view_item'           => __( 'View Book', 'hanuman-home-library' ),
		'add_new_item'        => __( 'Add New Book', 'hanuman-home-library' ),
		'add_new'             => __( 'New Book', 'hanuman-home-library' ),
		'edit_item'           => __( 'Edit Book', 'hanuman-home-library' ),
		'update_item'         => __( 'Update Book', 'hanuman-home-library' ),
		'search_items'        => __( 'Search books', 'hanuman-home-library' ),
		'not_found'           => __( 'No no books found', 'hanuman-home-library' ),
		'not_found_in_trash'  => __( 'No books found in Trash', 'hanuman-home-library' ),
	);
	$args = array(
		'label'               => __( 'book', 'hanuman-home-library' ),
		'description'         => __( 'books in home library', 'hanuman-home-library' ),
		'labels'              => $labels,
		'supports'            => array('thumbnail','editor','title'),
		'taxonomies'          => array( 'autor','genre','language','publisher','publish_date','physical_place','series'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => plugin_dir_path( __FILE__ ).'assets/book.png',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'book', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_book_post_type', 0 );



// Register Author Taxonomy
function book_author()  {

	$labels = array(
		'name'                       => _x( 'Authors', 'Taxonomy General Name', 'hanuman-home-library' ),
		'singular_name'              => _x( 'Author', 'Taxonomy Singular Name', 'hanuman-home-library' ),
		'menu_name'                  => __( 'Authors', 'hanuman-home-library' ),
		'all_items'                  => __( 'Authors', 'hanuman-home-library' ),
		'parent_item'                => __( 'Author', 'hanuman-home-library' ),
		'parent_item_colon'          => __( 'Parent Author:', 'hanuman-home-library' ),
		'new_item_name'              => __( 'New Author Name', 'hanuman-home-library' ),
		'add_new_item'               => __( 'Add New Author', 'hanuman-home-library' ),
		'edit_item'                  => __( 'Edit Author', 'hanuman-home-library' ),
		'update_item'                => __( 'Update Author', 'hanuman-home-library' ),
		'separate_items_with_commas' => __( 'Separate authors with commas', 'hanuman-home-library' ),
		'search_items'               => __( 'Search author', 'hanuman-home-library' ),
		'add_or_remove_items'        => __( 'Add or remove authors', 'hanuman-home-library' ),
		'choose_from_most_used'      => __( 'Choose from the most used authors', 'hanuman-home-library' ),
	);
	$rewrite = array(
		'slug'                       => 'authors',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'autor', 'book', $args );

}

// Hook into the 'init' action
add_action( 'init', 'book_author', 0 );


// Register Genre Taxonomy
function book_genre()  {

	$labels = array(
		'name'                       => _x( 'Genres', 'Taxonomy General Name', 'hanuman-home-library' ),
		'singular_name'              => _x( 'Genre', 'Taxonomy Singular Name', 'hanuman-home-library' ),
		'menu_name'                  => __( 'Genre', 'hanuman-home-library' ),
		'all_items'                  => __( 'All Genres', 'hanuman-home-library' ),
		'parent_item'                => __( 'Parent Genre', 'hanuman-home-library' ),
		'parent_item_colon'          => __( 'Parent Genre:', 'hanuman-home-library' ),
		'new_item_name'              => __( 'New Genre Name', 'hanuman-home-library' ),
		'add_new_item'               => __( 'Add New Genre', 'hanuman-home-library' ),
		'edit_item'                  => __( 'Edit Genre', 'hanuman-home-library' ),
		'update_item'                => __( 'Update Genre', 'hanuman-home-library' ),
		'separate_items_with_commas' => __( 'Separate genres with commas', 'hanuman-home-library' ),
		'search_items'               => __( 'Search genres', 'hanuman-home-library' ),
		'add_or_remove_items'        => __( 'Add or remove genres', 'hanuman-home-library' ),
		'choose_from_most_used'      => __( 'Choose from the most used genres', 'hanuman-home-library' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'genre', 'book', $args );

}

// Hook into the 'init' action
add_action( 'init', 'book_genre', 0 );



// Register Language Taxonomy
function book_language()  {

	$labels = array(
		'name'                       => _x( 'Languages', 'Taxonomy General Name', 'hanuman-home-library' ),
		'singular_name'              => _x( 'Language', 'Taxonomy Singular Name', 'hanuman-home-library' ),
		'menu_name'                  => __( 'Languages', 'hanuman-home-library' ),
		'all_items'                  => __( 'Languages', 'hanuman-home-library' ),
		'parent_item'                => __( 'Language', 'hanuman-home-library' ),
		'parent_item_colon'          => __( 'Parent Language:', 'hanuman-home-library' ),
		'new_item_name'              => __( 'New Language Name', 'hanuman-home-library' ),
		'add_new_item'               => __( 'Add New Language', 'hanuman-home-library' ),
		'edit_item'                  => __( 'Edit Language', 'hanuman-home-library' ),
		'update_item'                => __( 'Update Language', 'hanuman-home-library' ),
		'separate_items_with_commas' => __( 'Separate languages with commas', 'hanuman-home-library' ),
		'search_items'               => __( 'Search language', 'hanuman-home-library' ),
		'add_or_remove_items'        => __( 'Add or remove languages', 'hanuman-home-library' ),
		'choose_from_most_used'      => __( 'Choose from the most used languages', 'hanuman-home-library' ),
	);
	$rewrite = array(
		'slug'                       => 'languages',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'language', 'book', $args );

}

// Hook into the 'init' action
add_action( 'init', 'book_language', 0 );


// Register Publisher Taxonomy
function book_publisher()  {

	$labels = array(
		'name'                       => _x( 'Publishers', 'Taxonomy General Name', 'hanuman-home-library' ),
		'singular_name'              => _x( 'Publisher', 'Taxonomy Singular Name', 'hanuman-home-library' ),
		'menu_name'                  => __( 'Publishers', 'hanuman-home-library' ),
		'all_items'                  => __( 'Publishers', 'hanuman-home-library' ),
		'parent_item'                => __( 'Publisher', 'hanuman-home-library' ),
		'parent_item_colon'          => __( 'Parent Publisher:', 'hanuman-home-library' ),
		'new_item_name'              => __( 'New Publisher Name', 'hanuman-home-library' ),
		'add_new_item'               => __( 'Add New Publisher', 'hanuman-home-library' ),
		'edit_item'                  => __( 'Edit Publisher', 'hanuman-home-library' ),
		'update_item'                => __( 'Update Publisher', 'hanuman-home-library' ),
		'separate_items_with_commas' => __( 'Separate publishers with commas', 'hanuman-home-library' ),
		'search_items'               => __( 'Search publisher', 'hanuman-home-library' ),
		'add_or_remove_items'        => __( 'Add or remove publishers', 'hanuman-home-library' ),
		'choose_from_most_used'      => __( 'Choose from the most used publishers', 'hanuman-home-library' ),
	);
	$rewrite = array(
		'slug'                       => 'publishers',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'publisher', 'book', $args );

}

// Hook into the 'init' action
add_action( 'init', 'book_publisher', 0 );


// Register Publish Date Taxonomy
function book_publish_date()  {

	$labels = array(
		'name'                       => _x( 'Publish Dates', 'Taxonomy General Name', 'hanuman-home-library' ),
		'singular_name'              => _x( 'Publish Date', 'Taxonomy Singular Name', 'hanuman-home-library' ),
		'menu_name'                  => __( 'Publish Dates', 'hanuman-home-library' ),
		'all_items'                  => __( 'Publish Dates', 'hanuman-home-library' ),
		'parent_item'                => __( 'Publish Date', 'hanuman-home-library' ),
		'parent_item_colon'          => __( 'Parent Publish Date:', 'hanuman-home-library' ),
		'new_item_name'              => __( 'New Publish Date Name', 'hanuman-home-library' ),
		'add_new_item'               => __( 'Add New Publish Date', 'hanuman-home-library' ),
		'edit_item'                  => __( 'Edit Publish Date', 'hanuman-home-library' ),
		'update_item'                => __( 'Update Publish Date', 'hanuman-home-library' ),
		'separate_items_with_commas' => __( 'Separate publish_dates with commas', 'hanuman-home-library' ),
		'search_items'               => __( 'Search publish_date', 'hanuman-home-library' ),
		'add_or_remove_items'        => __( 'Add or remove publish_dates', 'hanuman-home-library' ),
		'choose_from_most_used'      => __( 'Choose from the most used publish_dates', 'hanuman-home-library' ),
	);
	$rewrite = array(
		'slug'                       => 'publish_dates',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'publish_date', 'book', $args );

}

// Hook into the 'init' action
add_action( 'init', 'book_publish_date', 0 );


// Register Physical Place Taxonomy
function book_physical_place()  {

	$labels = array(
		'name'                       => _x( 'Physical Places', 'Taxonomy General Name', 'hanuman-home-library' ),
		'singular_name'              => _x( 'Physical Place', 'Taxonomy Singular Name', 'hanuman-home-library' ),
		'menu_name'                  => __( 'Physical Places', 'hanuman-home-library' ),
		'all_items'                  => __( 'Physical Places', 'hanuman-home-library' ),
		'parent_item'                => __( 'Physical Place', 'hanuman-home-library' ),
		'parent_item_colon'          => __( 'Parent Physical Place:', 'hanuman-home-library' ),
		'new_item_name'              => __( 'New Physical Place Name', 'hanuman-home-library' ),
		'add_new_item'               => __( 'Add New Physical Place', 'hanuman-home-library' ),
		'edit_item'                  => __( 'Edit Physical Place', 'hanuman-home-library' ),
		'update_item'                => __( 'Update Physical Place', 'hanuman-home-library' ),
		'separate_items_with_commas' => __( 'Separate physical_places with commas', 'hanuman-home-library' ),
		'search_items'               => __( 'Search physical_place', 'hanuman-home-library' ),
		'add_or_remove_items'        => __( 'Add or remove physical_places', 'hanuman-home-library' ),
		'choose_from_most_used'      => __( 'Choose from the most used physical_places', 'hanuman-home-library' ),
	);
	$rewrite = array(
		'slug'                       => 'physical_places',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'physical_place', 'book', $args );

}

// Hook into the 'init' action
add_action( 'init', 'book_physical_place', 0 );


// Register Series Taxonomy
function series()  {

	$labels = array(
		'name'                       => _x( 'Series', 'Taxonomy General Name', 'hanuman-home-library' ),
		'singular_name'              => _x( 'Series', 'Taxonomy Singular Name', 'hanuman-home-library' ),
		'menu_name'                  => __( 'Series', 'hanuman-home-library' ),
		'all_items'                  => __( 'Series', 'hanuman-home-library' ),
		'parent_item'                => __( 'Series', 'hanuman-home-library' ),
		'parent_item_colon'          => __( 'Parent Series:', 'hanuman-home-library' ),
		'new_item_name'              => __( 'New Series Name', 'hanuman-home-library' ),
		'add_new_item'               => __( 'Add New Series', 'hanuman-home-library' ),
		'edit_item'                  => __( 'Edit Series', 'hanuman-home-library' ),
		'update_item'                => __( 'Update Series', 'hanuman-home-library' ),
		'separate_items_with_commas' => __( 'Separate series with commas', 'hanuman-home-library' ),
		'search_items'               => __( 'Search series', 'hanuman-home-library' ),
		'add_or_remove_items'        => __( 'Add or remove series', 'hanuman-home-library' ),
		'choose_from_most_used'      => __( 'Choose from the most used series', 'hanuman-home-library' ),
	);
	$rewrite = array(
		'slug'                       => 'series',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'series', 'book', $args );

}

// Hook into the 'init' action
add_action( 'init', 'series', 0 );


//=================Templates =======================//
add_filter( 'template_include', 'include_template_function', 1 );

function include_template_function( $template_path ) {
	if ( get_post_type() == 'book' ) {
		if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-book.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-book.php';
            }
						
        }

        if (is_archive() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'archive-book.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/archive-book.php';
            }
						
        }

    }
	
	
    return $template_path;
} //*/




function han_get_termlist_by_term_id($postID,$termName)
{
	 $terms = wp_get_post_terms($postID,$termName); 
	 

	 $linkLIST = "";
	 if($terms)
	 {
	 
	 foreach($terms as $ter)
	 {
	 	$link = get_term_link($ter->slug,$termName);	
	 	$linkLIST.= "<a href='".$link."'>";
	 	$linkLIST.=$ter->name." <br> ";
	 	$linkLIST.= "</a>";
	 }
	}
	 return $linkLIST;
}

//============SHORTCODES==================//
//han_get_termlist_by_term_id(25,'autor')
function han_get_autors_list()
{
	$catnames = get_terms('autor');
	$retstring = "";
	$curChar = mb_substr($catnames[0]->name,0,1);
	$retstring.= "<strong>$curChar</strong><br>";
	foreach ($catnames as $ccat) {
		$name = $ccat->name;
		$c=mb_substr($name,0,1);
		if($curChar!=$c)
		{
			$curChar=mb_substr($name,0,1);
			$retstring.= "<strong>$curChar</strong><br>";

		}
		$trmid = $ccat->slug;
		$url = get_term_link($trmid,"autor");
		if(is_wp_error($url))
		{
			$url="";		
		}

		$retstring.="<a href='$url'>$name</a> (".$ccat->count.")<br>";	
	
	
	}
	return $retstring;
}

add_shortcode( 'han-list-autors', 'han_get_autors_list');


