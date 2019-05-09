<?php
/**
 * Plugin Name:       Food Blog Categories
 * Plugin URI:        http://roadwarriorcreative.com
 * Description:       Easily Add recipe related taxonomies to your blog posts.
 * Version:           1.0.0
 * Author:            Road Warrior Creative
 * Author URI:        https://roadwarriorcreative.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

defined( 'ABSPATH' ) or die( 'No direct file access allowed!' );

// Create meal type taxonomy
add_action( 'init', 'rwc_fbc_mealtype_tax' );
function rwc_fbc_mealtype_tax() {
	$labels = array(
		'name'              => _x( 'Meal Types', 'taxonomy general name' ),
		'singular_name'     => _x( 'Meal Type', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Meal Types' ),
		'all_items'         => __( 'All Meal Types' ),
		'parent_item'       => __( 'Parent Meal Type' ),
		'parent_item_colon' => __( 'Parent Meal Type:' ),
		'edit_item'         => __( 'Edit Meal Type' ),
		'update_item'       => __( 'Update Meal Type' ),
		'add_new_item'      => __( 'Add New Meal Type' ),
		'new_item_name'     => __( 'New Meal Type' ),
		'menu_name'         => __( 'Meal Types' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'			=> true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'meal-type' ),
	);
	register_taxonomy( 'fbc_meal_type', 'post', $args);
}

// Create dish type taxonomy
add_action( 'init', 'rwc_fbc_dishtype_tax' );
function rwc_fbc_dishtype_tax() {
	$labels = array(
		'name'              => _x( 'Dish Types', 'taxonomy general name' ),
		'singular_name'     => _x( 'Dish Type', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Dish Types' ),
		'all_items'         => __( 'All Dish Types' ),
		'parent_item'       => __( 'Parent Dish Type' ),
		'parent_item_colon' => __( 'Parent Dish Type:' ),
		'edit_item'         => __( 'Edit Dish Type' ),
		'update_item'       => __( 'Update Dish Type' ),
		'add_new_item'      => __( 'Add New Dish Type' ),
		'new_item_name'     => __( 'New Dish Type' ),
		'menu_name'         => __( 'Dish Types' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'			=> true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'dish' ),
	);
	register_taxonomy( 'fbc_dish_type', 'post', $args);
}

// Create diet taxonomy
add_action( 'init', 'rwc_fbc_diet_tax' );
function rwc_fbc_diet_tax() {
	$labels = array(
		'name'              => _x( 'Diet & Cooking Styles', 'taxonomy general name' ),
		'singular_name'     => _x( 'Diet & Cooking Style', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Diet & Cooking Styles' ),
		'all_items'         => __( 'All Diet & Cooking Styles' ),
		'parent_item'       => __( 'Parent Diet & Cooking Style' ),
		'parent_item_colon' => __( 'Parent Diet & Cooking Style:' ),
		'edit_item'         => __( 'Edit Diet & Cooking Style' ),
		'update_item'       => __( 'Update Diet & Cooking Style' ),
		'add_new_item'      => __( 'Add New Diet & Cooking Style' ),
		'new_item_name'     => __( 'New Diet & Cooking Style' ),
		'menu_name'         => __( 'Diet & Cooking Styles' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'			=> true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'diet' ),
	);
	register_taxonomy( 'fbc_diet', 'post', $args);
}

// Create occasion taxonomy
add_action( 'init', 'rwc_fbc_occasion_tax' );
function rwc_fbc_occasion_tax() {
	$labels = array(
		'name'              => _x( 'Occasions', 'taxonomy general name' ),
		'singular_name'     => _x( 'Occasion', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Occasions' ),
		'all_items'         => __( 'All Occasions' ),
		'parent_item'       => __( 'Parent Occasion' ),
		'parent_item_colon' => __( 'Parent Occasion:' ),
		'edit_item'         => __( 'Edit Occasion' ),
		'update_item'       => __( 'Update Occasion' ),
		'add_new_item'      => __( 'Add New Occasion' ),
		'new_item_name'     => __( 'New Occasion' ),
		'menu_name'         => __( 'Occasions' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'			=> true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'occasion' ),
	);
	register_taxonomy( 'fbc_occasion', 'post', $args);
}

// Create season taxonomy
add_action( 'init', 'rwc_fbc_season_tax' );
function rwc_fbc_season_tax() {
	$labels = array(
		'name'              => _x( 'Seasons', 'taxonomy general name' ),
		'singular_name'     => _x( 'Season', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Seasons' ),
		'all_items'         => __( 'All Seasons' ),
		'parent_item'       => __( 'Parent Season' ),
		'parent_item_colon' => __( 'Parent Season:' ),
		'edit_item'         => __( 'Edit Season' ),
		'update_item'       => __( 'Update Season' ),
		'add_new_item'      => __( 'Add New Season' ),
		'new_item_name'     => __( 'New Season' ),
		'menu_name'         => __( 'Seasons' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'			=> true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'season' ),
	);
	register_taxonomy( 'fbc_season', 'post', $args);
}

?>