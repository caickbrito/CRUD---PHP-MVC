<?php



/**
 * DATABASE
 */
define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "");
define("CONF_DB_NAME", "ALTERAR");


define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "ALTERAR",
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
define('SITE', "ALTERAR");

define("ROOT", "ALTERAR");




 /**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "ALTERAR");


/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "ALTERAR");
define("CONF_URL_TEST", "ALTERAR");
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
define("CONF_SITE_NAME", "ALTERAR");
define("CONF_SITE_TITLE", "ALTERAR");
define("CONF_SITE_DESC", "ALTERAR" );
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "");



/**
 * MESSAGE
 */
define("CONF_MESSAGE_CLASS", "trigger");
define("CONF_MESSAGE_INFO", "info");
define("CONF_MESSAGE_SUCCESS", "success");
define("CONF_MESSAGE_WARNING", "warning");
define("CONF_MESSAGE_ERROR", "error");



/**
 * MAIL
 */
define("CONF_MAIL_HOST", "smtp.sendgrid.net");
define("CONF_MAIL_PORT", "587");
define("CONF_MAIL_USER", "apikey");
define("CONF_MAIL_PASS", "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");
define("CONF_MAIL_SENDER", ["name" => "Equipe CBdeveloper", "address" => "cbdeveloper3@gmail.com"]);
define("CONF_MAIL_SUPPORT", "cbdeveloper3@gmail.com");


define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");

/**
 * LOGIN 
 * FACEBOOK 
 */ 

define("FACEBOOK_LOGIN", [
    "clientId" => "326155868657760",
    "clientSecret" => "8acdc93aa80597c4a0a6729b6ba1d6f2",
    "redirectUri" => "ALTERAR",  
    "graphApiVersion" => "v4.0"
]);

/**
 * LOGIN 
 * GOOGLE 
 */ 

define("GOOGLE_LOGIN", [
    "clientId" => "961196602786-tmhl9s0qa2g5t4i543q61pgfkp263ieo.apps.googleusercontent.com",
    "clientSecret" => "ZHYyh9EAAjxnNnDDmFtG3gPQ",
    "redirectUri" => "ALTERAR"
]);














 

