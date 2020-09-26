<?php 

namespace Source\App;

use Source\Core\Connect;
use Source\Core\Controller;
use Source\Support\Pager;
use Source\Models\Contacts;



$page = filter_input(INPUT_GET, "page", FILTER_VALIDATE_INT);


/**
 * App controller
 */
class Web extends Controller
{
    /**
     * construct
     */
    public function __construct($router)
    {
    	parent::__construct($router);
    	Connect::getInstance();
    }

    public function home($data): void
    {
    	echo $this->view->render('home', [
    		"title" => "Bem vindo a sua agenda de contatos.", 
    		""]);
    }
}
