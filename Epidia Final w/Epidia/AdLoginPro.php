<?php
if (session_status() >=0){
    if(isset($_SESSION["usname"]))
    {
        header("refresh:0.5; url =Dashboard.php");
    }
}
if(isset($_POST["submit"]))
{
    $uname =$_POST["usname"];
    $pass =$_POST["adpass"];

    $Conn = mysqli_connect('localhost', 'root', '','app_users');
    $sql = "SELECT *FROM records WHERE userName = '$usname' and password ='$adpass'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        session_start();

        $_SESSION["usname"] = $usname;

        echo "You are now redirected";
        header("refresh: 2; url = Dashboard.php");
        exit();
    } 
    else{
        echo "User not found";
        header("refresh: 2; url = AdLogin.php");
        exit();
    }
    }
