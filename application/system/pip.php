<?php

function misport_stats_pip()
{
   
    // Set our defaults
    $controller = MISPORT_STATS_PLUGIN_DEFAULT_CONTROLLER;
    $action = 'index';
    $url = '';
    
	// Get request url and script url
	$request_url = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : '';
	$script_url  = (isset($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : '';
    	
	// Get our url path and trim the / of the left and the right
	if($request_url != $script_url) {
        $url = trim(preg_replace('/'. str_replace('/', '\/', str_replace('index.php', '', $script_url)) .'/', '', $request_url, 1), '/');
    }
    
	// Split the url into segments
    #$segments = explode('/', $url);
    
    if(!isset($_GET['c'])){
        $segments[0] = 'main';
        $segments[1] = 'index';
    } else {
        $segments = explode('-', $_GET['c']);
    }
    
	// Do default checks
	if(isset($segments[0]) && $segments[0] != '') { $controller = $segments[0]; }
	if(isset($segments[1]) && $segments[1] != '') { $action = $segments[1];     }

	// Get our controller file
    $path = MISPORT_STATS_PLUGIN_APP_DIR . 'controllers/' . $controller . '.php';

	if(file_exists($path)){
        require_once($path);
	} else {
        $controller = MISPORT_STATS_PLUGIN_ERROR_CONTROLLER;
        require_once(MISPORT_STATS_PLUGIN_APP_DIR . 'controllers/' . $controller . '.php');
	}
    
    // Check the action exists
    if(!method_exists($controller, $action)){
        $controller = MISPORT_STATS_PLUGIN_ERROR_CONTROLLER;
        require_once(MISPORT_STATS_PLUGIN_APP_DIR . 'controllers/' . $controller . '.php');
        $action = 'index';
    }
	
	// Create object and call method
	$obj = new $controller;
    die(call_user_func_array(array($obj, $action), array_slice($segments, 2)));
}

?>