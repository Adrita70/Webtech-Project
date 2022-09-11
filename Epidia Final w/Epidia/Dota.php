<?php
if(isset($_POST['DT']))
{
    header("location: Dota.php");  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Dota.css">
</head>
<body>
<div>
<h1 style="text-align: center;">DOTA 2 TEAMS</h1><br>
    <div id="myDIV">
<div class= "img1">
<img src="TS.jpg" alt="Image" width="250" height="250">
            <a href="https://teamsecret.gg/pages/dota-2"> 
            <input type="button" value="TEAM SECRET"><br><br>
            </a>
</div>
<div class=  "img2">
    <img src="TL.jpg" alt="Image" width="250" height="250">

            <a href="https://www.teamliquid.com/players#dota2">
            <input type="button" value="TEAM LIQUID"><br><br>
            </a>
            </div>
    <div class= "img3">
    <img src="EG.jpg" alt="Image" width="250" height="250">         
            <a href="https://evilgeniuses.gg/teams/dota2/">
            <input type="button" value="EVIL GENIUSES"><br><br>
            </a>
    </div>
    
    <div id= "img4">
    <img src="FT.jpg" alt="Image" width="250" height="250">

            <a href="https://fnatic.com/esports/dota-2">
            <input type="button" value="FNATIC"><br><br>
            </a>
    </div>      

    <div class= "img5">
    <img src="OOG.jpg" alt="Image" width="250" height="250">
            <a href="https://ogs.gg/team/og/">
            <input type="button" value="OG"><br><br>
            </a> 
            </div>          
</div>
</body>
</html>