
<?php
/**
 * Bootstrap file for Simple Team plugin.
 *
 * This file contains the necessary WordPress configuration/information,
 * basic functions, and sets a few constants.
 *
 * @link              https://andrewadcock.com
 * @since             0.1.0
 * @package           Simple_Team
 *
 * @wordpress-plugin
 * Plugin Name:       Simple Team
 * Plugin URI:        https://andrewadcock.com/simple-team
 * Description:       A simple team plugin with limited options and styles.
 * Version:           0.1.0
 * Author:            Andrew Adcock
 * Author URI:        https://andrewadcock.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       simple-team
 * Domain Path:       /languages
 */

// Prevent direct access to this file.
if ( ! defined( 'WPINC' ) ) {
    die;
}

/**
 * Current plugin version.
 */
define( 'SIMPLE_TEAM_VERSION', '0.1.0' );


/**
 * Code run when the plugin is activated by WordPress
 */
function simple_team_active() {
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-simple-team-activate.php';
    Simple_Team_Activate::activate();
}

register_activation_hook( __FILE__, 'simple_team_activate' );

/**
 * Code run when the plugin is de-activated by WordPress
 */
function simple_team_deactivate() {
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-simple-team-deactivate.php';
    Simple_Team_Deactivate::deactivate();
}

register_deactivation_hook( __FILE__, 'simple_team_deactivate' );
