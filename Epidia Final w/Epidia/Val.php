<?php
if(isset($_POST['VL']))
{
    header("location: Val.php");  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="val.css">
</head>
<body>
<div>
<h1 style="text-align: center;">VALORANT TEAMS</h1><br>
    <div id="myDIV">
<div class= "img1">
<img src="OGV.jpg" alt="Image" width="250" height="250">
            <a href="https://ogs.gg/team/valorant/">
            <input type="button" value="OG"><br><br>
            </a>
</div>
<div class=  "img2">
    <img src="TL.jpg" alt="Image" width="250" height="250">

            <a href="https://www.sentinels.gg/valorant">
            <input type="button" value="SENTINELS"><br><br>
            </a>
            </div>
    <div class= "img3">
    <img src="FT.jpg" alt="Image" width="250" height="250">
            <a href="https://fnatic.com/esports/valorant">
            <input type="button" value="FNATIC"><br><br>
            </a>
            </div>
    
    <div id= "img4">
    <img src="TL.jpg" alt="Image" width="250" height="250">

            <a href="https://www.teamliquid.com/players#valorant">
            <input type="button" value="TEAM LIQUID"><br><br>
            </a>
            </div>      

<div class= "img5">
<img src="G2.jpg" alt="Image" width="250" height="250">        
            <a href="https://g2esports.com/blogs/teams/valorant">
            <input type="button" value="G2 ESPORTS"><br><br>
            </a>
</div>
</body>
</html>