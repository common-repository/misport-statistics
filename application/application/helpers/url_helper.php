<?php

class Url_helper {

	function base_url()
	{
		return MISPORT_STATS_PLUGIN_BASE_URL;
	}
    
    function css_url($name) {
        $retval =  MISPORT_STATS_PLUGIN_APP_URL.'static/css/'.$name.'.css';
        return $retval;
    }
    
    function js_url($name) {
        $retval = MISPORT_STATS_PLUGIN_APP_URL.'static/js/'.$name.'.js';        
        return $retval;
    }
        
	function create_url($ctrl,$func) {
        $retval = sprintf('?page=%s&c=%s-%s',$_REQUEST['page'],$ctrl,$func);
        return $retval;    
    }
}

?>