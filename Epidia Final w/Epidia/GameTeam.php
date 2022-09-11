<?php
if(isset($_POST['GT']))
{
    header("location: GameTeam.php");  
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
<h1 style="text-align: center;">GAMES</h1><br>
    <div id="myDIV">
<div class= "img1">
<img src="DT.jpg" alt="Image" width="250" height="250">
    <form action="Dota.php" method="post">
<input type="submit" name="DT" value="Dota 2"><br><br>
</form>
    </div>
    <div class=  "img2">
    <img src="VR.jpg" alt="Image" width="250" height="250">
    <form action="Val.php" method="post">
<input type="submit" name="VL" value="Valorant"><br><br>
</form>
    </div>
    <div class= "img3">
    <img src="AL.jpg" alt="Image" width="250" height="250">
    <form action="Apex.php" method="post">
<input type="submit" name="AP" value="Apex legends"><br><br>
</form>
    </div>
    <div id= "img4">
    <img src="LL.jpg" alt="Image" width="250" height="250">
    <form action="Lol.php" method="post">
<input type="submit" name="LOL" value="League of legends"><br><br>
</form>
    </div>
    <div class= "img5">
    <img src="CG.jpg" alt="Image" width="250" height="250">
    <form action="CS.php" method="post">
<input type="submit" name="C" value="CS:GO"><br><br>
</form>
    </div>  
</body>
</html>