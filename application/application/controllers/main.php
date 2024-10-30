<?php

class Main extends Controller {
	
	function index()
	{
		$template = $this->loadView('main_view');
        $template->set('urlhelper',$this->loadHelper('url_helper'));
        $template->set('htmlhelper',$this->loadHelper('html_helper'));
        $template->set('title',MISPORT_STATS_PLUGIN_APP_TITLE);
		$template->render();
	}
    function embed() {
        $template = $this->loadView('howto_view');
        $template->set('urlhelper',$this->loadHelper('url_helper'));
        $template->set('htmlhelper',$this->loadHelper('html_helper'));
        $template->set('title',MISPORT_STATS_PLUGIN_APP_TITLE);
        $template->render();        
    }
    function about() {
        $template = $this->loadView('about_view');
        $template->set('urlhelper',$this->loadHelper('url_helper'));
        $template->set('htmlhelper',$this->loadHelper('html_helper'));
        $template->set('title',MISPORT_STATS_PLUGIN_APP_TITLE);
        $template->render();        
    }    
}

?>