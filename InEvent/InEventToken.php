<?php

/*
* Pedro Góes (contato@estudiotrilha.com.br) http://estudiotrilha.com.br
*
* Oficial InEvent's PHP Library
*/

class InEventToken {

    // Global
    public $tokenID = "";
    public $sandbox = 0;
    
	// Store a class instance
    static private $instance;

    // Singleton method
    static public function singleton() {
        
        if (!isset(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c;
        }

        return self::$instance;
    }
}
    
?>