<?php
include('core.php');

$sess = new Session();

if(Session::exists('player01') && Session::exists('player02')) {
    header('Location:play.php');
}

if(isset($_POST['submit'])) {

    if(!empty($_POST['player'])) {
        $name = $_POST['player'];
    } else {
        echo '<div class="error">Write down your player name.Field is required*.</div><br/>';
    }
    
    if(!empty($_POST['warrior'])) {
        $type = $_POST['warrior'];
    } else {
        echo '<div class="error">Choose your warrior.Field is required*.</div>';
    }
    
    if(isset($name) && isset($type)) {
        
        $energy01 = Descriptions::energy($type);
        
        Session::put('player01', $name);
        Session::put('type01', $type);
        Session::put('energy01', $energy01);
        
        $name_computer = Descriptions::COMP_NAME;
        $type_computer = Descriptions::chooseWariorComputer();
        $energy02 = Descriptions::energy($type_computer);
        
        Session::put('player02',  $name_computer);
        Session::put('type02',  $type_computer);
        Session::put('energy02', $energy02);
        
        Session::put('circle',  0);
        Session::put('turn', '');
        
        header('Location:play.php');
        
    }
    
}

?>
<html>
<title>KNIGHT BATTLE</title>
<link rel="stylesheet" href="css/style.css"/>
<link rel="shortcut icon" href="img/icon.jpg"/>

<body>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <br/>
    <label for="me">Write your player name:</label><br/>
    <input type="text" name="player" id="me" placeholder="player name" maxlength="8" value="<?php if(isset($_POST['player'])) {echo $_POST['player'];}?>"/><br/><br/>
    
    <label>Choose your warrior:</label><br/>
    <table>
        <tr>
            <td class="war_cen">Energy 125</td>
            <td class="war_cen">Energy 80</td>
            <td class="war_cen">Energy 58</td>
        </tr>
        <tr>
            <td><img src="img/1.png" width="140" height="180"/></td>
            <td><img src="img/2.jpg" width="140" height="180"/></td>
            <td><img src="img/3.jpg" width="140" height="180"/></td>
        </tr>
        <tr>
            <td><input type="radio" value="Armored warrior" name="warrior" id="01" <?php if(isset($_POST['warrior']) && $_POST['warrior'] == 'Armored warrior') echo "checked = 'checked'";?> ><label for="01">Armored warrior</label></td>
            <td><input type="radio" value="Versatile warrior" name="warrior" id="02" <?php if(isset($_POST['warrior']) && $_POST['warrior'] == 'Versatile warrior') echo "checked = 'checked'";?>><label for="02">Versatile warrior</label></td>
            <td><input type="radio" value="Agile warrior" name="warrior" id="03" <?php if(isset($_POST['warrior']) && $_POST['warrior'] == 'Agile warrior') echo "checked = 'checked'";?>><label for="03">Agile warrior</label></td>
        </tr>
    </table>
    <br/>
    <input type="submit" value="START GAME" name="submit" class="submit"/>
</form>
<hr/>
<p>Info about weapon:</p>
<table border="2">
    <tr>
        <td class="war_cen">Armored warrior</td>
        <td class="war_cen">Versatile warrior</td>
        <td class="war_cen">Agile warrior</td>
    </tr>
    <tr>
        <td class="wep_cen">Weapon Axe<img src="img/axe.svg" width="50" height="25"></td>
        <td class="wep_cen">Weapon Axe<img src="img/axe.svg" width="50" height="25"></td>
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
        <td class="wep_cen">Weapon Sword<img src="img/sword.png" width="50" height="25"></td>
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
</table>
<?php include_once("analyticstracking.php") ?>
</body>
</html>