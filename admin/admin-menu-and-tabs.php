<?php
if ( ! defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly

/**
 * Class Dt_Story_Sets_Menu
 */
class Dt_Story_Sets_Menu {

    public $token = 'dt_story_sets';
    public $page_title = 'Dt Story Sets';

    private static $_instance = null;

    /**
     * Dt_Story_Sets_Menu Instance
     *
     * Ensures only one instance of Dt_Story_Sets_Menu is loaded or can be loaded.
     *
     * @since 0.1.0
     * @static
     * @return Dt_Story_Sets_Menu instance
     */
    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    } // End instance()


    /**
     * Constructor function.
     * @access  public
     * @since   0.1.0
     */
    public function __construct() {

        add_action( 'admin_menu', array( $this, 'register_menu' ) );

        $this->page_title = __( 'Dt Story Sets', 'dt-story-sets' );
    } // End __construct()


    /**
     * Loads the subnav page
     * @since 0.1
     */
    public function register_menu() {
        $this->page_title = __( 'Dt Story Sets', 'dt-story-sets' );

        add_submenu_page( 'dt_extensions', $this->page_title, $this->page_title, 'manage_dt', $this->token, [ $this, 'content' ] );
    }

    /**
     * Menu stub. Replaced when Disciple.Tools Theme fully loads.
     */
    public function extensions_menu() {}

    /**
     * Builds page contents
     * @since 0.1
     */
    public function content() {

        if ( !current_user_can( 'manage_dt' ) ) { // manage dt is a permission that is specific to Disciple.Tools and allows admins, strategists and dispatchers into the wp-admin
            wp_die( 'You do not have sufficient permissions to access this page.' );
        }

        if ( isset( $_GET['tab'] ) ) {
            $tab = sanitize_key( wp_unslash( $_GET['tab'] ) );
        } else {
            $tab = 'general';
        }

        $link = 'admin.php?page='.$this->token.'&tab=';

        ?>
        <div class="wrap">
            <h2><?php echo esc_html( $this->page_title ) ?></h2>
            <h2 class="nav-tab-wrapper">
                <a href="<?php echo esc_attr( $link ) . 'general' ?>"
                   class="nav-tab <?php echo esc_html( ( $tab == 'general' || !isset( $tab ) ) ? 'nav-tab-active' : '' ); ?>">General</a>
                <a href="<?php echo esc_attr( $link ) . 'help' ?>" class="nav-tab <?php echo esc_html( ( $tab == 'help' ) ? 'nav-tab-active' : '' ); ?>">Help</a>
            </h2>

            <?php
            switch ( $tab ) {
                case 'general':
                    $object = new Dt_Story_Sets_Tab_General();
                    $object->content();
                    break;
                case 'help':
                    $object = new Dt_Story_Sets_Tab_Help();
                    $object->content();
                    break;
                default:
                    break;
            }
            ?>

        </div><!-- End wrap -->

        <?php
    }
}
Dt_Story_Sets_Menu::instance();

/**
 * Class Dt_Story_Sets_Tab_General
 */
class Dt_Story_Sets_Tab_General {
    public function content() {
        ?>
        <div class="wrap">
            <div id="poststuff">
                <div id="post-body" class="metabox-holder columns-2">
                    <div id="post-body-content">
                        <!-- Main Column -->

                        <?php $this->main_column() ?>

                        <!-- End Main Column -->
                    </div><!-- end post-body-content -->
                    <div id="postbox-container-1" class="postbox-container">
                        <!-- Right Column -->

                        <?php $this->right_column() ?>

                        <!-- End Right Column -->
                    </div><!-- postbox-container 1 -->
                    <div id="postbox-container-2" class="postbox-container">
                    </div><!-- postbox-container 2 -->
                </div><!-- post-body meta box container -->
            </div><!--poststuff end -->
        </div><!-- wrap end -->
        <?php
    }

    public function main_column() {
        $token = Dt_Story_Sets_Menu::instance()->token;
        $this->process_form_fields( $token );

        $story_sets_settings = get_option( $token . '_story_sets_settings' );
        ?>
        <form method="post">
            <?php wp_nonce_field( 'dt_admin_form', 'dt_admin_form_nonce' ) ?>
            <table class="widefat striped">
                <thead>
                <tr>
                    <th><?php esc_html_e( 'Story Sets Settings', 'dt-story-sets' ) ?></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <?php esc_html_e( 'Story Sets Option', 'dt-story-sets' ) ?>
                    </td>
                    <td>
                        <input type="text" name="story-sets-option" placeholder="" value="<?php echo esc_attr( $story_sets_settings ) ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="button"><?php esc_html_e( 'Save', 'dt-story-sets' ) ?></button>
                    </td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </form>
        <br>
        <?php
    }

    public function process_form_fields( $token ){
        if ( isset( $_POST['dt_admin_form_nonce'] ) &&
            wp_verify_nonce( sanitize_key( wp_unslash( $_POST['dt_admin_form_nonce'] ) ), 'dt_admin_form' ) ) {

            $post_vars = dt_recursive_sanitize_array( $_POST );

            if ( isset( $post_vars['story-sets-option'] ) ) {
                update_option( $token . '_story_sets_settings', $post_vars['story-sets-option'] );
            }
        }
    }

    public function right_column() {
        ?>
        <!-- Box -->
        <table class="widefat striped">
            <thead>
                <tr>
                    <th><?php esc_html_e( 'Story Sets Information', 'dt-story-sets' ) ?></th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <?php esc_html_e( 'Configure your story sets here.', 'dt-story-sets' ) ?>
                </td>
            </tr>
            </tbody>
        </table>
        <br>
        <!-- End Box -->
        <?php
    }
}


/**
 * Class Dt_Story_Sets_Tab_Help
 */
class Dt_Story_Sets_Tab_Help {
    public function content() {
        ?>
        <div class="wrap">
            <div id="poststuff">
                <div id="post-body" class="metabox-holder columns-2">
                    <div id="post-body-content">
                        <!-- Main Column -->

                        <?php $this->main_column() ?>

                        <!-- End Main Column -->
                    </div><!-- end post-body-content -->
                    <div id="postbox-container-1" class="postbox-container">
                        <!-- Right Column -->

                        <?php $this->right_column() ?>

                        <!-- End Right Column -->
                    </div><!-- postbox-container 1 -->
                    <div id="postbox-container-2" class="postbox-container">
                    </div><!-- postbox-container 2 -->
                </div><!-- post-body meta box container -->
            </div><!--poststuff end -->
        </div><!-- wrap end -->
        <?php
    }

    public function main_column() {
        ?>
        <!-- Box -->
        <table class="widefat striped">
            <thead>
            <tr>
                <th><?php esc_html_e( 'Help', 'dt-story-sets' ) ?></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <?php esc_html_e( 'Find more information about Story Sets here.', 'dt-story-sets' ) ?>
                </td>
            </tr>
            </tbody>
        </table>
        <br>
        <!-- End Box -->
        <?php
    }

    public function right_column() {
        ?>
        <!-- Box -->
        <table class="widefat striped">
            <thead>
                <tr>
                    <th><?php esc_html_e( 'Resources', 'dt-story-sets' ) ?></th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <?php esc_html_e( 'Documentation, support, etc.', 'dt-story-sets' ) ?>
                </td>
            </tr>
            </tbody>
        </table>
        <br>
        <!-- End Box -->
        <?php
    }
}

