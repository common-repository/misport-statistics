<?php

// Defines
define('MISPORT_STATS_PLUGIN_ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('MISPORT_STATS_PLUGIN_APP_DIR', MISPORT_STATS_PLUGIN_ROOT_DIR .'application/');

define('MISPORT_STATS_PLUGIN_DEFAULT_CONTROLLER', 'main');
define('MISPORT_STATS_PLUGIN_ERROR_CONTROLLER', 'error');

// Includes
require(MISPORT_STATS_PLUGIN_ROOT_DIR .'system/model.php');
require(MISPORT_STATS_PLUGIN_ROOT_DIR .'system/view.php');
require(MISPORT_STATS_PLUGIN_ROOT_DIR .'system/controller.php');
require(MISPORT_STATS_PLUGIN_ROOT_DIR .'system/pip.php');

// Define base URL
define('MISPORT_STATS_PLUGIN_BASE_URL', MISPORT_STATS_PLUGIN_APP_URL);
define('MISPORT_STATS_PLUGIN_APP_TITLE', MISPORT_STATS_PLUGIN_PAGE_TITLE);

misport_stats_pip();

?>