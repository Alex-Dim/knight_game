<?php
include('core.php');
$sess = new Session();
?>

    <link rel="stylesheet" href="css/style.css"/>
    <script src="js/javascript.js"/></script>
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
<?php 

if(Session::exists('win')) {
         
        echo "<div class='victory'>GAME OVER START <a style='color:white;' href='javascript:window.parent.location.reload()'>NEW GAME</a></div><hr/>";
    ?>
            <style>
                #commands {
                    display: none;
                }
            </style>
    <?php   
        Session::terminate();
}

?>