<?php
/**
 * Plugin Name:     Use Global Package For Upgrade
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     use-global-package-for-upgrade
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Use_Global_Package_For_Upgrade
 */

// Your code starts here.


add_filter( 'core_version_check_locale', function () {
	return 'en_US';
});
