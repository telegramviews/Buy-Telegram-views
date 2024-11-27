<?php
$username = "hearingaid_developer";
$password = "Elyas18132";
$host = "localhost";
$database="hearingaid_application";


header('Content-Type: text/html; charset=utf-8');

$con = mysqli_connect($host,$username,$password,$database);
mysqli_set_charset($con,"utf8");
mysqli_query("SET NAMES 'utf8'");
mysqli_query('SET CHARACTER SET utf8');

$user_email = $_POST['user_email'];
$coin = $_POST['coin']; //in tedad sekei hast ke ezafe mishe be hesabe user


    $decrease_Query = "UPDATE users SET user_coin = user_coin + '$coin' WHERE user_email = '$user_email'";
    if(mysqli_query($con,$decrease_Query)){
    echo 'done';
    }else{

    echo 'failed';

    }



mysqli_close($con);


?>