<?php
/**
* File: Attack.php
* Description: class user for attack in game
* Author: Alex Dim 
 * @mail:aleksdimitrievski7@gmail.com
 */
class Attack extends Abstract_const {
    
    // ----------------------------------------------------------------------
    
    public static function att($weapon = false, $value1, $value2) {
        if($weapon) {
            switch($weapon) {
                case 'Axe':                  
                    $rate = static::$weapon_power_axe[$value1][$value2];
                    return static::rangeOfAttack($rate);
                    break;
                case 'Sword':
                    $rate = static::$weapon_power_sword[$value1][$value2];
                    return static::rangeOfAttack($rate);
                    break;
                default:
                    return false;
                    break;
            }
        }
        return false;
    }
    
    // ----------------------------------------------------------------------
    
    public static function rangeOfAttack($str) {
        $f = explode(',', $str);
        $s1 = $f[0];
        $s2 = $f[1];
        return rand($s1, $s2);
    }
    
    // ----------------------------------------------------------------------
    
}
