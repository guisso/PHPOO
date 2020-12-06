<?php

/**
 * Autoloader produzido por Thomas Hunter
 * https://thomashunter.name/posts/2011-08-23-simple-php-namespace-friendly-autoloader-class
 *
 * @author Luis Guisso <luis dot guisso at ifnmg dot edu dot br>
 * @version 0.0.1, 04/12/2020
 */
class Autoloader {

    public static function loader($classe) {
        $arquivo = "classes/" . str_replace("\\", '/', $classe) . ".class.php";
        
        if (file_exists($arquivo)) {
            // Adaptação: require ao invés de include
            require_once($arquivo);
            if (class_exists($classe)) {
                return true;
            }
        }
        return false;
    }

}

spl_autoload_extensions('.class.php');
spl_autoload_register('Autoloader::loader');
