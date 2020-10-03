<?php 

namespace Source\App;

use Source\Core\Controller;
use Source\Support\Pager;
use Source\Models\Contact;
use Source\Support\Message;
use Plasticbrain\FlashMessages\FlashMessages;
use stdClass;
if (!session_id()) @session_start();

/**
 * App controller
 */
class Web extends Controller
{
    public function __construct($router)
    {    	
    	parent::__construct($router);    	
    }

    public function home(array $data): void
    {   
        $msg = new FlashMessages();

        $contacts = (new Contact())->find();
        $paginator = new Pager("https://www.localhost/projetos/CRUD/");
        $paginator->pager($contacts->count(), 4, ($data["page"] ?? 1), 2);

        echo $this->view->render('home', [
          "title" => "Bem vindo | " . CONF_SITE_TITLE, 
          "users" => $contacts->limit($paginator->limit())->offset($paginator->offset())->fetch(true),
          "paginator" => $paginator->render(),
          "msg" => $msg->display()
      ]);        
    }  

    public function registerPost(array $data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
        $email = filter_var($data['email'], FILTER_VALIDATE_EMAIL);

        $contact = new Contact();
        $contact->name = $data['name'];
        $contact->last_name = $data['last_name'];
        $contact->email = $email;
        $contact->phone = $data['phone'];

        $msg = new FlashMessages();

        if (!$contact->save()) {            
            $msg->error($contact->fail->getMessage());
            $this->router->redirect('web.home');
            return;
        }

        $msg->success("Contato cadastrado com sucesso.");
        $this->router->redirect("web.home");
    }

    public function edit(array $data): void
    {
        $id = filter_var($data['id'], FILTER_SANITIZE_STRIPPED);

        $contact = (new Contact())->find("id = :id", "id={$id}")->fetch();

        $msg = new FlashMessages();
        $form = new stdClass();
        $form->id = $contact->id;
        $form->name = $contact->name;
        $form->last_name = $contact->last_name;
        $form->email = $contact->email;
        $form->phone = $contact->phone;

        echo $this->view->render("edit", [
            "title" => "Editando contato de " . $contact->name,
            "form" => $form,
            "msg" => $msg->display()]);
    }

    public function editPost(array $data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
        $email = filter_var($data['email'], FILTER_VALIDATE_EMAIL);

        $contact = (new Contact())->find("id = :id", "id={$data['id']}")->fetch();

        $contact->name = $data['name'];
        $contact->last_name = $data['last_name'];
        $contact->email = $email;
        $contact->phone = $data['phone'];

        if (!$contact->save()) {
            $msg = new FlashMessages();
            $msg->error($contact->fail->getMessage());

            $this->router->redirect('web.edit', ['id' => $contact->id]);

        }else {
            $msg = new FlashMessages();
            $msg->success("Contato atualizado com sucesso.");            
            $this->router->redirect('web.home');
        }        

    }

    public function delete(array $data): void
    {
        $id = filter_var($data['id'], FILTER_SANITIZE_STRIPPED);

        $contact = (new Contact())->find("id = :id", "id={$id}")->fetch();

        if ($contact->destroy()) {
            $msg = new FlashMessages();
            $msg->success("Contato excluído com sucesso.");
        };        

        $this->router->redirect("web.home");

    }
}


