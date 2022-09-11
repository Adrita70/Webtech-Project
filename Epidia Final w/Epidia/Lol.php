<?php
if(isset($_POST['LOL']))
{
    header("location: Lol.php");  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="LL.css">
</head>
<body>
<div>
<h1 style="text-align: center;">LEAUGE OF LEGEND TEAMS</h1>
<div id="myDIV">
<div class= "img1">
<img src="FT.jpg" alt="Image" width="250" height="250">
            <a href="https://fnatic.com/esports/league-of-legends">
            <input type="button" value="FNATIC"><br><br>
            </a>
            </div>
<div class=  "img2">
    <img src="TS.jpg" alt="Image" width="250" height="250">

            <a href="https://teamsecret.gg/pages/league-of-legends">
            <input type="button" value="TEAM SECRET"><br><br>
            </a>
            </div>
    <div class= "img3">
    <img src="EG.jpg" alt="Image" width="250" height="250">               
            <a href="https://evilgeniuses.gg/teams/league-of-legends/">
            <input type="button" value="EVIL GENIUSES"><br><br>
            </a>
            </div>
    
    <div id= "img4">
    <img src="TL.jpg" alt="Image" width="250" height="250">
              
            <a href="https://www.teamliquid.com/players#league">
            <input type="button" value="TEAM LIQUID"><br><br>
            </a>
            </div>      

<div class= "img5">
<img src="G2.jpg" alt="Image" width="250" height="250">        
            <a href="https://g2esports.com/blogs/teams/league-of-legends">
            <input type="button" value="G2 ESPORTS"><br><br>
            </a>
            </div>     
</div>
</body>
</html>