<?php
/**
 * Plugin Name: FCC [Plugin Title Goes Here]
 * Description: [Plugin Description Goes Here]
 * Plugin URI:  https://github.com/openfcci/fcc-featured-image-caption/
 * Author:      Forum Communications Company
 * Author URI:  http://www.forumcomm.com/
 * License:     GPL v2 or later
 * Version:     0.YY.MM.DD
 */

/********************************* NOTES ***************************************
Things to replace:
  # Text Domain: Find/Replace 'fcc-plugin-template' with the new text domain
	# Function Prefix: Find/Replace 'fcc-plugin-template' with the new prefix
	# Prefixes: Find/Replace 'fcc_' if not an FCC plugin
	# File Name: fcc-plugin-template.php
	# Folder Name: /fcc-plugin-template/
	# Delete the 'assets', 'templates' and 'includes' folders if not used for plugin.
*******************************************************************************/

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/*--------------------------------------------------------------
# PLUGIN ACTIVATION/DEACTIVATION HOOKS
--------------------------------------------------------------*/

/**
 * Plugin Activation Hook
 */
function fcc_plugin_template_plugin_activation() {
	flush_rewrite_rules(); // Flush our rewrite rules on activation.
}
register_activation_hook( __FILE__, 'fcc_plugin_template_plugin_activation' );

/**
 * Plugin Deactivation Hook
 */
function fcc_plugin_template_plugin_deactivation() {
	flush_rewrite_rules(); // Flush our rewrite rules on deactivation.
}
register_deactivation_hook( __FILE__, 'fcc_plugin_template_plugin_deactivation' );

/*--------------------------------------------------------------
# LOAD INCLUDES FILES
--------------------------------------------------------------*/

/**
 * Load "includes" files.
 */
function _fcc_plugin_template_load_includes() {
	//require_once( plugin_dir_path( __FILE__ ) . '/includes/*.php' );
}
add_action( 'init', '_fcc_plugin_template_load_includes', 99 );

/**
 * Load these "includes" only if the user is on the Admin Dashboard
 */
if ( is_admin() ) {
	//require_once( plugin_dir_path( __FILE__ ) . '/includes/*.php' );
}

/*--------------------------------------------------------------
# SECTION NAME
--------------------------------------------------------------*/

/**
* Description
*
* @author Firstname Lastname <firstname.lastname@forumcomm.com>
* @source [add url/link to source for documentation or reference if code was borrowed]
* @since 0.YY.MM.DD
* @version 0.YY.MM.DD
*/
