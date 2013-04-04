<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

// Extra Widgets
function responsive_child_widgets_init() {

	register_sidebar(array(
		'name' => __('Single Widget', 'responsive'),
		'description' => __('Area A - sidebar-single-widget.php', 'responsive'),
		'id' => 'single-widget',
		'before_title' => '<div class="single-widget-title"><h3>',
		'after_title' => '</h3></div>',
		'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
		'after_widget' => '</div>'
	));

	register_sidebar(array(
		'name' => __('Double Widget 1', 'responsive'),
		'description' => __('Area B - sidebar-double-widgets.php', 'responsive'),
		'id' => 'double-widget-1',
		'before_title' => '<div class="double-widget-title"><h3>',
		'after_title' => '</h3></div>',
		'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
		'after_widget' => '</div>'
	));

	register_sidebar(array(
		'name' => __('Double Widget 2', 'responsive'),
		'description' => __('Area C - sidebar-double-widgets.php', 'responsive'),
		'id' => 'double-widget-2',
		'before_title' => '<div class="double-widget-title"><h3>',
		'after_title' => '</h3></div>',
		'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
		'after_widget' => '</div>'
	));

	register_sidebar(array(
		'name' => __('Quadruple Widget 1', 'responsive'),
		'description' => __('Area D - sidebar-quadruple-widgets.php', 'responsive'),
		'id' => 'quadruple-widget-1',
		'before_title' => '<div class="quadruple-widget-title"><h3>',
		'after_title' => '</h3></div>',
		'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
		'after_widget' => '</div>'
	));

	register_sidebar(array(
		'name' => __('Quadruple Widget 2', 'responsive'),
		'description' => __('Area E - sidebar-quadruple-widgets.php', 'responsive'),
		'id' => 'quadruple-widget-2',
		'before_title' => '<div class="quadruple-widget-title"><h3>',
		'after_title' => '</h3></div>',
		'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
		'after_widget' => '</div>'
	));

	register_sidebar(array(
		'name' => __('Quadruple Widget 3', 'responsive'),
		'description' => __('Area F - sidebar-quadruple-widgets.php', 'responsive'),
		'id' => 'quadruple-widget-3',
		'before_title' => '<div class="quadruple-widget-title"><h3>',
		'after_title' => '</h3></div>',
		'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
		'after_widget' => '</div>'
	));

	register_sidebar(array(
		'name' => __('Quadruple Widget 4', 'responsive'),
		'description' => __('Area G - sidebar-quadruple-widgets.php', 'responsive'),
		'id' => 'quadruple-widget-4',
		'before_title' => '<div class="quadruple-widget-title"><h3>',
		'after_title' => '</h3></div>',
		'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
		'after_widget' => '</div>'
	));

}
add_action( 'widgets_init', 'responsive_child_widgets_init' );