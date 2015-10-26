<?php

namespace Hado\Helpers;

Class Session {
    
    private static $sessionId;
    private static $name;

    public static function init(){
        if(!isset($_SESSION)){
            session_start();
            self::$sessionId = session_id();
            self::$name = session_name();
        }
    }
    

    public static function getSessionId(){
        return self::$sessionId;
    }
    

    public static function getSessionName(){
        return self::$name;
    }
    
    
    public static function set($key, $value){
        $_SESSION[$key] = $value;
    }
    

    public static function get($key){
        if(!isset($_SESSION[$key]))
            return FALSE;
        return $_SESSION[$key];
    }
    

    public static function remove($key){
        unset($_SESSION[$key]);
    }
    

    public static function destroy($redirect = null){
        session_destroy();
        if($redirect != null){
            header('location: '. $redirect);
        }
    }
}
/*
$sessionHelper = new SessionHelper();
$sessionHelper->set('poisson','truite');
echo $sessionHelper->get('poisson'); echo '<br/>';
echo $sessionHelper->getSessionId(); echo '<br/>';
echo $sessionHelper->getSessionName(); echo '<br/>';
echo '<a href="page2.php">Se déconnecter</a>'
*/

?>



