<?php 
namespace Source\Models;

use Source\Core\Model;



/**
 * @Caick Brito
 * Model contact
 */
class Contact extends Model
{
    /**
     * Contact Constructorr
     */
    public function __construct()
    {
        parent::__construct("contatos", ["id"], ["name", "phone"]);
    }


    /**
     * Save
     * @return null|Contact
     */
    public function save()
    {
    	if (!$this->required()) {
    		$this->message->warning("Nome e Telefone não podem ficar em branco.");
    		return false;
    	}

    	if (!is_email($this->email)) {
            $this->message->warning("O e-mail informado não tem um formato válido");
            return false;
        }
    }
}
