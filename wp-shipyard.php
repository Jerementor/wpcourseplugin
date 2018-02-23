<?php
/*
Plugin Name: WP Shipyard
Plugin URI: http://www.jerementor.com
Version: 1.0.1
Description: WP Shipyard - Lightweight plugin for running courses and lectures
Author: Jeremy Alexander

*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
	
/* !0. TABLE OF CONTENTS */

/*
	
	1. HOOKS
	
	2. SHORTCODES
		
	3. FILTERS
		
	4. EXTERNAL SCRIPTS
		
	5. ACTIONS
		
	6. HELPERS
		
	7. CUSTOM POST TYPES
	
	8. ADMIN PAGES
	
	9. SETTINGS
	
	10. MISCELLANEOUS 

*/


/* !1. HOOKS */
// 1.6
// advanced custom fields settings
//add_filter('acf/settings/show_admin', '__return_false');



/* !2. SHORTCODES */




/* !3. FILTERS */




/* !4. EXTERNAL SCRIPTS */

// 4.1
// Include ACF
include_once(plugin_dir_path(__FILE__) .'/lib/advanced-custom-fields-pro/acf.php');



/* !5. ACTIONS */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5a4d44a6d49c9',
	'title' => 'Lesson Settings',
	'fields' => array(
		array(
			'key' => 'field_5a4def365ca50',
			'label' => 'Show title on page?',
			'name' => 'show_title',
			'type' => 'true_false',
			'instructions' => 'Would you like the title to appear on the lesson page?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
			'ui' => 1,
			'ui_on_text' => 'Show title',
			'ui_off_text' => 'Don\'t show title',
		),
		array(
			'key' => 'field_5a4d60f601707',
			'label' => 'Does this lesson have a video?',
			'name' => 'does_this_lecture_have_a_video',
			'type' => 'true_false',
			'instructions' => 'Is this lesson solely video?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5a4d44d2927e3',
			'label' => 'What is the Video URL?',
			'name' => 'lecture_video',
			'type' => 'oembed',
			'instructions' => 'Enter the URL for your lesson video if there is one',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5a4d60f601707',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'width' => '',
			'height' => '',
		),
		array(
			'key' => 'field_5a4d618c01708',
			'label' => 'Is this lesson text only?',
			'name' => 'is_this_lecture_a_text_lecture',
			'type' => 'true_false',
			'instructions' => 'Is this lesson text based? Note: You can embed video here...',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5a4d4514927e4',
			'label' => 'What is the text for this lesson?',
			'name' => 'lecture_text',
			'type' => 'wysiwyg',
			'instructions' => 'Enter the text for your lesson (if your lesson is entirely text based). Note: You can add embedded video...',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5a4d618c01708',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5a4dedd198637',
			'label' => 'Does this lesson have a description?',
			'name' => 'does_this_lesson_have_a_description',
			'type' => 'true_false',
			'instructions' => 'Would you like to add a brief lesson description?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5a4dee0598638',
			'label' => 'Enter Description',
			'name' => 'lesson_description',
			'type' => 'textarea',
			'instructions' => '140 characters to explain what this lecture is about...',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5a4dedd198637',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Enter brief description here... nothing longer than original Twitter',
			'maxlength' => 140,
			'rows' => 5,
			'new_lines' => '',
		),
		array(
			'key' => 'field_5a4d718e80063',
			'label' => 'Does this lesson have previous/next links?',
			'name' => 'does_this_lecture_have_nextprev_links',
			'type' => 'true_false',
			'instructions' => 'Would you like to add previous/next links to the lesson page?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5a4dda80e4ca2',
			'label' => 'Previous Lesson Link',
			'name' => 'prev_lecture_link',
			'type' => 'page_link',
			'instructions' => 'Pick previous lesson link',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5a4d718e80063',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'lesson',
			),
			'taxonomy' => array(
			),
			'allow_null' => 1,
			'allow_archives' => 0,
			'multiple' => 0,
		),
		array(
			'key' => 'field_5a4dd8ec3f748',
			'label' => 'Next Lesson Link',
			'name' => 'next_lecture_link',
			'type' => 'page_link',
			'instructions' => 'Pick next lesson link',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5a4d718e80063',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'lesson',
			),
			'taxonomy' => array(
			),
			'allow_null' => 1,
			'allow_archives' => 0,
			'multiple' => 0,
		),
		array(
			'key' => 'field_5a4df15f7f4b9',
			'label' => 'REMINDER: <strong>Set the course...</strong>',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Make sure to set the course this lesson belongs to in the top right \'Course\' meta box.',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'lesson',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;

// Register Custom Post Types
function wpship_register_cpt() {
	$labels = array(
		'name'                  => _x( 'Courses', 'Post Type General Name', 'wp-shipyard' ),
		'singular_name'         => _x( 'Course', 'Post Type Singular Name', 'wp-shipyard' ),
		'menu_name'             => __( 'Courses', 'wp-shipyard' ),
		'name_admin_bar'        => __( 'Courses', 'wp-shipyard' ),
		"all_items" 			=> __( "All Courses", "wp-shipyard" ),
		"add_new"				=> __( "Add Course", "wp-shipyard" ),
		"add_new_item"			=> __( "Add New Course", "wp-shipyard" ),
		"edit_item" 			=> __( "Edit Course", "wp-shipyard" ),
		"new_item"				=> __( "New Course", "wp-shipyard" ),
		"view_item" 			=> __( "View Course", "wp-shipyard" ),
		"view_items"			=> __( "View Courses", "wp-shipyard" ),
		"search_items"			=> __( "Search Courses", "wp-shipyard" ),
		"not_found" 			=> __( "No Courses Found", "wp-shipyard" ),
		"not_found_in_trash"	=> __( "No Courses Found In Trash", "wp-shipyard" ),			
	);
	$args = array(
		'label'                 => __( 'Course', 'wp-shipyard' ),
		'labels'                => $labels,
		'hierarchical'          => true,
		'public'                => true,
		'menu_icon'             => "dashicons-lightbulb"

	);
	register_post_type( 'course', $args );
	$labels = array(
		'name'                  => _x( 'Lessons', 'Post Type General Name', 'wp-shipyard' ),
		'singular_name'         => _x( 'Lesson', 'Post Type Singular Name', 'wp-shipyard' ),
		'menu_name'             => __( 'Lessons', 'wp-shipyard' ),
		'name_admin_bar'        => __( 'Lessons', 'wp-shipyard' ),
		"all_items" 			=> __( "All Lessons", "wp-shipyard" ),
		"add_new"				=> __( "Add Lesson", "wp-shipyard" ),
		"add_new_item"			=> __( "Add New Lesson", "wp-shipyard" ),
		"edit_item" 			=> __( "Edit Lesson", "wp-shipyard" ),
		"new_item"				=> __( "New Lesson", "wp-shipyard" ),
		"view_item" 			=> __( "View Lesson", "wp-shipyard" ),
		"view_items"			=> __( "View Lessons", "wp-shipyard" ),
		"search_items"			=> __( "Search Lessons", "wp-shipyard" ),
		"not_found" 			=> __( "No Lessons Found", "wp-shipyard" ),
		"not_found_in_trash"	=> __( "No Lessons Found In Trash", "wp-shipyard" ),		
		
	);
	$args = array(
		'label'                 => __( 'Lesson', 'wp-shipyard' ),
		'labels'                => $labels,
		'hierarchical'          => false,
		'public'                => true,
		'supports'              => array("title"),
		'menu_icon'             => "dashicons-playlist-video"
	);
	register_post_type( 'lesson', $args );
}
add_action( 'init', 'wpship_register_cpt' );


// Add our Course parent meta box
function wpship_add_meta_boxes() {
	add_meta_box( 'lesson-parent', 'Course', 'lesson_attributes_meta_box', 'lesson', 'side', 'high' );
}
add_action( 'add_meta_boxes', 'wpship_add_meta_boxes' );


// Get the Course dropdown
function lesson_attributes_meta_box( $post ) {
	$post_type_object = get_post_type_object( $post->post_type );
	$pages = wp_dropdown_pages( array( 'post_type' => 'course', 'selected' => $post->post_parent, 'name' => 'parent_id', 'show_option_none' => __( '(no parent)' ), 'sort_column'=> 'menu_order, post_title', 'echo' => 0 ) );
	if ( ! empty( $pages ) ) {
		echo $pages;
	}
}



// Add our own URL strucutre and rewrite rules
function wpship_add_rewrite_rules() {
	add_rewrite_tag('%lesson%', '([^/]+)', 'lesson=');
	add_permastruct('lesson', '/lesson/%course%/%lesson%', false);
	add_rewrite_rule('^lesson/([^/]+)/([^/]+)/?','index.php?lesson=$matches[2]','top');
}
add_action( 'init', 'wpship_add_rewrite_rules' );


// Set permalink for Lessons
function wpship_permalinks($permalink, $post, $leavename) {
	$post_id = $post->ID;
	if($post->post_type != 'lesson' || empty($permalink) || in_array($post->post_status, array('draft', 'pending', 'auto-draft')))
	 	return $permalink;
	$parent = $post->post_parent;
	$parent_post = get_post( $parent );
	$permalink = str_replace('%course%', $parent_post->post_name, $permalink);
	return $permalink;
}
add_filter('post_type_link', 'wpship_permalinks', 10, 3);





/* !6. HELPERS */




/* !7. CUSTOM POST TYPES */
// include_once(plugin_dir_path(__FILE__) .'/link_structure/course_lesson_post_type.php');
// include_once(plugin_dir_path(__FILE__) .'/link_structure/updating_parent_meta.php');
// include_once(plugin_dir_path(__FILE__) .'/link_structure/set_url_structure.php');
// include_once(plugin_dir_path(__FILE__) .'/link_structure/update_permalink.php');





/* !8. ADMIN PAGES */




/* !9. SETTINGS */




/* !10. MISCELLANEOUS */

