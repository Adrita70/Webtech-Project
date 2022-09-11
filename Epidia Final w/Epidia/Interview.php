<?php
if(isset($_POST['IN']))
{
    header("location: Interview.php");  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Games.css">
</head>
<body>
    <h1 style="text-align: center;">Here You Get the Players Interview</h1>
    <div id="myDIV">
<div class= "img1">
    <img src="VR.jpg" alt="Image" width="250" height="250">
    <a href="https://esportimes.com/en/interview-with-more-esports-valorant-player-shnaznnnn/">
            <input type="button" value="Valorant"><br><br>
            </a>
</div>
<div class=  "img2">
            <img src="DT.jpg" alt="Image" width="250" height="250">
            <a href="https://www.redbull.com/int-en/miracle-dota-2-interview-red-bull-esports">
            <input type="button" value="Dota 2"><br><br>
            </a>
</div>
<div class= "img3">
    <img src="AL.jpg" alt="Image" width="250" height="250">
            <a href="https://thesportsrush.com/csgo-news-hltv-interview-with-csgo-top-1-for-2021-navi-s1mple/">
            <input type="button" value="Cs:Go"><br><br>
            </a>
</div>
<div id= "img4">
    <img src="LL.jpg" alt="Image" width="250" height="250">
            <a href="https://www.reddit.com/r/leagueoflegends/comments/1fogic/interview_with_former_sc2_pro_now_lol_player/">
            <input type="button" value="League Of Legends"><br><br>
            </a>
</div>
<div class= "img5">
    <img src="CG.jpg" alt="Image" width="250" height="250">
            <a href="https://dignitas.gg/articles/blogs/Unknown/14942/interview-with-pro-apex-legends-player-teq">
            <input type="button" value="Apex Legends"><br><br>
            </a>
</div>
    </div>
</body>
</html>