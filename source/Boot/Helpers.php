<?php 
/**
 * ###############
 * ###   URL   ###
 * ###############
 */


use Source\Core\Session;

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


/**
 * @param string $email
 * @return bool
 */
function is_email(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

