<?php 
namespace Source\Models;


use CoffeeCode\DataLayer\DataLayer;
use CoffeeCode\DataLayer\Connect;
use Exception;


/**
 * @Caick Brito
 * Model contact
 */
class Contact extends DataLayer
{
    /**
     * Contact Constructorr
     */
    public function __construct()
    {
        parent::__construct('contatos', ['name', 'phone'], 'id', false);
    }   
    

    public function findByName(string $name, string $columns = "*"): ?Model
    {
    	$find = $this->find("name = :name", "name={$name}", $columns);
    	
    	return $find->fetch();
    }

    public function findByPhone(int $phone, string $columns = "*"):?Model
    {
    	$find = $this->find("phone = :phone", "phone={$phone}", $columns);

    	return $find->fetch();
    }

    /**
     * Save
     * @return null|Contact
     */
    public function save(): bool
    {           
    	if (!$this->required()) {
    		$this->fail = new Exception("Nome e Telefone não podem ficar em branco.");                       
    		return false;
    	}

        if (!parent::save()) {            
            return false;            
        }    	
        
        return true;
    }
}
