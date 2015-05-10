<?php
include('core.php');
$sess = new Session();

    if(Session::get('energy02') <= 0) {
        echo "<br/><div class='victory' ><span class='attack_p_02'> Player " . Session::get('player01') . " (". Session::get('type01') . ") CONQUERED  " . Session::get('player02') . " (". Session::get('type02') .") </span></div><br/><hr/>";
        $sound_src_win = 'sounds/win.mp3';
        echo '<EMBED SRC="'.$sound_src_win.'" HIDDEN="TRUE" AUTOSTART="TRUE"></EMBED>';
        Session::put('win', 1);

    } elseif(Session::get('energy01') <= 0) {
        echo "<br/><div class='victory' ><span class='attack_p_02'> Player " . Session::get('player02') . " (". Session::get('type02') . ") CONQUERED  " . Session::get('player01') . " (". Session::get('type01') .") </span></div><br/><hr/>";
        $sound_src_win = 'sounds/win.mp3';
        echo '<EMBED SRC="'.$sound_src_win.'" HIDDEN="TRUE" AUTOSTART="TRUE"></EMBED>';
        Session::put('win', 1);

    }elseif(Session::get('energy02') > 0 && Session::get('energy01') > 0) {
    
       $weap = $_GET['weapon'];
       
       $krug = Session::get('circle') + 1;
       Session::put('circle',  $krug);
      
       ## ATTACK BY player
       $weapon = Descriptions::weapon($weap); //cime napada igrac
       
       $state = Session::get('energy02'); //stanje energije
       $state2 = Attack::att($weapon, Session::get('type01'), Session::get('type02'));
       
       $energy01 = $state - $state2;
       
       Session::put('energy02', $energy01);
       
       $namex = "";
       $namex .= "<span class='turn1'>TURN</span>";
       $namex .= "<span class='circle'>" . Session::get('circle') . "</span><span class='right_points'> -" . $state2 . " (" . Session::get('energy02') . ") " ."</span><br/><hr/>";
       
       ## ATTACK BY player
       $back1 = Descriptions::back();
       
       echo "<div class='div1' style='background:$back1;'><span class='attack_p_01'>Player " . Session::get('player01') . " (". Session::get('type01') . ") attacks " . Session::get('player02') . " (". Session::get('type02') .") using <span class='power'>" . $weapon . "</span> as weapon with power of &nbsp<span class='power'>" . $state2 . "</span> --> </span></div>";
       $namer = Session::get('turn') . $namex;
       Session::put('turn', $namer);

    } 
?>

