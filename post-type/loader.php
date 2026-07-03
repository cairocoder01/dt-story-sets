<?php
if ( !defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly.

/**
 * Test that DT_Module_Base has loaded
 */
if ( ! class_exists( 'DT_Module_Base' ) ) {
    dt_write_log( 'Disciple.Tools System not loaded. Cannot load custom post type.' );
    return;
}

/**
 * Add any modules required or added for the post type
 */
add_filter( 'dt_post_type_modules', function( $modules ){

    /**
     * @todo Update the story-set in the array below 'story_set_base'. Follow the pattern.
     * @todo Add more modules by adding a new array element. i.e. 'story_set_base_two'.
     */
    $modules['story_set_base'] = [
        'name' => __( 'Story Set', 'dt-story-sets' ),
        'enabled' => true,
        'locked' => true,
        'prerequisites' => [ 'contacts_base' ],
        'post_type' => 'dt_story_set',
        'description' => __( 'Default story-set functionality', 'dt-story-sets' )
    ];

    return $modules;
}, 20, 1 );

require_once 'module-base.php';
Dt_Story_Sets_Base::instance();

/**
 * @todo require_once and load additional modules
 */
