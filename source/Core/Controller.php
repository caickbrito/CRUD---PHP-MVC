<?php 


namespace Source\Core;

use Source\Support\Seo;
use CoffeeCode\Source\Router;
use League\Plates\Engine;

abstract class Controller
{
	/**
	 * @var Engine
	 */
	protected $view;	
	/**
	 * @var Router
	 */
	protected $router;

	/* @param string|null $pathToViews 
	 * @return type
	 */
	function __construct($router)
	{
		$this->router = $router;
		$this->view = Engine::create(__DIR__."/../../themes/" . CONF_VIEW_THEME . "/", 'php');		
		$this->view->addData(["router" => $this->router]);
	}	 	
}