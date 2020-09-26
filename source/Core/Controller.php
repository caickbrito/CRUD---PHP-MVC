<?php 


namespace Source\Core;

use Source\Support\Seo;
use CoffeeCode\Source\Router;
use League\Plates\Engine;

/**
 * 
 *Controlador
 * 
 */

abstract class Controller
{
	/**
	 * @var Engine
	 */
	protected $view;
	/**
	 * @var Optimizer
	 */
	protected $seo;
	/**
	 * @var Router
	 */
	protected $router;

	/**
	 * Construtor do controle
	 * @param string|null $pathToViews 
	 * @return type
	 */
	function __construct($router)
	{
		$this->router = $router;
		$this->view = Engine::create(__DIR__."/../../themes/" . CONF_VIEW_THEME . "/", 'php');
		$this->seo = new Seo();
		$this->view->addData(["router" => $this->router]);
	}	 


	/**
	 * Resposta ajax
	 * @param string $param 
	 * @param array $values 
	 * @return type
	 */
	public function ajaxResponse(string $param, array $values)
	{
		return json_encode([$param => $values]);
	}
}




