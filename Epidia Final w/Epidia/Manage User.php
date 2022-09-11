<?php
if(isset($_POST['MU']))
{
    header("location: Manage User.php");  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Manage User Profile</h2>
<input type="button" value="Show Users"><br><br>
<input type="text" name="person" placeholder="Search Users From Here"></div>
<input type="button" value="Search Users"><br><br>
<input type="text" name="perso" placeholder="Ban Users From Here"></div>
<input type="button" value="Ban Users"><br><br>
</body>
</html>