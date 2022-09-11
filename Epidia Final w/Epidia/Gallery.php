<?php
if(isset($_POST['GR']))
{
    header("location: Gallery.php");  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Gel.css" />
</head>
<body>
    <h1 style="text-align: center;">GALLERY</h1><br>
    <div id="myDIV">
    <video width="420" height="240" controls>
    <source src="Epidia.mp4" type="video/mp4">
    </video>
    </div>
    <div class= "img1">
    <img src="D1.jpg" alt="Image" width="250" height="250">
    </div>
    <div class=  "img2">
    <img src="V1.jpg" alt="Image" width="250" height="250">
    </div>
    <div class= "img3">
    <img src="A1.jpg" alt="Image" width="250" height="250">

    <div class= "img5">
    <img src="C1.jpg" alt="Image" width="250" height="250">
    </div>  
</body>
</html>