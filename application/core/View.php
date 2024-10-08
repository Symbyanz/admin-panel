<?php

namespace application\core;

class View {

	public $path;
	public $route;
	public $layout = 'default';


	public function __construct($route){
		$this->route = $route;
		$this->path = $route['controller'];
	}


	public function render($title, $vars = []) {

		if(file_exists('application/views/'.$this->path.'.php')){
			
			ob_start();
			require 'application/views/'.$this->path.'.php';
			$content = ob_get_clean();
			require 'application/views/layouts/'.$this->layout.'.php';
		
		} else {
			echo "View not found (path): ".$this->path;
		}

	}

	public function redirect($url){
		header('location: '.$url);
		exit;
	}

	public static function errorCode($code){
		http_response_code($code);
		$path = 'application/views/errors/'.$code.'.php';
		if(file_exists($path)){
			require $path;
		} else {
			echo "Error page not found";
		}
		exit;
	}
}