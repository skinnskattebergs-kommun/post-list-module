<?php
/*
 * Plugin Name: Post Lista Modul
 * Plugin URI: -
 * Description: Post Lista Modul (baserad på Inläggsmodulen i Modularity)
 * Version: 1.0
 * Author: Tobias Melander
 */

define('POSTLISTMODULE_PATH', plugin_dir_path(__FILE__));
define('POSTLISTMODULE_URL', plugins_url('', __FILE__));
define('POSTLISTMODULE_TEMPLATE_PATH', POSTLISTMODULE_PATH . 'templates/');
define('POSTLISTMODULE_MODULE_PATH', POSTLISTMODULE_PATH . 'source/php/');

require_once POSTLISTMODULE_PATH . 'source/php/Vendor/Psr4ClassLoader.php';
require_once POSTLISTMODULE_PATH . 'Public.php';

// Instantiate and register the autoloader
$loader = new PostListModule\Vendor\Psr4ClassLoader();
$loader->addPrefix('PostListModule', POSTLISTMODULE_PATH);
$loader->addPrefix('PostListModule', POSTLISTMODULE_PATH . 'source/php/');
$loader->register();

//Acf auto import and export
add_action('plugins_loaded', function () {
  $acfExportManager = new \AcfExportManager\AcfExportManager();
  $acfExportManager->setExportFolder(POSTLISTMODULE_PATH . 'acf-fields/');
  $acfExportManager->autoExport(array(
    'mod_post_list' => 'group_6461b5d777054',
  ));
  $acfExportManager->import();
});
/**
 * Registers the module
 */
add_action('plugins_loaded', function () {
  if (function_exists('modularity_register_module')) {
    modularity_register_module(
      POSTLISTMODULE_MODULE_PATH,
      'App'
    );
  }
});
