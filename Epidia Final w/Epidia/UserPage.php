<?php
session_start();
if(isset($_SESSION["uname"]))
{
    echo "Congratulations!! You sucessfully loggedin"."<br>";
    echo "";    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP APP</title>
    <link rel="stylesheet" href="userpage.css">
</head>
<body>
<h1 style="text-align: center;">WELCOME USERS</h1><br>
<div>
    <button class="button-64" role="button" > <a href="Merchandise.php">Merchandise</a></button>
   
        <br>
        <br>
        </div>

        <div>
    <button class="button-64" role="button" > <a href="Rating.php">Rating</a></button>
   
        <br>
        <br>
        </div>

        <button class="button-64" role="button" > <a href="Gallery.php">Gallery</a></button>
   
   <br>
   <br>
   </div>

   <button class="button-64" role="button" > <a href="Interview.php" >Interview</a></button>
   
   <br>
   <br>
   </div>
   <button class="button-64" role="button" > <a href="Quiz.php" >Quiz</a></button>
   
   <br>
   <br>
   </div>

   <button class="button-64" role="button" > <a href="SignOut.php" >SignOut</a></button>
   
   <br>
   <br>
   </div>
</body>
</html>