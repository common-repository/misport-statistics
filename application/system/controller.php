<?php

class Controller {
	
	public function loadModel($name)
	{
		require(MISPORT_STATS_PLUGIN_APP_DIR .'models/'. strtolower($name) .'.php');

		$model = new $name;
		return $model;
	}
	
	public function loadView($name)
	{
		$view = new View($name);
		return $view;
	}
	
	public function loadPlugin($name)
	{
		require(MISPORT_STATS_PLUGIN_APP_DIR .'plugins/'. strtolower($name) .'.php');
	}
	
	public function loadHelper($name)
	{
		require(MISPORT_STATS_PLUGIN_APP_DIR .'helpers/'. strtolower($name) .'.php');
		$helper = new $name;
		return $helper;
	}
	
	public function redirect($loc)
	{
		global $config;
		
		header('Location: '. $config['base_url'] . $loc);
	}
    
}

?>