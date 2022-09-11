<?php
session_start();
if(isset($_SESSION["uname"]))
{
    echo "Congratulations!! You sucessfully loggedin"."<br>";
    echo "";    
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>
    <div class="center">
      <h1>Welcome Admin</h1>
      
    
  

    <div>
    <a href="http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=epidia&table=poll&pos=0">
    <button class="button-64" role="button" > Feedback</a></button>
   
        <br>
        <br>
        </div>

        <div>
        
        <button class="button-64" role="button" > <a href="SignOut.php">SignOut</a></button>
   
     
    </div>
    </div>

  </body>
</html>