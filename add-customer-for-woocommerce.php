<?php

/**
 * Plugin Name: Add Customer for WooCommerce
 * Description: Allows you to add a customer when a new order is created at the orders page.
 * Version: 1.0
 * Author: Dan's Art
 * Author URI: http://dev.dans-art.ch
 * Text Domain: wac
 * License: GPLv2 or later
 *
 */


/**
 * Load the classes and tools
 */
require_once('include/tools/helper.php');
require_once('include/classes/wac.php');
require_once('include/classes/wac-admin.php');


$wac = new woo_add_customer();
$wac->wac_admin_init();
