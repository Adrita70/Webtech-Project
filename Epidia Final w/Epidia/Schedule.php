<?php
if(isset($_POST['SC']))
{
    header("location:Schedule.php ");  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Schedule.css">
</head>
<body>
<div>
<h1 style="text-align: center;">SCHEDULE</h1><br>
    <div id="myDIV">
<div class= "img1">
<img src="DT.jpg" alt="Image" width="250" height="250">
<a href="https://www.oneesports.gg/dota2/dota-2-2022-dpc-schedule-format-prize-pool/">
    <input type="button" value="Dota 2"><br><br>
    </a>
</div>

<div class=  "img2">
    <img src="VR.jpg" alt="Image" width="250" height="250">
    <a href="https://nerdstreet.com/news/2021/12/north-america-2022-valorant-champions-tour-game-changers-schedule-format">
    <input type="button" value="Valorant"><br><br>
    </a>
    </div>
    <div class= "img3">
    <img src="AL.jpg" alt="Image" width="250" height="250">
    <a href="https://liquipedia.net/apexlegends/Apex_Legends_Global_Series/2021-22/Schedule">
    <input type="button" value="Apex Legends"><br><br>
    </a>
    </div>

    <div id= "img4">
    <img src="LL.jpg" alt="Image" width="250" height="250">
    <a href="https://lolesports.com/schedule?leagues=lcs,lcs-academy">
    <input type="button" value="League Of Legends"><br><br>
    </a>
    </div>
    <div class= "img5">
    <img src="CG.jpg" alt="Image" width="250" height="250">
    <a href="https://egamersworld.com/counterstrike/events/upcoming">
    <input type="button" value="Cs:Go"><br><br>
    </a>
    </div>
        
</div>
</body>
</html>