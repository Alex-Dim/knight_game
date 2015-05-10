<?php

/**
* File: Descriptions.php
* Description: class that describes players capabilities inside game
* Author: Alex Dim
* @mail:aleksdimitrievski7@gmail.com
 */
class Descriptions extends Abstract_const {
    
    // ----------------------------------------------------------------------
    
    public static function chooseWariorComputer() {
        $numb = count(static::$warriors);
        $numb = $numb-1;
        $rand = rand(0, $numb);
        return static::$warriors[$rand];
    }
    
    // ----------------------------------------------------------------------
    
    public static function img_src($key) {
        if($key) {
            @$key = static::$warriors_assoc[$key];
            if(isset($key)) {
                switch($key) {
                    case 1 :
                        return '1.png';    
                        break; 
                    case 2 :
                        return '2.jpg';    
                        break;   
                    case 3 :
                        return '3.jpg';    
                        break; 
                    default :
                        return false;
                        break;
                }
            }
            return false;
        }
        return false;
    }
    
    // ----------------------------------------------------------------------
    
    public static function energy($key) {
        if(isset(static::$warriors_energy[$key])) {
            return $key = static::$warriors_energy[$key];
        }
        return false;
    }
    
    // ----------------------------------------------------------------------
    
    public static function desc($key) {
        if(isset(static::$warrior_desc[$key])) {
            return static::$warrior_desc[$key];
        }
        return false;
    }
    
    // ----------------------------------------------------------------------
    
    public static function weapon($key) {
        if(isset(static::$weapons[$key])) {
            return static::$weapons[$key];
        }
        return false;
    }
    
    // ----------------------------------------------------------------------
    
    public static function back() {
        $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
        return $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
    }
    
    // ----------------------------------------------------------------------
    
    public static function rand_sound($str) {
        if($str) {
            switch($str) {
                case 'Axe':
                    return 'sounds/axe.mp3';
                    break;
                case 'Sword':
                    return 'sounds/sword.mp3';
                    break;
                default:
                    return false;
                    break;
            }
        }
        return false;
    }
    
    // ----------------------------------------------------------------------
    
    public static function sight($str) {
            switch($str) {
                case 1:
                    return 'hidden';
                    break;
                case 0:
                    return 'visible';
                    break;
                default:
                    return 'visible';
                    break;
            }
    }
    
    // ----------------------------------------------------------------------
    
}
