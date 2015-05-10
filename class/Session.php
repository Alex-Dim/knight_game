<?php


/**
* File: Sessions.php
* Description: class that controls sessions
* Author: Alex Dim
* @mail:aleksdimitrievski7@gmail.com
 */
class Session {
    
    // ----------------------------------------------------------------------
    
    public function __construct() {
        session_start();
    }
    
    // ----------------------------------------------------------------------
    
    public static function exists($k, $k2 = false) {
        if($k2 == false) {
            return (isset($_SESSION[$k])) ? true : false;
        } elseif($k2 == true) {
            return (isset($_SESSION[$k][$k2])) ? true : false;
        }
    }
    
    // ----------------------------------------------------------------------

    public static function get($k, $k2 = false) {
        if($k2 == false){
            if(static::exists($k)) {
                return $_SESSION[$k];
            }
            return false;
        } elseif($k2 == true) { 
            if(self::exists($k, $k2)) {
                return $_SESSION[$k][$k2];
            }
            return false;
        }
    } 
    
    // ----------------------------------------------------------------------
    
    public static function terminate() {
        unset($_SESSION);
        session_destroy();
        static::regenerate();
    }


    // ----------------------------------------------------------------------
    
    public static function regenerate() {
        session_regenerate_id();
    }
    
    // ----------------------------------------------------------------------
    
    public static function put($key, $value) {
        return $_SESSION[$key] = $value;
    }

    // ----------------------------------------------------------------------
    
    public static function delete($key) {
        if(static::exists($key)) {
            unset($_SESSION[$key]);
        }
    }

    // ----------------------------------------------------------------------
    
    
}
