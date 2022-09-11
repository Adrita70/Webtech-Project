<?php
if(isset($_POST['RK']))
{
    header("location: Rank.php");  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Ranking.css">
</head>
<body>
<h1 style="text-align: center;">PLAYERS RANKING</h1><br>
    <div id="myDIV">
<div class= "img1">
<img src="DT.jpg" alt="Image" width="250" height="250">
<a href=https://pro.eslgaming.com/worldranking/dota2>
<input type="button" value="Dota 2"><br><br>
</a>
</div>
<div class= "img2">
<img src="VR.jpg" alt="Image" width="250" height="250">
<a href=https://www.vlr.gg/rankings>
<input type="button" value="Valorant"><br><br>
</a>

</div>
<div class= "img3">
<img src="AL.jpg" alt="Image" width="250" height="250">
<a href=https://liquipedia.net/apexlegends/Apex_Legends_Global_Series/2020-21/Rankings/North_America/Teams>
<input type="button" value="Apex legends"><br><br>
</a>

 
</div>
<div id= "img5">
    <img src="LL.jpg" alt="Image" width="250" height="250">
<a href=https://www.gosugamers.net/lol/rankings>
<input type="button" value="League of legends"><br><br>
</a>
</div>
<div class= "img6">
<img src="CG.jpg" alt="Image" width="250" height="250">
<a href=https://pro.eslgaming.com/worldranking/csgo>
<input type="button" value="CS:GO"><br><br>
</a><br><br>
</a>
</div>
</body>
</html>