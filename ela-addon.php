<?php
/**
 * Plugin Name: El Addon
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Anisur Rahman
 * Author URI:  https://github.com/anisur2805
 * Text Domain: ela-addon
 */

function register_new_widgets( $widgets_manager ) {
  require_once __DIR__ . '/widgets/hello-word-1.php';
  require_once __DIR__ . '/widgets/hello-word-2.php';
  require_once __DIR__ . '/widgets/InfoBox.php';

  $widgets_manager->register( new \Elementor_Widget_1() );
  $widgets_manager->register( new \Elementor_Widget_2() );
  $widgets_manager->register( new \InfoBox() );
}

add_action( 'elementor/widgets/register', 'register_new_widgets' );

/**
 * Register new Elementor controls.
 *
 * @param \Elementor\Controls_Manager $controls_manager Elementor controls manager.
 * @return void
 */
// function register_new_controls( $controls_manager ) {
//   require_once __DIR__ . '/controls/control-1.php';
//   require_once __DIR__ . '/controls/control-2.php';

//   $controls_manager->register( new \Elementor_Control_1() );
//   $controls_manager->register( new \Elementor_Control_2() );
// }

// add_action( 'elementor/controls/register', 'register_new_controls' );

/**
 * Register new Elementor dynamic tags.
 *
 * @param \Elementor\Core\DynamicTags\Manager $dynamic_tags_manager Elementor dynamic tags manager.
 * @return void
 */

// function register_new_dynamic_tags( $dynamic_tags_manager ) {
//   require_once __DIR__ . '/dynamic-tags/dynamic-tag-1.php';
//   require_once __DIR__ . '/dynamic-tags/dynamic-tag-2.php';

//   $dynamic_tags_manager->register( new \Elementor_Dynamic_tag_1() );
//   $dynamic_tags_manager->register( new \Elementor_Dynamic_tag_2() );
// }

// add_action( 'elementor/dynamic_tags/register', 'register_new_dynamic_tags' );

/**
 * Register new Elementor finder categories.
 *
 * @param \Elementor\Core\Common\Modules\Finder\Categories_Manager $finder_categories_manager Elementor finder categories manager.
 * @return void
 */

// function register_new_finder_categories( $finder_categories_manager ) {
//   require_once __DIR__ . '/finder/finder-1.php';
//   require_once __DIR__ . '/finder/finder-2.php';

//   $finder_categories_manager->register( new \Elementor_Finder_1() );
//   $finder_categories_manager->register( new \Elementor_Finder_2() );
// }

// add_action( 'elementor/finder/register', 'register_new_finder_categories' );
