<?php
include('core.php');
$sess = new Session();

if(!Session::exists('player01') && !Session::exists('player02')) {
    header('Location:index.php');
}

?>
<html>
    
<link rel="stylesheet" href="css/style.css"/>
<link rel="shortcut icon" href="img/icon.jpg"/>
<title>KNIGHT BATTLE</title>

<body>

<EMBED SRC="sounds/begin.mp3" HIDDEN="TRUE" AUTOSTART="TRUE"></EMBED>

<table class="tab_left">
    <tr>
        <td class="ttd"><img src="img/<?php echo Descriptions::img_src(Session::get('type01'));?>" width="150" height="250" class="fotk" /></td>
    </tr>
    <tr>
        <td><span class="player01"><?php echo Session::get('type01') . "(" . Session::get('player01') . ") STARTING ENERGY(" . Descriptions::energy(Session::get('type01')) . ")";?><span></td>
    </tr>
    <tr>
        <td><?php echo Descriptions::desc(Session::get('type01'));?></td>
    </tr>
</table>


<iframe width="600" height="1000px" src="Playing.php" frameborder="0" class="ifr"></iframe>


<table class="tab_right">
    <tr>
        <td class="ttd"><img src="img/<?php echo Descriptions::img_src(Session::get('type02'));?>" width="150" height="250" /></td>
    </tr>
    <tr>
        <td><span class="player02"><?php echo Session::get('type02') . "(" . Session::get('player02') . ") STARTING ENERGY(" . Descriptions::energy(Session::get('type02')) . ")";?><span></td>
    </tr>
    <tr>
        <td><?php echo Descriptions::desc(Session::get('type02'));?></td>
    </tr>
</table>

<?php include_once("analyticstracking.php") ?>
</body>
</html>