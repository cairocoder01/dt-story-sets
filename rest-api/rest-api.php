<?php
if ( !defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly.

class Dt_Story_Sets_Endpoints
{
    /**
     * Set the permissions for dt-story-sets endpoints
     * @link https://github.com/DiscipleTools/Documentation/blob/master/theme-core/capabilities.md
     * @var string[]
     */
    public $permissions = [ 'access_contacts', 'dt_all_access_contacts', 'view_project_metrics' ];


    /**
     * Define the namespace for dt-story-sets REST API.
     * Route: /dt-story-sets/v1/story-sets
     * Method: GET
     * Permission strategy: check based on user capabilities.
     */
    //See https://github.com/DiscipleTools/disciple-tools-theme/wiki/Site-to-Site-Link for outside of wordpress authentication
    public function add_api_routes() {
        $namespace = 'dt-story-sets/v1';

        register_rest_route(
            $namespace, '/story-sets', [
                'methods'  => 'GET',
                'callback' => [ $this, 'endpoint' ],
                'permission_callback' => function( WP_REST_Request $request ) {
                    return $this->has_permission();
                },
            ]
        );
    }


    public function endpoint( WP_REST_Request $request ) {

        // Implement logic for fetching story sets
        return [ 'message' => 'Story sets data' ];
    }

    private static $_instance = null;
    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    } // End instance()
    public function __construct() {
        add_action( 'rest_api_init', [ $this, 'add_api_routes' ] );
    }
    public function has_permission(){
        $pass = false;
        foreach ( $this->permissions as $permission ){
            if ( current_user_can( $permission ) ){
                $pass = true;
            }
        }
        return $pass;
    }
}
Dt_Story_Sets_Endpoints::instance();
