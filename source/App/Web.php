<?php 

namespace Source\App;

use Source\Core\Connect;
use Source\Core\Controller;
use Source\Support\Pager;
use Source\Models\Contact;



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
    	 
    	$contacts = (new Contact())->find()->fetch(true);
    	$paginator = new Pager("https://www.localhost/projetos/CRUD/");
    	$paginator->pager($contacts->count(), 5, ($data["page"] ?? 1), 2);
    	
    	echo $this->view->render('home', [
    		"title" => "Bem vindo a sua agenda de contatos.", 
    		"contacts" => $contacts 
    	]);
    }
}
