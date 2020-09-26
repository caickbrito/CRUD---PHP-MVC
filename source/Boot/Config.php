<?php



/**
 * DATABASE
 */
define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "");
define("CONF_DB_NAME", "contatos");


define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "contatos",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);


/* SITE ROOT */
define('SITE', "#Contatos");

define("ROOT", "https://www.localhost/projetos/CRUD");




 /**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "crud");


/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "https://www.localhost/projetos/CRUD");
define("CONF_URL_TEST", "https://www.localhost/projetos/CRUD");
define("CONF_URL_ADMIN",  "/admin");



/**
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "@Caick__Brito");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "@Caick__Brito");
define("CONF_SOCIAL_FACEBOOK_APP", "3066718333396481");
define("CONF_SOCIAL_FACEBOOK_PAGE", "CB Developer");
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "caickbrito");
define("CONF_SOCIAL_GOOGLE_PAGE", "3066718333396481");
define("CONF_SOCIAL_GOOGLE_AUTHOR", "3066718333396481");



/**
 * SITE
 */
define("CONF_SITE_NAME", "Agenda de Contatos");
define("CONF_SITE_TITLE", "#Agenda");
define("CONF_SITE_DESC", "Adicione seus contatos" );
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "https://www.localhost/projetos/CRUD");



/**
 * MESSAGE
 */
define("CONF_MESSAGE_CLASS", "trigger");
define("CONF_MESSAGE_INFO", "info");
define("CONF_MESSAGE_SUCCESS", "success");
define("CONF_MESSAGE_WARNING", "warning");
define("CONF_MESSAGE_ERROR", "error");
