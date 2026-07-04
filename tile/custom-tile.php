<?php
if ( !defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly.

class Dt_Story_Sets_Tile
{
    private static $_instance = null;
    public static function instance(){
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    } // End instance()

    public function __construct(){
        add_filter( 'dt_details_additional_tiles', [ $this, 'dt_details_additional_tiles' ], 10, 2 );
        add_filter( 'dt_custom_fields_settings', [ $this, 'dt_custom_fields' ], 1, 2 );
        add_action( 'dt_details_additional_section', [ $this, 'dt_add_section' ], 30, 2 );
    }

    /**
     * This function registers a new tile to a specific post type
     *
     * @param $tiles
     * @param string $post_type
     * @return mixed
     */
    public function dt_details_additional_tiles( $tiles, $post_type = '' ) {
        if ( $post_type === 'contacts' || $post_type === 'dt_story_set' ){
            $tiles['dt_story_sets'] = [ 'label' => __( 'Dt Story Sets', 'dt-story-sets' ) ];
        }
        return $tiles;
    }

    /**
     * @param array $fields
     * @param string $post_type
     * @return array
     */
    public function dt_custom_fields( array $fields, string $post_type = '' ) {
        if ( $post_type === 'contacts' || $post_type === 'dt_story_set' ){
            /**
             * This is an example of a text field
             */
            $fields['dt_story_sets_text'] = [
                'name'        => __( 'Text', 'dt-story-sets' ),
                'description' => _x( 'Text', 'Optional Documentation', 'dt-story-sets' ),
                'type'        => 'text',
                'default'     => '',
                'tile' => 'dt_story_sets',
                'icon' => get_template_directory_uri() . '/dt-assets/images/edit.svg',
            ];
            /**
             * This is an example of a multiselect field
             */
            $fields['dt_story_sets_multiselect'] = [
                'name' => __( 'Multiselect', 'dt-story-sets' ),
                'default' => [
                    'one' => [ 'label' => __( 'One', 'dt-story-sets' ) ],
                    'two' => [ 'label' => __( 'Two', 'dt-story-sets' ) ],
                    'three' => [ 'label' => __( 'Three', 'dt-story-sets' ) ],
                    'four' => [ 'label' => __( 'Four', 'dt-story-sets' ) ],
                ],
                'tile' => 'dt_story_sets',
                'type' => 'multi_select',
                'hidden' => false,
                'icon' => get_template_directory_uri() . '/dt-assets/images/edit.svg',
            ];
            /**
             * This is an example of a key select field
             */
            $fields['dt_story_sets_keyselect'] = [
                'name' => 'Key Select',
                'type' => 'key_select',
                'tile' => 'dt_story_sets',
                'default' => [
                    'first'   => [
                        'label' => _x( 'First', 'Key Select Label', 'dt-story-sets' ),
                        'description' => _x( 'First Key Description', 'Training Status field description', 'dt-story-sets' ),
                        'color' => '#ff9800'
                    ],
                    'second'   => [
                        'label' => _x( 'Second', 'Key Select Label', 'dt-story-sets' ),
                        'description' => _x( 'Second Key Description', 'Training Status field description', 'dt-story-sets' ),
                        'color' => '#4CAF50'
                    ],
                    'third'   => [
                        'label' => _x( 'Third', 'Key Select Label', 'dt-story-sets' ),
                        'description' => _x( 'Third Key Description', 'Training Status field description', 'dt-story-sets' ),
                        'color' => '#366184'
                    ],
                ],
                'icon' => get_template_directory_uri() . '/dt-assets/images/edit.svg',
                'default_color' => '#366184',
                'select_cannot_be_empty' => true
            ];
        }
        return $fields;
    }

    public function dt_add_section( $section, $post_type ) {
        if ( ( $post_type === 'contacts' || $post_type === 'dt_story_set' ) && $section === 'dt_story_sets' ){
            $this_post = DT_Posts::get_post( $post_type, get_the_ID() );
            $post_type_fields = DT_Posts::get_post_field_settings( $post_type );
            ?>
            <div>
                <p>Add information or custom fields here</p>
            </div>
        <?php }
    }
}
Dt_Story_Sets_Tile::instance();
