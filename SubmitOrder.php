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

$order_email = $_POST['order_email'];
$order_type = $_POST['order_type'];
$order_service = $_POST['order_service'];
$order_target = $_POST['order_target'];
$order_count = $_POST['order_count'];
$order_date = $_POST['order_date'];
$order_status = $_POST['order_status'];

$service_coin = $_POST['service_coin']; //in tedad sekei hast ke kam mishe az hesabe user va hazine sefareshesh hast




    $Sql_Query = "INSERT INTO orders (order_email,order_type,order_service,order_target,order_count,order_status,order_date) values ('$order_email','$order_type','$order_service','$order_target','$order_count','$order_status','$order_date')";

    if(mysqli_query($con,$Sql_Query))
    {
        //submitt Done now decrease coin


        $decrease_Query = "UPDATE users SET user_coin = user_coin - '$service_coin' WHERE user_email = '$order_email'";
        if(mysqli_query($con,$decrease_Query)){
            echo 'done';
        }


    }
    else
    {
        //submit Failed
        echo 'failed';

    }

mysqli_close($con);


?>