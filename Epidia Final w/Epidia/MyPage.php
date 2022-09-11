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
</head>
<body>
<form action="MyTeam.php" method="post">
<input type="submit" name="MT" value="My Team"><br><br>
</form>
<form action="MyProfile.php" method="post">
<input type="submit" name="MP" value="My Profile"><br><br>
</form>
<form action="SignOut.php" method="post">
<input type="submit" name="SOUT" value="SignOut"><br><br>
</form>
</body>
</html>