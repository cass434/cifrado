<?php

define('METHOD','AES-256-CBC');
define('SECRET_KEY','seguridaddesoftware');
define('SECRET_IV','101712');

class Encriptacion{
    public static function encryption($string){ //encripta 
        $output=FALSE;
        $key=hash('sha256', SECRET_KEY); 
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_encrypt($string, METHOD, $key, 0, $iv);
        $output=base64_encode($output);
        return $output;
        
        }
        
        public static function decryption($string) { //desencripta
        
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16); 
        $output=openssl_decrypt (base64_decode($string), METHOD, $key, 0, $iv);
        return $output;
        }
        
      
}


?>