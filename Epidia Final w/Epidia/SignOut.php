<?php
if(session_status() >=0)

{
    session_start();
    
    session_unset();

    session_destroy();
    echo "You are now Signing Out";
}
header("refresh: 1; url = Home.php");
?>