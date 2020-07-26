<?php

class pluginPrism extends Plugin {

	public function form()
	{
		global $L;

		$html  = '<div>';
		$html .= $L->get('there-are-no-settings-for-this-plugin');
		$html .= '</div>';

		return $html;
	}

	public function siteHead(){

		$html  = '<link href="'.HTML_PATH_PLUGINS.'prism/prism.css" rel="stylesheet">';
		return $html;

    }

 	public function siteBodyEnd()
 	{

 		$html  = PHP_EOL.'<script src="'.HTML_PATH_PLUGINS.'prism/prism.js"></script>'.PHP_EOL;
 		return $html;
	}

}
