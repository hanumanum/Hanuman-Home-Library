<?php
function widget_myuniquewidget($args) {
    extract($args);
    $taxargs = array(
	'show_option_all'    => '',
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 1,
	'hide_empty'         => 0,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => 1,
	'title_li'           => '',
	'show_option_none'   => __('No categories'),
	'number'             => null,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'genre',
	'walker'             => null
); 
?>
        <?php echo $before_widget; ?>
            <?php echo $before_title
                . 'Genres'
                . $after_title; ?>
        <?php wp_list_categories($taxargs);
        echo $after_widget; ?>
<?php
}
 wp_register_sidebar_widget('taxWidg','Book Categoryes','widget_myuniquewidget',array(                  // options
        'description' => 'Displays book categoryes (Genres) and subcategoryes'
    ));
?>