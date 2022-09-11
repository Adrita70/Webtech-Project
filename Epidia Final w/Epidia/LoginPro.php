<?php
if (session_status() >=0){
    if(isset($_SESSION["uname"]))
    {
        header("refresh:0.5; url =MyPage.php");
    }
}
if(isset($_POST["submit"]))
{
    $uname =$_POST["uname"];
    $pass =$_POST["pass"];

    $Conn = mysqli_connect('localhost', 'root', '','app_users');
    $sql = "SELECT *FROM records WHERE userName = '$uname' and password ='$pass'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        session_start();

        $_SESSION["uname"] = $uname;

        echo "You are now Loggedin.";
        header("refresh: 2; url = MyPage.php");
        exit();
    } 
    else{
        echo "User not found";
        header("refresh: 2; url = Login.php");
        exit();
    }
    }
