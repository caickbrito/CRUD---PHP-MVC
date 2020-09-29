<?php 
/**
 * ###############
 * ###   URL   ###
 * ###############
 */


use Source\Core\Session;

/**
 * @param string $path
 * @return string
 */
function url(string $path = null): string
{
    if (strpos($_SERVER['HTTP_HOST'], "localhost")){
        if ($path){
            return CONF_URL_TEST . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
        }
        return CONF_URL_TEST;
    }

    if ($path){
        return CONF_URL_BASE . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }

    return CONF_URL_BASE;
}

function url_back(): string {
    return ($_SERVER['HTTP_REFERER'] ?? url());
}


/**
 * @param string $url
 */
function redirect(string $url): void
{
    header("HTTP/1.1 302 Redirect");
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        header("Location: {$url}");
        exit;
    }


    if(filter_input(INPUT_GET, "route", FILTER_DEFAULT) != $url){
        $location = url($url);
        header("Location: {$location}");
        exit;
    }    
}


/** /**
 * Description
 * @param string $imageUrl 
 * @return type
 */
function routeImage(string $imageUrl)
{
    return "https://placeholder.com/1200x628/0984e3/FFFFFF?text={$imageUrl}";
}


/**
 * ################
 * ###   ASSETS   ###
 * ################
 */

function theme(string $path = null): string
{
    if (strpos($_SERVER['HTTP_HOST'], "localhost")) {
        if ($path) {
            return CONF_URL_TEST . "/themes/" . CONF_VIEW_THEME . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
        }
        return CONF_URL_TEST . "/themes/" . CONF_VIEW_THEME;
    }
    if ($path) {
        return CONF_URL_BASE . "/themes/" . CONF_VIEW_THEME . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }
    return CONF_URL_BASE . "/themes/" . CONF_VIEW_THEME;
}


/**
 * Description
 * @param string $path 
 * @param type|bool $time 
 * @return type
 */
function asset(string $path, $time = true): string
{
    $file = ROOT."/themes/crud/assets/{$path}";
    $fileOnDir = dirname(__DIR__, 1)."themes/crud/assets/{$path}";
    
    if($time && file_exists($fileOnDir)) {
        $file .= "?time=" . filemtime($fileOnDir);
    }
    return $file;
}



function flash(string $type = null, string $message = null): ?string
{
    if ($type && $message) {
        $_SESSION['flash'] = [
            "type" => $type,
            "message" => $message
        ];

        //return null;
    }

                
    if (!empty($_SESSION['flash']) && $flash = $_SESSION['flash']) {
        unset($_SESSION['flash']);
        return div($flash['message']);      
    }

    return null;
} 





/**
 * @param string $email
 * @return bool
 */
function is_email(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

