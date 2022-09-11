<?php
if(isset($_POST["s"]))
{
    if($_POST["pass"]==$_POST["cpass"])
    {
        $unane= filter_var($_POST["uname"])
        (FILTER_SANITIZE_EMAIL);
        if (filter_var($uname, FILTER_VALIDATE_EMAIL))
        {
            $PASS= $_POST["pass"];
            $conn = mysqli_connect('localhost','root','','app_users');
            $sql="INSERT INTO records(username,password)VALUES('$uname','$pass')";
            if(mysqli_query($conn,$sql))
            {
                session_start();
                $_SESSION["uname"]=$_POST["uname"];
                echo "Sign UP Successfully<br>";
                header('refresh: 4; url = UserPage.php');
            }
        }
        else
        {
            echo"Email format is not correct.";
            header('refresh: 2; url = Login.php');
        }
    }
    else
        {
            echo"Please make sure both password are same.";
            header('refresh: 2; url = Login.php');
        }
}
        else
        {
            if(session_status()==PHP_SESSION_NONE){}
            header("location:Login.php");
        }
?>