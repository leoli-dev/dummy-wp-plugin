<?php
/**
 * Plugin Name:       Dummy Wordpress Plugin
 * Description:       A dummy test for Github Hosting Wordpress Plugin
 * Version:           1.1.1
 * Author:            Leo
 * Author URI:        https://leoli.dev
 */

if (! class_exists('DummyUpdater')) {
	include_once(plugin_dir_path(__FILE__) . 'DummyUpdater.php');
}

$updater = new DummyUpdater(__FILE__);
$updater->setUsername('ajielee');
$updater->setRepository('dummy-wp-plugin');
// $updater->authorize('abcdefghijk1234567890');
$updater->initialize();
