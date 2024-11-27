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
$user_fullname = $_POST['user_fullname'];
$user_phone = $_POST['user_phone'];
$coin_count = $_POST['coin_count'];
$purchase_price = $_POST['purchase_price'];
$purchase_date = $_POST['purchase_date'];



    $Sql_Query = "INSERT INTO purchase_log (user_email,user_fullname,user_phone,coin_count,purchase_price,purchase_date) values ('$user_email','$user_fullname','$user_phone','$coin_count','$purchase_price','$purchase_date')";

    if(mysqli_query($con,$Sql_Query))
    {
        //Register Done
        echo 'done';
    }
    else
    {
        //Register Failed
        echo 'failed';
    }


mysqli_close($con);


?>