<?php
//start session
session_start();
//Connect the database
require_once "conn.php";
//Judge whether there is user logged in.
if(isset($_SESSION['flag'])&&$_SESSION['flag']==1){
    header("location:homepage.html");
    exit;
}
//
$username = $_POST["username"];
$password = md5($_POST["password"]);
$isrem = $_POST["isRem"];

if($username =="" || $password==""){
    echo "Both username and password cannot be empty";
    exit;
}
else {
    $str = "select * from user where UserName = '" . $username . "'
            or MobilePhone = '" . $username . "' ";
    $result = mysqli_query($str);
    if (!$result) {
        $json_arr = array("status"=> 102);
        $json_obj = json_encode($json_arr);
        echo $json_obj;
        //echo "The user had not signed in, and please sign in";
        exit;
    }
    else {
        $row = mysqli_fetch_row($result);
        if ($password == $row[2]) {
            $_SESSION['flag'] = 1;
            $_SESSION['username'] = $row[1];
            $_SESSION['userid'] = $row[0];

            //Judge whether need to create cookie
            if($isrem==1){
                setcookie("username",$row[1],time()+3600*24*30);
                setcookie("password",$row[2],time()+3600*24*30);
                $json_arr = array("status"=>101);
                $json_obj = json_encode($json_arr);
                echo $json_obj;
                //header("lcoation:homepage.html");

            }
            else{
                header("lcoation:homepage.html");
            }
            exit;
        } else {
            //Wrong password
            $json_arr = array("status"=>103);
            $json_obj = json_encode($json_arr);
            echo $json_obj;
            exit;
        }
    }
}

/**
 * Created by PhpStorm.
 * User: Edison, edited by Charles
 * Date: 2017/5/12
 * Time: 1:10
 */
?>