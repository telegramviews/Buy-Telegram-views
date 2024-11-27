<?php
$username = "hearingaid_developer";
$password = "Elyas18132";
$host = "localhost";
$database="hearingaid_application";

header('Content-Type: text/html; charset=utf-8');

    $con = mysqli_connect($host,$username,$password,$database);
    $con->set_charset("utf8");
    $email = $_POST['email'];

    $Sql_Query = "select * from orders where order_email = '$email' ORDER BY order_id DESC";
    $check = mysqli_fetch_array(mysqli_query($con,$Sql_Query));

    if(isset($check)){

        //Return Data As Json
        $sth = mysqli_query($con,$Sql_Query);
        $rows = array();
        while($r = mysqli_fetch_assoc($sth)) {
            $rows[] = $r;
        }
        echo json_encode($rows);

    }
    else{
        //Failed
        echo "failed";
    }


mysqli_close($con);



?>