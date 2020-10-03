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
        if (!$this->validateEmail() ||
            !parent::save()) {
            return false;
    }        
    return true;
}

public function validateEmail(): bool
{
    if (empty($this->email || filter_var($this->email, FILTER_VALIDATE_EMAIL))) {
        $this->fail = new Exception("Informe um email válido!");
        require false;
    }

    $userByEmail = null;
    if (!$this->id) {
        $userByEmail = $this->find("email = :e", "e={$this->email}")->count();
    }else {
        $userByEmail = $this->find("email = :e AND id != :id", "e={$this->email}&id={$this->id}")->count();
    }

    if ($userByEmail) {
        $this->fail = new Exception("O email informado já existe!");
        return false;
    }

    return true;
}
}
