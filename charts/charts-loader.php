<?php
if ( !defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly.

class Dt_Story_Sets_Charts
{
    private static $_instance = null;
    public static function instance(){
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    } // End instance()

    public function __construct(){

        require_once( 'one-page-chart-template.php' );
        new Dt_Story_Sets_Overview_Chart();

        /**
         * Add additional custom charts for dt-story-sets here by requiring
         * the new chart class and initializing it using the pattern above.
         */
    } // End __construct
}
Dt_Story_Sets_Charts::instance();
