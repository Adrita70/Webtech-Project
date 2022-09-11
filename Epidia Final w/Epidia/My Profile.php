<?php
if(isset($_POST['MP']))
{
    header("location: My Profile.php");  
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
<h1>User Profile</h1>
<input type="text" name="person" placeholder="Update Profile From Here"></div>
<input type="button" value="Update"><br><br>
<input type="text" name="person" placeholder="Add Information From Here"></div>
<input type="button" value="Add"><br><br>
<input type="button" value="Show Quiz Marks"><br><br>
</body>
</html>