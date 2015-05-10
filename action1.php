<?php
include('core.php');
$sess = new Session();

##
if(Session::get('energy01') <= 0) {
    echo "<br/><div class='victory' ><span class='attack_p_02'> Player " . Session::get('player02') . " (". Session::get('type02') . ") CONQUERED  " . Session::get('player01') . " (". Session::get('type01') .") </span></div><br/><hr/>";
    $sound_src_win = 'sounds/win.mp3';
    echo '<EMBED SRC="'.$sound_src_win.'" HIDDEN="TRUE" AUTOSTART="TRUE"></EMBED>';
    Session::put('win', 1);
} elseif(Session::get('energy02') <= 0){
    echo "<br/><div class='victory' ><span class='attack_p_02'> Player " . Session::get('player01') . " (". Session::get('type01') . ") CONQUERED  " . Session::get('player02') . " (". Session::get('type02') .") </span></div><br/><hr/>";
    $sound_src_win = 'sounds/win.mp3';
    echo '<EMBED SRC="'.$sound_src_win.'" HIDDEN="TRUE" AUTOSTART="TRUE"></EMBED>';
    Session::put('win', 1);
}elseif(Session::get('energy02') > 0 && Session::get('energy01') > 0) {

##
## ATTACK BY Computer
       //odraditi nekako da bude delay izmedju ova dva napada
       $weap2 = rand(1,2);
       $weapon2 = Descriptions::weapon($weap2); //cime napada kompjuter
       
       $sound_src = Descriptions::rand_sound($weapon2);
       
       $statex1 = Session::get('energy01'); //stanje energije
       $statex2 = Attack::att($weapon2, Session::get('type02'), Session::get('type01'));
       
       $energy01x = $statex1 - $statex2;
       
       Session::put('energy01', $energy01x);
       
       $krug = Session::get('circle') + 1;
       Session::put('circle',  $krug);
       
       $namex = "";       
       $namex .= "<span class='circle'>" . Session::get('circle') . "</span><span class='turn2'>TURN</span>";
       $namex .= "<span class='left_points'> -" . $statex2 . " (" . Session::get('energy01') . ") " ."</span><br/><hr/>";
       ## ATTACK BY Computer
       $back = Descriptions::back();
       
       echo "<br/><div class='div1' style='background:$back;'><span class='attack_p_02'> <-- Player " . Session::get('player02') . " (". Session::get('type02') . ") attacks " . Session::get('player01') . " (". Session::get('type01') .") using <span class='power'>" . $weapon2 . "</span> as weapon with power of &nbsp<span class='power'>" . $statex2 . "</span> </span></div><br/><hr/>";
       echo '<EMBED SRC="'.$sound_src.'" HIDDEN="TRUE" AUTOSTART="TRUE"></EMBED>';
        //sleep(1);
       //usleep(500000);

       $namer = Session::get('turn') . $namex;
       Session::put('turn', $namer);
       ## ATTACK BY Computer
       if(Session::get('energy01') <= 0) {
            echo "<br/><div class='victory' ><span class='attack_p_02'> Player " . Session::get('player02') . " (". Session::get('type02') . ") CONQUERED  " . Session::get('player01') . " (". Session::get('type01') .") </span></div><br/><hr/>";
            $sound_src_win = 'sounds/win.mp3';
            echo '<EMBED SRC="'.$sound_src_win.'" HIDDEN="TRUE" AUTOSTART="TRUE"></EMBED>';
            Session::put('win', 1);
       }

       
       
}
       ?>
<link rel="stylesheet" href="css/style.css"/>