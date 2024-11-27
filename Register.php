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

$user_phone = $_POST['phone'];
$user_fullname = $_POST['fullname'];
$user_password = $_POST['password'];
$user_email = $_POST['email'];
$user_type = $_POST['user_type'];
$register_date = $_POST['register_date'];

$CheckSQL = "SELECT * FROM users WHERE user_email='$user_email'";


$check = mysqli_fetch_array(mysqli_query($con,$CheckSQL));

if(isset($check)){
    //Phone Exists
    echo 'exists';
}
else{
    $Sql_Query = "INSERT INTO users (user_email,user_password,user_fullname,user_coin,user_phone,user_type,register_date) values ('$user_email','$user_password','$user_fullname','0','$user_phone','$user_type','$register_date')";

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
}

mysqli_close($con);


?>