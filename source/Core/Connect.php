<?php 


namespace Source\Core;


/**
 * Conexão com Banco de Dados
 */
class Connect
{
    /**
     * @const array com configurações
     */
    private const OPTIONS = [
    	\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
        \PDO::ATTR_CASE => \PDO::CASE_NATURAL
    ];

    /**
     * summary
     *
     * @return \PDO
     */
    private static $instance;

    public function getInstance()
    {
    	if (empty(self::$instance)) {
    		try {
    			self::$instance = new \PDO(
    				"mysql:host" . CONF_DB_HOST . ";dbname" . CONF_DB_NAME,
    				CONF_DB_USER,
    				CONF_DB_PASS,
    				self::OPTIONS
    			);
    		} catch (\PDOException $exception) {
    			redirect("/ops/problemas");
    		}
    	}

    	return self::$instance;
    }

    /**
    * Connect constructor
    */
    final private function __construct()
    {    	
    }

    /**
     * Connect clone
     *     
     */
    final private function __clone()
    {
    }
}
