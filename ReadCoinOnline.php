<?php
$username = "hearingaid_developer";
$password = "Elyas18132";
$host = "localhost";
$database="hearingaid_application";

header('Content-Type: text/html; charset=utf-8');

    $con = mysqli_connect($host,$username,$password,$database);
    $con->set_charset("utf8");
    $email = $_POST['email'];

    $Sql_Query = "select * from users where user_email = '$email'";
    $check = mysqli_fetch_array(mysqli_query($con,$Sql_Query));

    if(isset($check)){

        //Return User Data As Json
        $sth = mysqli_query($con,$Sql_Query);
        $rows = array();
        while($r = mysqli_fetch_assoc($sth)) {
            $rows[] = $r;
        }
        echo json_encode($rows);

    }
    else{
        //Login Failed
        echo "failed";
    }


mysqli_close($con);



?>