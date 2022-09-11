
<?php
    if(isset($_SESSION["usname"]))
    { 
        header("refresh: 1; url=Dashboard.php");
    }
    if(isset($_POST["submit"])){
        $user = $_post['username'];
        $pass = $_post['Password'];
        if($user=="admin" && $pass=="admin"){
            echo("welcome");
        }else{
           echo ("please enter correct data");
        }

    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>SignUp</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Admin Login</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" >
			</div>
			
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" >
            </div>
            
			<div class="input-group">
            <a href="Dashboard.php">
                <input type="button" name="s" value="LOGIN"><br>  
			</div>
		</form>
	</div>
</body>
</html>