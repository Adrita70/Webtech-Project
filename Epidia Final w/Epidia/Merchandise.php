<?php
if(isset($_POST['MR']))
{
    header("location: Merchandise.php");  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Merchandize.css">
</head>
<body>
<h2 style="text-align: center;">HERE YOU FOUND YOUR FAVOURITE TEAMS ITEAM</h2>
<div id="myDIV">
<div class= "img1">
<img src="DT.jpg" alt="Image" width="250" height="250">
<form action="DotaS.php" method="post">
<input type="submit" name="DTS" value="Dota 2"><br><br>
</form>
<div class=  "img2">
<img src="VR.jpg" alt="Image" width="250" height="250">
<form action="ValS.php" method="post">
<input type="submit" name="VLS" value="Valorant"><br><br>
</form>
<div class= "img3">
    <img src="AL.jpg" alt="Image" width="250" height="250">
<form action="ApexS.php" method="post">
<input type="submit" name="APS" value="Apex legends"><br><br>
</form>
<div id= "img4">
    <img src="LL.jpg" alt="Image" width="250" height="250">
<form action="LolS.php" method="post">
<input type="submit" name="LOLS" value="League of legends"><br><br>
</form>
<div class= "img5">
    <img src="CG.jpg" alt="Image" width="250" height="250">
<form action="CSS.php" method="post">
<input type="submit" name="CS" value="CS:GO"><br><br>
</form>

</body>
</html>