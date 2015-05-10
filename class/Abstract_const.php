<?php

/**
* File: Abstract_const.php
* Description: abstract class contain files for other classes
* Author: Alex Dim
* @mail:aleksdimitrievski7@gmail.com
 */
abstract class Abstract_const {
    
    // ----------------------------------------------------------------------
    
    const COMP_NAME = 'Computer';
    const WARRIOR_01 = 'Armored warrior';
    const WARRIOR_02 = 'Versatile warrior';
    const WARRIOR_03 = 'Agile warrior';
    
    // ----------------------------------------------------------------------
    
    public static $weapon_power_axe = array('Armored warrior'   => array('Armored warrior' => '10,15', 'Versatile warrior' => '8,12', 'Agile warrior' => '6,8'), 
                                            'Versatile warrior' => array('Armored warrior' => '12,18', 'Versatile warrior' => '7,10', 'Agile warrior' => '6,9'),
                                            'Agile warrior'     => array('Armored warrior' => '14,21', 'Versatile warrior' => '8,11', 'Agile warrior' => '7,10'),
    );
    
    // ----------------------------------------------------------------------
    
    public static $weapon_power_sword = array('Armored warrior'   => array('Armored warrior' => '9,14', 'Versatile warrior' => '6,10', 'Agile warrior' => '4,8'), 
                                              'Versatile warrior' => array('Armored warrior' => '11,17', 'Versatile warrior' => '7,9', 'Agile warrior' => '5,8'),
                                              'Agile warrior'     => array('Armored warrior' => '13,20', 'Versatile warrior' => '8,12', 'Agile warrior' => '7,11'),
    );
    
    // ----------------------------------------------------------------------
    
    public static $warriors = array('Armored warrior', 'Versatile warrior', 'Agile warrior');
    public static $weapons = array(1 => 'Axe', 2 => 'Sword');
    public static $warriors_assoc = array('Armored warrior' => 1, 'Versatile warrior' => 2, 'Agile warrior' => 3);
    public static $warriors_energy = array('Armored warrior' => 125, 'Versatile warrior' => 80, 'Agile warrior' => 58);
    
    // ----------------------------------------------------------------------
    
    public static $warrior_desc = array('Armored warrior' => '<table border="2">
    <tr>
        <td class="war_cen">Armored warrior</td>
    </tr>
    <tr>
        <td class="wep_cen">Weapon Axe<img src="img/axe.svg" width="50" height="25"></td>
    </tr>
    <tr>
        
        <td class="">
            <table>
                <tr>
                    <td class="gray">Attacking Armored warrior</td>
                </tr>
                <tr>
                    <td class="gray">remove between 10 i 15 of his energy</td>
                </tr>
                <tr>
                    <td class="white">Attacking  Versatile warrior</td>
                </tr>
                <tr>
                    <td class="white">remove between 8 i 12 of his energy</td>
                </tr>
                         <tr>
                    <td class="gray">Attacking  Agile warrior</td>
                </tr>
                <tr>
                    <td class="gray">remove between 6 i 8 of his energy</td>
                </tr>
            </table>
        </td>
        
    </tr>
    <tr>
        <td class="wep_cen">Weapon Sword<img src="img/sword.png" width="50" height="25"></td>
    </tr>
     <tr>
        
        <td class="">
            <table>
                <tr>
                    <td class="gray">Attacking  Armored warrior</td>
                </tr>
                <tr>
                    <td class="gray">remove between 9 i 14 of his energy</td>
                </tr>
                <tr>
                    <td class="white">Attacking  Versatile warrior</td>
                </tr>
                <tr>
                    <td class="white">remove between 6 i 10 of his energy</td>
                </tr>
                         <tr>
                    <td class="gray">Attacking  Agile warrior</td>
                </tr>
                <tr>
                    <td class="gray">remove between 4 i 8 of his energy</td>
                </tr>
            </table>
        </td>
        
    </tr>
</table>', 'Versatile warrior' => '<table border="2">
    <tr>
        <td class="war_cen">Versatile warrior</td>
    </tr>
    <tr>
        <td class="wep_cen">Weapon Axe<img src="img/axe.svg" width="50" height="25"></td>
    </tr>
    <tr>
        <td class="">
                        <table>
                <tr>
                    <td class="gray">Attacking  Armored warrior</td>
                </tr>
                <tr>
                    <td class="gray">remove between 12 i 18 of his energy</td>
                </tr>
                <tr>
                    <td class="white">Attacking  Versatile warrior</td>
                </tr>
                <tr>
                    <td class="white">remove between 7 i 10 of his energy</td>
                </tr>
                         <tr>
                    <td class="gray">Attacking  Agile warrior</td>
                </tr>
                <tr>
                    <td class="gray">remove between 6 i 9 of his energy</td>
                </tr>
            </table>
        </td>     
    </tr>
    <tr>
        <td class="wep_cen">Weapon Sword<img src="img/sword.png" width="50" height="25"></td>
    </tr>
     <tr>       
        <td class="">
                        <table>
                <tr>
                    <td class="gray">Attacking  Armored warrior</td>
                </tr>
                <tr>
                    <td class="gray">remove between 11 i 17 of his energy</td>
                </tr>
                <tr>
                    <td class="white">Attacking  Versatile warrior</td>
                </tr>
                <tr>
                    <td class="white">remove between 7 i 9 of his energy</td>
                </tr>
                         <tr>
                    <td class="gray">Attacking  Agile warrior</td>
                </tr>
                <tr>
                    <td class="gray">remove between 5 i 8 of his energy</td>
                </tr>
            </table>
        </td>
    </tr>
</table>', 'Agile warrior' => '<table border="2">
    <tr>
        <td class="war_cen">Agile warrior</td>
    </tr>
    <tr>
        <td class="wep_cen">Weapon Axe<img src="img/axe.svg" width="50" height="25"></td>
    </tr>
    <tr>
        <td class="">
            <table>
                <tr>
                    <td class="gray">Attacking  Armored warrior</td>
                </tr>
                <tr>
                    <td class="gray">remove between 14 i 21 of his energy</td>
                </tr>
                <tr>
                    <td class="white">Attacking  Versatile warrior</td>
                </tr>
                <tr>
                    <td class="white">remove between 8 i 11 of his energy</td>
                </tr>
                         <tr>
                    <td class="gray">Attacking  Agile warrior</td>
                </tr>
                <tr>
                    <td class="gray">remove between 7 i 10 of his energy</td>
                </tr>
            </table>
        </td>
        
    </tr>
    <tr>
        <td class="wep_cen">Weapon Sword<img src="img/sword.png" width="50" height="25"></td>
    </tr>
     <tr>
        <td class="">
                        <table>
                <tr>
                    <td class="gray">Attacking  Armored warrior</td>
                </tr>
                <tr>
                    <td class="gray">remove between 13 i 20 of his energy</td>
                </tr>
                <tr>
                    <td class="white">Attacking  Versatile warrior</td>
                </tr>
                <tr>
                    <td class="white">remove between 8 i 12 of his energy</td>
                </tr>
                         <tr>
                    <td class="gray">Attacking  Agile warrior</td>
                </tr>
                <tr>
                    <td class="gray">remove between 7 i 11 of his energy</td>
                </tr>
            </table>
        </td>
    </tr>
</table>');
    
    // ----------------------------------------------------------------------

}  

?>



