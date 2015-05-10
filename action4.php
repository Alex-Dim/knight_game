<?php 
    include('core.php');
    $sess = new Session();
?>   
<link rel="stylesheet" href="css/style.css"/>
<script src="js/javascript.js"/></script>
<audio id="audio1" src="sounds/axe.mp3" ></audio>
<audio id="audio2" src="sounds/sword.mp3" ></audio>   

    
<div id="commands">
    <label class="choo">Choose weapon of attack (When you press weapon attack occurs) : </label><br/><br/>
    <input type="submit" id="sub_w" name="submit1" value="ATTACK BY AXE" class="attack" onclick="play1(), ajaxx(1), setTimeout(function(){ajaxx1()},1000), setTimeout(function(){ajaxx2()},1500), setTimeout(function(){hide('game_field41')},2000), setTimeout(function(){ajaxx3()},2000)" /> 
    <input type="submit" id="sub_w" name="submit2" value="ATTACK BY SWORD" class="attack1" onclick="play2(), ajaxx(2), setTimeout(function(){ajaxx1()},1000), setTimeout(function(){ajaxx2()},1500) ,setTimeout(function(){hide('game_field41')},2000) , setTimeout(function(){ajaxx3()},2000)" />
    <input type="submit" id="sub_w" name="submit3" value="END GAME" class="end" onclick="end(), setTimeout(function(){go()},100)" />
    <hr/><p class="strd">GAME STARTED</p><hr/>
</div>
       
<div id="fieldx"></div>

    <div id="game_field41">
            <table class="tab_left">
                <tr>
                    <td class="pl_en_m">ENERGY:</td>
                    <td class="pl1_en"><?php echo Session::get('energy01');?></td>
                </tr>
            </table> 
            <table class="tab_right">
                <tr>
                    <td class="pl_en_m">ENERGY:</td>
                    <td class="pl2_en"><?php echo Session::get('energy02');?></td>
                </tr>
            </table>
            <br/>
            <br/>
            <br/>
            <br/>
            <hr/>
    </div>

